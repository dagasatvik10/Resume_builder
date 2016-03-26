<?php

Route::group(['middleware' => 'web'], function ()
{
    Route::auth();
    Route::get('/','HomeController@home');
    Route::get('dashboard',['as' => 'user.dashboard','uses' => 'UserController@showDashboard']);
    Route::get('resume/{id}',['as' => 'resume.create','uses' => 'ResumeController@create']);
    Route::post('resume/{id}',['as' => 'resume.store','uses' => 'ResumeController@store']);
    Route::post('/resume',['as' => 'resume.name','uses' => 'ResumeController@store_resume_name']);
    Route::get('resume/{id}/delete',['as' => 'resume.delete','uses' => 'ResumeController@delete']);
});
