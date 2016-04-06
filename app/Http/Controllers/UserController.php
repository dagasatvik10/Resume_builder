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
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $resumes = $user->resumes;
        return view('dashboard',compact(['user','resumes']));
    }
<<<<<<< HEAD
    public function homepage()
    {
        return view('vendor.homepage');
    }


=======
>>>>>>> ae4b27259f2f97605f6e3ec591f4a4d2e82457fe

}
