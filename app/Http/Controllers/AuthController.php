<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthoRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth(){
       return view('posts.login');
    }
public function register(){
        return view('posts.register');
}


public function login(AuthoRequest $request){
       $credentials=$request->only('email','password');
       if (Auth::attempt($credentials)){
           return redirect()->route('blogs')->with('status','Вы успешно авторизовались');
       }
    return view('posts.login')->with('status','Ваши данные не верны');
}


    public function create(RegisterRequest $request){
        if($request->password==$request->confirm_password) {

            User::create([
                'email' => $request->email,
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('auth')->with('status', 'Успешная регистрация');
        }
    }

    public function blogs() {
        return view('posts.blogs');
    }
}
