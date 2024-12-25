<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        // dd(Hash::make(123456));
        if(Auth::check()){
            return redirect('panel/dashboard'); 
        }
    return view('panel.login');
    }

    public function auth_login(Request $request)
    {
        // dd($request->all());
        // $remember = $request->remember;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('panel/dashboard');
        }
        else
        {
            return redirect('login')->with('error', 'Invalid Credentials');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/panel/login');
    }
}