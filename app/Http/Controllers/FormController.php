<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
	public function basic_info()
	{
		return view('form.basic_info');
	}
	public function education()
	{
		return view('form.education');
	}
	public function objective()
	{
		return view('form.objective');
	}
	public function work_experience()
	{
		return view('form.work_experience');
	}
	public function skill()
	{
		return view('form.skill');
	}
	public function personal_details()
	{
		return view('form.personal_details');
	}
	public function project()
	{
		return view('form.project');
	}
}
