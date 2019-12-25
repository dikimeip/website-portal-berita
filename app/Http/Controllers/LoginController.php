<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function do_login(Request $request)
    {
    	if (auth()->attempt($request->only('email','password'))) {
    		return redirect()->route('user');
    	} else {
    		Session::flash('success','Username Atau Password Salah');
            return redirect()->route('user.login');
    	}
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
