<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('Enseingant.index');
        }
        return view('login.login');
    }
    public function login(Request $req)
    {
        if(Auth::attempt(['email'=>$req->email,'password'=>$req->password])){
            return redirect()->route('Enseingant.index');
        }
        return view('login.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
