<?php

Route::group(['middleware' => 'web'], function ()
{
    Route::auth();
    Route::get('/',['as' => 'home','uses' => 'HomeController@home']);
    Route::get('dashboard',['as' => 'user.dashboard','uses' => 'UserController@dashboard']);
    Route::get('resume/{id?}',['as' => 'resume.create','uses' => 'ResumeController@create']);
    Route::post('resume/{id}',['as' => 'resume.store','uses' => 'ResumeController@store']);
    Route::post('/resume',['as' => 'resume.name','uses' => 'ResumeController@store_resume_name']);
    Route::get('resume/{id?}/delete',['as' => 'resume.delete','uses' => 'ResumeController@delete']);
    Route::get('resume/{id?}/show',['as' => 'resume.show','uses' => 'ResumeController@show']);
    Route::get('auth/github','Auth\AuthController@redirectGithub');
    Route::get('auth/github/callback','Auth\AuthController@githubCallback');
    Route::get('auth/fb','Auth\AuthController@redirectFb');
    Route::get('auth/fb/callback','Auth\AuthController@FbCallback');
});
