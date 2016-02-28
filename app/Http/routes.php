<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('users/basicinfo','UserController@');
Route::get('users/education','EducationController@index');
Route::get('users/work_experience','WorkExperienceController@index');
Route::get('users/personal_details','PersonalDetailsController@index');
Route::get('users/skill','SkillsController@index');
Route::get('users/objective','ObjectiveController@index');
Route::get('users/project','ProjectController@index');




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

