<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|string|min:5|max:30',  // 'password' => 'required|confirmed|string|min:5|max:30'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect(url('/cats/create'));
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255|email',
            'password' => 'required|string|min:5|max:30',
        ]);

        $isLogin = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if(! $isLogin)
        {
            //flash session 
            return back();
        }
        return redirect(url('/cats/create'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/login'));
    }
}
