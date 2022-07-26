<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::get('/questionnaires', 'QuestionnaireController@app');

Route::get('/conn', function(){
    $data = [
        'data' => [
            'connection' => 'OK',
            'api' => [
                'url' => [
                    'current' => config('app.url').'/api/',
                    'local' => config('app.url').'/api/',
                    'production' => config('app.url').'/api/',
                    'development' => config('app.dev_url').'/api/',
                ],
            ],
            'com.educat.android.educatapp' => [
                'version' => [
                    'minimum' => 3.0,
                    'latest' => 3.0,
                ],
                'notice' => 'The EDUCAT App and Webservices have been moved to the new Laravel Framework. Account passwords had to be regenerated as a result of this. Contact Philippe Saey (philippe.saey@kuleuven.be) for your new password.'
            ],
            'com.educat.android.educatcontactapp' => [
                'version' => [
                    'minimum' => 2.0,
                    'latest' => 2.0,
                ],
            ],
            'com.educat.android.incaseapp' => [
                'version' => [
                    'minimum' => 2.0,
                    'latest' => 2.0,
                ],
            ],
            'com.nomade.android.nomadeapp' => [
                'version' => [
                    'minimum' => 0.1,
                    'latest' => 0.1,
                ],
            ],
        ],
    ];
    return $data;
});


Route::middleware('\App\Http\Middleware\ApiLogging::class')->get('/errorPages/{errorPage}', 'Api\DebugController@errorPage');
Route::middleware('\App\Http\Middleware\ApiLogging::class')->get('/permissions', 'Api\PermissionController@index');

Route::middleware('\App\Http\Middleware\AuthDigest::class')->get('/apiLogs', 'Api\ApiLogController@index');

Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->get('/users/login', 'Api\UserController@login');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/companies', 'Api\CompanyController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/instruments', 'Api\InstrumentController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/instrument_types', 'Api\InstrumentTypeController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/instrumentTypes', 'Api\InstrumentTypeController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/parameters', 'Api\ParameterController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/measurements', 'Api\MeasurementController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/questionnaires', 'Api\QuestionnaireController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/questions', 'Api\QuestionController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/setups', 'Api\SetupController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/submissions', 'Api\SubmissionController');
Route::middleware('\App\Http\Middleware\AuthDigest::class','\App\Http\Middleware\ApiLogging::class')->resource('/users', 'Api\UserController');
