<?php

namespace App\Http\Middleware;

use App\Nonce;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AuthDigest
{

    protected $user;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $x_requested_with = $request->header('X-Requested-With');
        if($x_requested_with == "XMLHttpRequest"){
            // AJAX REQUEST going via WEB
            return app(\App\Http\Middleware\EncryptCookies::class)->handle($request, function($request) use ($next){
                return  app(\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class)->handle($request, function($request) use ($next){
                return  app(\Illuminate\Session\Middleware\StartSession::class)->handle($request, function($request) use ($next){
                return  app(\Illuminate\View\Middleware\ShareErrorsFromSession::class)->handle($request, function($request) use ($next){
                return  app(\App\Http\Middleware\VerifyCsrfToken::class)->handle($request, function($request) use ($next){
                return  app(\Illuminate\Routing\Middleware\SubstituteBindings::class)->handle($request, function($request) use ($next){
                return  app(\App\Http\Middleware\Authenticate::class)->handle($request, $next);
            });});});});});});
        }

        $authorization = $request->header('authorization');
        if($authorization == null){
            return $this->getUnauthorizedResponse();
        }else{
            $authClientData = new AuthDigestData($authorization);
            // Check for user
            $this->user = User::where('username','=',$authClientData->username)->first();
            if ($this->user == null) {
                return response('Unauthorized', 401);
            }
            // Check for wrong nonce
            if ($this->isWrongNonce($authClientData->nonce)) {
                $this->deleteNonce();
                return $this->getUnauthorizedResponse("true");
            }
            // Check for correct nonce count
            $nc = hexdec($authClientData->nc);
            if ($nc < $this->user->nonce->nc + 1){
                $this->deleteNonce();
                return $this->getUnauthorizedResponse("true");
            }
            $this->user->nonce->nc = $nc;
            $this->user->nonce->save();

            // Check request URI is the same as the auth digest uri
            if (trim($authClientData->uri, '/') == trim($request->path(), '/')){
            }elseif(trim($authClientData->uri, '/') == trim($request->path() . trim($request->fullUrl(),$request->url()), '/')){
            }else{
                return response('Unauthorized', 401);
            }
            // Check opaque is correct
            if ($authClientData->opaque != $this->getOpaque()) {
                return response('Unauthorized', 401);
            }

            // Getting A1 hash
            $HA1 = $this->user->HA1;
            // Generate A2 hash
            if ($authClientData->qop == 'auth-int') {
                $A2 = $request->method() . ':' . stripslashes($authClientData->uri) . ':' . $request->getContent();
                $HA2 = md5($A2);
            } else {
                $A2 = $request->method() . ':' . stripslashes($authClientData->uri);
                $HA2 = md5($A2);
            }
            // Generate the expected response
            if ($authClientData->qop == 'auth' || $authClientData->qop == 'auth-int') {
                $expectedResponse = md5($HA1 . ':' . $authClientData->nonce . ':' . $authClientData->nc . ':' . $authClientData->cnonce . ':' . $authClientData->qop . ':' . $HA2);
            } else {
                $expectedResponse = md5($HA1 . ':' . $authClientData->nonce . ':' . $HA2);
            }
            // Check request contained the expected response
            if ($authClientData->response != $expectedResponse) {
                //$this->addHeaderUnauthorized();
                return response('Unauthorized', 401);
            }
            // Set user
            Auth::loginUsingId($this->user->id);

            // Authentication successful
            return $next($request);
        }
    }


    protected function getUnauthorizedResponse(String $stale = "false") {
            return response('Unauthorized', 401)->header('WWW-Authenticate',
                                                                'Digest realm="'.$this->getAuthRealm().'", '.
                                                                'qop="auth-int, auth", '.
                                                                'algorithm="MD5", '.
                                                                'stale="'.$stale.'", '.
                                                                'nonce="'.$this->createNonce().'", '.
                                                                'opaque="'.$this->getOpaque().'"');
    }

    ////////////////////////////////////////////////////////////////////////
    // @extension
    // Gets the authentication realm for this class
    protected function getAuthRealm() {
        return config('app.realm')."_api";
    }

    // Gets the opaque for this class
    protected function getOpaque() {
        return md5(config('app.realm')."_api");
    }

    // Creates a new nonce to send to the client
    protected function createNonce() {
        $nonce = new Nonce();
        $nonce->nonce = md5(uniqid());
        $nonce->save();
        return $nonce->nonce;
    }

    protected function deleteNonce() {
        if($this->user->nonce != null){
            $this->user->nonce->delete();
        }
    }

    protected function isWrongNonce($_nonce){
        if($_nonce == null){
            return true;
        }
        if($this->user->nonce != null){
            if($this->user->nonce->nonce == $_nonce){
                // Nonce is correct
                return false;
            }else{
                // Nonce isn't correct, so needs to be removed
                $this->user->nonce->delete();
            }
        }
        $nonce = Nonce::where('nonce','=',$_nonce)->where('nc','=',0)->first();
        if($nonce != null){
            // Nonce is correct and needs to assigned to the user
            $nonce->user_id = $this->user->id;
            $nonce->save();
            $this->user = User::where('id','=',$this->user->id)->first();
            return false;
        }else{
            return true;
        }
    }
}

/**
 * @private
 */
class AuthDigestData {

    public $username;
    public $nonce;
    public $nc;
    public $cnonce;
    public $qop;
    public $uri;
    public $response;
    public $opaque;

    public function __construct($header) {
        preg_match_all('@(username|nonce|uri|nc|cnonce|qop|response|opaque)=[\'"]?([^\'",]+)@', $header, $t);
        $data = array_combine($t[1], $t[2]);

        $this->username = $data['username'] ?? '';
        $this->nonce = $data['nonce'] ?? '';
        $this->nc = $data['nc'] ?? 0;
        $this->cnonce = $data['cnonce'] ?? '';
        $this->qop = $data['qop'] ?? 'auth-int';
        $this->uri = $data['uri'] ?? '/';
        $this->response = $data['response'] ?? '';
        $this->opaque = $data['opaque'] ?? '';
    }

}
