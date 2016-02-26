<?php

// Route::get('/',function(){

// 	return Form::text('usr');
// });
Route::group(['middleware' => ['web']], function()
{
	Route::get('auth/ln', 'Auth\AuthController@redirectToLinkedin');
	Route::get('auth/ln/callback', 'Auth\AuthController@handleLinkedinCallback');
	Route::get('auth/fb', 'Auth\AuthController@redirectToFacebook');
	Route::get('auth/fb/callback', 'Auth\AuthController@handleFacebookCallback');
});

