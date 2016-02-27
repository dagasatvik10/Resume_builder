<?php

Route::get('users/Basic_info','UserController@index');
Route::get('users/education','EducationController@index');
Route::get('users/work_experience','WorkExperienceController@index');
Route::get('users/personal_details','PersonalDetailsController@index');
Route::get('users/skill','SkillsController@index');
Route::get('users/objective','ObjectiveController@index');
Route::get('users/project','ProjectController@index');


