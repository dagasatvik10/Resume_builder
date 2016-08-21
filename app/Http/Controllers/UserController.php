<?php

namespace App\Http\Controllers;


use App\Linkedin_detail;
use App\Resume;
use App\Section;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
        $linkedin = $user->linkedin;
        return view('dashboard',compact(['user','resumes','linkedin']));
    }

    public function homepage()
    {
        return view('vendor.homepage');
    }

    public function redirectLn()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function LnCallback()
    {
        $user = Socialite::driver('linkedin')->user();
        $linkedin_detail = new Linkedin_detail;
        $linkedin_detail->name = $user->name;
        $linkedin_detail->email = $user->email;
        $linkedin_detail->profilePic = $user->avatar_original;
        $linkedin_detail->user()->associate(Auth::user());
        $linkedin_detail->save();        
        return redirect()->route('user.dashboard');
    }
}
