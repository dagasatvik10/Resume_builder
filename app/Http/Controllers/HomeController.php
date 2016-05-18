<?php

namespace App\Http\Controllers;

use App\Resume;

use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
    {
        $resume = Resume::all();
        return view('home',compact('resume'));
    }
}
