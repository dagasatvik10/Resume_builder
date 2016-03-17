<?php

namespace App\Http\Controllers;


use App\Resume;
use App\Section;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showDashboard()
    {
        $user = Auth::user();
        $resumes = $user->resumes;
        return view('dashboard',compact(['user','resumes']));

    }

    public function createResume($id=null)
    {

        return view('resume');
    }


}
