<?php

namespace App\Http\Controllers\Auth;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function redirectGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    protected function githubCallback()
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
        return dd($result_array[1]['name']);
        // $user->token;
    }

    protected function redirectFb()
    {
        return Socialite::driver('facebook')->redirect();
    }

    protected function FbCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return Redirect::to('/dashboard');
    }

    private function findOrCreateUser($fbUser)
    {
        if ($authUser = User::where('email', $fbUser->email)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $fbUser->name,
            'email' => $fbUser->email,
            'password' => bcrypt($fbUser->token)

        ]);
    }


}
