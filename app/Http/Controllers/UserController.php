<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
 

    public function index()
    {
       return view('login');
    }
    public function dash()
    {
       return view('dashboard');
    }
    public function seller()
    {
       return view('seller');
    }
    public function admin()
    {
       return view('admin');
    }
    public function login(Request $request)
    {
       $request->validate([
        'email'=>'required',
        'password'=>'required',
       ]);

       $credentials = $request->only('email','password');
     
       if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard');
    }
    return redirect('/')->with('danger', 'Login Credential is Incorrect');

    }
    public function logout(){
     
        Session::flush();
        Auth::logout();
        return redirect('/')->with('success', 'Logout Successfully');

    }
 

   
}
