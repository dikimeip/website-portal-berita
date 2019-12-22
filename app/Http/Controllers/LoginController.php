<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function do_login(Request $request)
    {
    	if (auth()->attempt($request->only('email','password'))) {
    		return "Ok";
    	} else {
    		return "Gagal";
    	}
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
