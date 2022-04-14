<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/admin/dashboard');
        }else{
            return view('backoffice.login');
        }
    }

    public function validation(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/admin/dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/admin/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}