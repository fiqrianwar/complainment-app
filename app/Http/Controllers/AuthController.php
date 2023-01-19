<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('pages.formLogin');
    }
    public function registrationView()
    {
        return view('pages.formRegistration');
    }


    public function registration(Request $request)
    {
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/');
    }


    public function loginAuth(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }
        return redirect("/")->withSuccess('Login details are not valid');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
