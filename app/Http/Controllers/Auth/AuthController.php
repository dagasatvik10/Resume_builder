<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Laravel\Socialite\Facades\Socialite;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
//    protected $redirectTo = '/';
//
//    /**
//     * Create a new authentication controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('guest', ['except' => 'logout']);
//    }
//
//    /**
//     * Get a validator for an incoming registration request.
//     *
//     * @param  array  $data
//     * @return \Illuminate\Contracts\Validation\Validator
//     */
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|max:255',
//            'email' => 'required|email|max:255|unique:users',
//            'password' => 'required|confirmed|min:6',
//        ]);
//    }
//
//    /**
//     * Create a new user instance after a valid registration.
//     *
//     * @param  array  $data
//     * @return User
//     */
//    protected function create(array $data)
//    {
//        return User::create([
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
//    }
//
    public function redirectGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback()
    {
        $user = Socialite::driver('github')->user();

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_USERAGENT =>'PrakharAkgec',
            CURLOPT_URL => $user['repos_url']
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        $result_array = json_decode($result,true);
        return dd($result_array[0]['name']);
        // $user->token;
    }
//
//    public function redirectFb()
//    {
//        return Socialite::driver('facebook')->redirect();
//    }
//
//    public function FbCallback()
//    {
//        $user = Socialite::driver('facebook')->user();
//
//        return dd($user);
//
//        // $user->token;
//    }
//
//    public function redirectToGithub()
//    {
//        return Socialite::with('github')->redirect();
//    }
//
//    public function handleGithubCallback()
//    {
//        $user = Socialite::with('github')->user();
//
//        return dd($user);
//
//
//        // $user->token;
//    }


}
