<?php

namespace App\Http\Controllers;


use App\Resume;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        $resumes = Resume::where('user_id','=',$user->id)->get();
        return view('dashboard',compact(['user' => $user,'resume' => $resumes]));

    }

    public function createResume($id=null)
    {

        return view('resume');
    }



}
