<?php

namespace App\Http\Middleware;

use App\ApiLog;
use App\ApiLogCategory;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLogging
{

    protected $user;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $data['url'] = $request->url();
        $data['host'] = $request->getSchemeAndHttpHost();
        $data['path'] = $request->path();
        $data['method'] = $request->method();
        $data['request'] = $request->getContent();
        $data['created_by'] = (Auth::user()!=null?Auth::user()->id:null);
        $api_log = ApiLog::create($data);
        $response = $next($request);
        $data['statusCode'] = $response->getStatusCode();
        $data['response'] = $response->getContent();
        foreach(ApiLogCategory::all()->sortBy('order') as $ApiLogCategory){
            if(preg_match($ApiLogCategory->regex, $data['path'])){
                $data['api_log_category_id'] = $ApiLogCategory->id;
                break;
            }
        }
        $api_log->update($data);
        return $response;
    }
}