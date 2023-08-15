<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        return view('login');
    }

    public function login( Request $request){
        $email=$request->email;
        $password=$request->password;
        $infos=['email'=>$email,'password'=>$password];
             if(Auth::attempt($infos)){
                $request->session()->regenerate();
                return redirect()->route('home');
             }
             else{
                return back()->withErrors([
                    'email'=>'Email ou mot de pass et incorrect.'
                ])->onlyInput('email');
             }
    }
    public function logout(){
        Session::flash('key', 'value');
        Auth::logout();
        return redirect()->route('login.show');
    }
}
