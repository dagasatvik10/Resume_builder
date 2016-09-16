<?php

namespace App\Http\Controllers\Auth;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
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

    protected function redirectFb()
    {

        return Socialite::driver('facebook')->redirect();
    }

    protected function FbCallback()
    {
        $user = Socialite::driver('facebook')->user();
        //dd($user);

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return Redirect::to('/dashboard');
    }

    protected function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    protected function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        //dd($user);

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return Redirect::to('/dashboard');
    }

    private function findOrCreateUser($user)
    {
        $authUser = User::where('email', $user->email)->first();

        if ($authUser != null)
        {
            return $authUser;
        }

        return User::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => bcrypt($user->token)
        ]);
    }


}
