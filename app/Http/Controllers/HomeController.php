<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Validator;
use Auth;

class HomeController extends Controller
{
    function index() {}

    function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email'           => 'required|email',
            'password'        => 'required|alphaNum|min:3',
        ]);

        $user_data = array(
            'email'           => $request->get('email'),
            'password'        => $request->get('password'),
        );

        if(Auth::attempt($user_data)) 
        {
            return redirect()->route('successLogin', app()->getLocale());
        }
        else 
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function successLogin()
    {
        return view('front.terms');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('welcome', app()->getLocale());
    }

}
