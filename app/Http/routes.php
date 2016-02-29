<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('form/basic_info','FormController@basic_info');
Route::get('form/education','FormController@education');
Route::get('form/work_experience','FormController@work_experience');
Route::get('form/personal_details','FormController@personal_details');
Route::get('form/skill','FormController@skill');
Route::get('form/objective','FormController@objective');
Route::get('form/project','FormController@project');
Route::get('design/dashboard',function(){
	return view('design.dashboard');
});
Route::get('design/resume',function(){
	return view('design.resume');
});
Route::group(['middleware' => ['web']], function()
{
	Route::get('auth/github','Auth\AuthController@redirectGithub');
	Route::get('auth/github/callback','Auth\AuthController@githubCallback');
	Route::get('auth/fb','Auth\AuthController@redirectFb');
	Route::get('auth/fb/callback','Auth\AuthController@fbCallback');

});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/user', ['as' => 'user.index','uses' => 'UserController@index']);
    Route::get('/user/resume/{id?}',['as' => 'user.resume','uses' => 'UserController@createResume']);
});

