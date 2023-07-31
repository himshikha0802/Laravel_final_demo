<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use App\Htpp\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LoginRequest as AuthLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function LoginUser(AuthLoginRequest $request){
        // dd($request->all());
        $credential=['email'=>$request->get('email'),'password'=>$request->get('password')];
        if (Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.',
        ]);
    }
    function logout(){
        if (Auth::check()){
            Auth::logout();
        }
        return redirect()->route('auth.home');
    }
}
