<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('form/basic_info','FormController@basic_info');
Route::get('form/education','FormController@education');
Route::get('form/work_experience','FormController@work_experience');
Route::get('form/personal_details','FormController@personal_details');
Route::get('form/skill','FormController@skill');
Route::get('form/objective','FormController@objective');
Route::get('form/project','FormController@project');
/*Route::get('form/dashboard',function(){
	return view('form.dashboard');
});*/
Route::group(['middleware' => ['web']], function()
{
	Route::get('auth/github','Auth\AuthController@redirectGithub');
	Route::get('auth/github/callback','Auth\AuthController@githubCallback');
	Route::get('auth/fb','Auth\AuthController@redirectFb');
	Route::get('auth/fb/callback','Auth\AuthController@fbCallback');

});


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/dashboard', 'UserController@index');
    Route::get('/resume','UserController@createResume');
});

