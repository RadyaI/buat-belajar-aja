<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
// use Hash;

class AuthController extends Controller
{
    public function login(){
        return view ('auth.login');
    }

    public function otentikasi(Request $request){

        $form_login = $request->only('email','password');

        if(Auth::attempt($form_login)) {
            return redirect('posts');
        } else {
            return redirect('/')->with('error_message','Wrong email or password');
        }
    }

    public function logout(){

        Session::flush();
        Auth::logout();

        return redirect('/');
    }

    public function form_register(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required' ,
            'email' => 'email|unique:users',
            'password' => 'required|min:3|confirmed',
        ]);

        $register = User::create([
           'name' => $request->input('name'),
           'email' => $request->input('email'),
           'password' => Hash::make($request->input('password')),    
        ]);

        return redirect('/');
    }
}
