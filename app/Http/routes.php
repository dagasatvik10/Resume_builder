<?php

use App\Http\Controllers\UserController;
//use Illuminate\Support\Facades\Route;


/*Route::group(['middleware' => ['web']], function()
{
	Route::get('auth/github','Auth\AuthController@redirectGithub');
	Route::get('auth/github/callback','Auth\AuthController@githubCallback');
	Route::get('auth/fb','Auth\AuthController@redirectFb');
	Route::get('auth/fb/callback','Auth\AuthController@fbCallback');

});*/
Route::get('/','HomeController@home');

Route::group(['middleware' => 'web'], function ()
{
    Route::auth();
    Route::get('dashboard',['as' => 'user.dashboard','uses' => 'UserController@showDashboard']);
    Route::get('resume',['as' => 'resume.create','uses' => 'ResumeController@create']);
	Route::post('/storeName',['as' => 'resume.name','uses' => 'ResumeController@store_resume_name']);
});



