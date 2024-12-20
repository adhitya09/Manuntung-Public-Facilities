<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function username()
    {
        return 'username_or_email';
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
    protected function Login(Request $request)
    {
        $loginData = $request->only($this->username(), 'password');

        $loginType = filter_var($loginData[$this->username()], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginType => $loginData[$this->username()],
            'password' => $loginData['password']
        ];

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin');
            } elseif ($user->role == 'superadmin') {
                return redirect()->route('superadmin');
            } elseif ($user->role == 'user') {
                return redirect()->route('user');
            } else {
                Auth::logout();
                return redirect('/login')->with('error', 'Unauthorized access detected. Please contact support.');
            }
        } else {
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }
}
