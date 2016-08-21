<?php

namespace App\Http\Controllers;

use App\Resume;

use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
    {
        $resumes = Resume::all();
        return view('home',compact('resumes'));
    }
    
}
