<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function halamanlogin()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        // $request->validate([
        //     'email' => "required|email:dns",
        //     'password' => "required"
        // ]);

        // dd('Berhasil');
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect ('/');
    }

    public function registrasi()
    {
        return view ('registrasi');
    }


    // public function newdata(Request $request)
    // {
    //     dd($request->all());
    // }
}
