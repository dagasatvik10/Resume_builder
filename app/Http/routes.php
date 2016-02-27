<?php

Route::get('users/basic_info','UserController@index');
Route::get('users/education','EducationController@index');
Route::get('users/work_experience','WorkExperienceController@index');
Route::get('users/personal_details','PersonalDetailsController@index');
Route::get('users/skill','SkillsController@index');
Route::get('users/objective','ObjectiveController@index');
Route::get('users/project','ProjectController@index');


Route::group(['middleware' => ['web']], function()
{
	Route::get('auth/ln', 'Auth\AuthController@redirectToLinkedin');
	Route::get('auth/ln/callback', 'Auth\AuthController@handleLinkedinCallback');
	Route::get('auth/fb', 'Auth\AuthController@redirectToFacebook');
	Route::get('auth/fb/callback', 'Auth\AuthController@handleFacebookCallback');
	Route::get('auth/git', 'Auth\AuthController@redirectToGithub');
	Route::get('auth/git/callback', 'Auth\AuthController@handleGithubCallback');
});


