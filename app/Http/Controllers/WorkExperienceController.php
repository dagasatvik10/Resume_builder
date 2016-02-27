<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkExperienceController extends Controller
{
    public function index()
    {
        return view('users.work_experience');
    }
}
