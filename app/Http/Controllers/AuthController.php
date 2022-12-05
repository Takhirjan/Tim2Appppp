<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthoRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth()
    {
        return view('posts.login');
    }

    public function register()
    {
        return view('posts.register');
    }


    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();
        if (!$user) {
            return response()->json([
                'success' => false,
                    'message' => 'This email is not registered'
                ]);
        }
        if(Auth::attempt($credentials)){
            return response()->json([
                'success'=>true,
                'token'=>$user->createToken($user->email)->accessToken
            ]);
    }
        return response()->json([
            'success'=>false,
            'message'=>'Email or password is invalid'
        ]);
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
