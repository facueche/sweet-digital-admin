<?php

namespace DebianMoor\SweetDigitalAdmin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('sweetdigitaladmin::pages.auth.login');
    }


    public function login()
    {
        $rules = [
            $this->username() => 'required|string',
            'password' => 'required|string'
        ];

        $credentials = $this->validate(request(), $rules);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()
            ->withErrors([
                $this->username() => trans('auth.failed'),
            ])
            ->withInput(request([$this->username()]));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function username()
    {
        return 'username';
    }

}
