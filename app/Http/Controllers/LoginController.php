<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function LoginPage()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function TryLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = ["username" => $request->username, "password" => $request->password];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            Session::flash('message', 'Invalid Credentials');
            Session::flash('alert-type', 'error');
            return redirect()->back();
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
