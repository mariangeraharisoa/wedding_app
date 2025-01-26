<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request) {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {
            echo "Login mety"; die;
        }

        return view('welcome');

        // return back()->withErrors(['email' => 'invalid credentials']);
    }
}
