<?php

Route::group(['middleware' => 'web'], function ()
{
    Route::auth();
    Route::get('/',['as' => 'home','uses' => 'HomeController@home']);
    Route::get('dashboard',['as' => 'user.dashboard','uses' => 'UserController@dashboard']);
    Route::get('resume/{id?}',['as' => 'resume.create','uses' => 'ResumeController@create']);
    Route::post('resume/{id?}',['as' => 'resume.store','uses' => 'ResumeController@store']);
    Route::post('store_resume_name',['as' => 'resume.name','uses' => 'ResumeController@store_resume_name']);
    Route::delete('resume/{id?}/delete',['as' => 'resume.delete','uses' => 'ResumeController@delete']);
    Route::post('resume/{id?}/show',['as' => 'resume.show','uses' => 'ResumeController@show']);
    Route::post('resume/{id?}/download',['as' => 'resume.download','uses' => 'ResumeController@download']);

    Route::get('auth/github','ResumeController@redirectGithub');
    Route::get('auth/github/callback','ResumeController@githubCallback');
    Route::get('auth/fb','Auth\AuthController@redirectFb');
    Route::get('auth/fb/callback','Auth\AuthController@FbCallback');
    Route::get('auth/ln','ResumeController@redirectLn');
    Route::get('auth/ln/callback','ResumeController@LnCallback');

    Route::post('resume/{section_id}/{resume_id}/addSection',['as' => 'resume.addSection','uses' => 'ResumeController@addSection']);
    Route::post('resume/{mapping_section_id}/{subsection_id}/addSubsection',['as' => 'resume.addSubsection','uses' => 'ResumeController@addSubsection']);
    Route::post('resume/{mapping_section_id}/{resume_id}/deleteSection',['as' => 'resume.deleteSection','uses' => 'ResumeController@deleteSection']);
    Route::post('resume/{mapping_subsection_id}/{resume_id}/deleteSubsection',['as' => 'resume.deleteSubsection','uses' => 'ResumeController@deleteSubsection']);

    Route::post('resume/{id}/addNewSection',['as' => 'resume.addNewSection','uses' => 'ResumeController@addNewSection']);
    Route::get('test/{id}','ResumeController@test');

});
