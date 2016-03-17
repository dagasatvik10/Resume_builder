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


Route::group(['middleware' => 'web'], function ()
{
    Route::auth();
	//Route::get('/user', ['as' => 'user.index','uses' => 'UserController@index']);
    Route::get('dashboard',['uses' => 'UserController@showDashboard']);
    Route::get('resume','UserController@createResume');
    //Route::get('/user/resume/{id?}',['as' => 'user.resume','uses' => 'UserController@createResume']);
});
