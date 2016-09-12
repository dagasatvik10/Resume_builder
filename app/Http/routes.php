<?php

Route::group(['middleware' => 'web'], function ()
{
    // Authentication routes
    Route::auth();

    // Home page route
    Route::get('/',['as' => 'home','uses' => 'HomeController@home']);

    // Dashboard route after login
    Route::get('dashboard',['as' => 'user.dashboard','uses' => 'UserController@dashboard']);

    // Resume routes for creating, editing, and deleting
    Route::get('resume/{id?}',['as' => 'resume.create','uses' => 'ResumeController@create']);
    Route::post('resume/{id?}',['as' => 'resume.store','uses' => 'ResumeController@store']);
    Route::post('store_resume_name',['as' => 'resume.name','uses' => 'ResumeController@store_resume_name']);
    Route::delete('resume/{id?}/delete',['as' => 'resume.delete','uses' => 'ResumeController@delete']);
    Route::get('resume/{id?}/show/{resume_design}',['as' => 'resume.show','uses' => 'ResumeController@show']);
    Route::get('resume/{id?}/download/{resume_design}',['as' => 'resume.download','uses' => 'ResumeController@download']);

    // Social Routes for github, fb and linkedin
    Route::get('auth/github','ResumeController@redirectGithub');
    Route::get('auth/github/callback','ResumeController@githubCallback');
    Route::get('auth/fb','Auth\AuthController@redirectFb');
    Route::get('auth/fb/callback','Auth\AuthController@FbCallback');
    Route::get('auth/ln','UserController@redirectLn');
    Route::get('auth/ln/callback','UserController@LnCallback');

    // Section and subsection routes for resumes
    Route::post('resume/{section_id}/{resume_id}/addSection',['as' => 'resume.addSection','uses' => 'ResumeController@addSection']);
    Route::post('resume/{mapping_section_id}/{subsection_id}/addSubsection',['as' => 'resume.addSubsection','uses' => 'ResumeController@addSubsection']);
    Route::post('resume/{mapping_section_id}/{resume_id}/deleteSection',['as' => 'resume.deleteSection','uses' => 'ResumeController@deleteSection']);
    Route::post('resume/{mapping_subsection_id}/{resume_id}/deleteSubsection',['as' => 'resume.deleteSubsection','uses' => 'ResumeController@deleteSubsection']);

    Route::post('resume/{id}/addNewSection',['as' => 'resume.addNewSection','uses' => 'ResumeController@addNewSection']);
    Route::post('resume/{id}/deleteNewSection',['as' => 'resume.deleteNewSection','uses' => 'ResumeController@deleteNewSection']);
    Route::post('resume/{id}/addNewSubsection',['as' => 'resume.addNewSubsection','uses' => 'ResumeController@addNewSubsection']);
    Route::post('resume/{id}/deleteNewSubsection',['as' => 'resume.deleteNewSubsection','uses' => 'ResumeController@deleteNewSubsection']);
});
