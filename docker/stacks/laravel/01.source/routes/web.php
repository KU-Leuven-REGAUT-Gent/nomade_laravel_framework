<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Mail\WelcomeMail;


Route::get('/', 'DefaultController@home');
Route::get('/home', 'DefaultController@home')->name('home');
Route::get('/about', 'DefaultController@about')->name('about');

Route::get('/service', 'ServiceController@index')->name('service');
Route::post('/service', 'ServiceController@store');



Route::resource('apiLogs','ApiLogController');
Route::resource('questionnaires','QuestionnaireController');
Route::post('questionnaires/{questionnaire}/export','QuestionnaireController@export');
Route::resource('questionnaires/{questionnaire}/questions','QuestionController');
Route::get('/question/getAnswers/{id}','QuestionController@getAnswers');
Route::resource('questionnaires/{questionnaire}/questions/{question}/answers','AnswerController');
Route::post('questionnaires/{questionnaire}/questions/{question}/answers/{answer}/up','AnswerController@up');
Route::post('questionnaires/{questionnaire}/questions/{question}/answers/{answer}/down','AnswerController@down');
Route::post('questionnaires/{questionnaire}/questions/{question}/duplicate','QuestionController@duplicate');
Route::post('questionnaires/{questionnaire}/questions/{question}/up','QuestionController@up');
Route::post('questionnaires/{questionnaire}/questions/{question}/down','QuestionController@down');
Route::resource('questions','QuestionController');
Route::resource('questions/{question}/answers','AnswerController');
Route::resource('answers','AnswerController');
Route::resource('parameters','ParameterController');
Route::resource('parameterValues','ParameterValueController');
Route::get('parameters/define/java','ParameterController@defineJava')->name('parameters.defineJava');
Route::get('parameters/define/cpp','ParameterController@defineCpp')->name('parameters.defineCpp');
// Route::get('parameters/{parameter}/description','ParameterController@description')->name('parameters.description');
Route::resource('submissions','SubmissionController');
Route::resource('setups','SetupController');
Route::get('setups/{setup}/raw','SetupRawController@raw');
Route::resource('users','UserController');
Route::resource('roles','RoleController');
Route::resource('permissions','PermissionController');
Route::resource('companies','CompanyController');
Route::resource('instruments','InstrumentController');
Route::resource('instrumentTypes','InstrumentTypeController');
Route::resource('questionnaireGroups','QuestionnaireGroupController');
Route::resource('questionnaireCategories','QuestionnaireCategoryController');
Route::resource('measurements','MeasurementController');

Route::get('/email', function (){
    return new WelcomeMail();
});

Auth::routes();

Route::get('/routes', 'RouteController@index');

Route::get('/status', 'StatusController@index');