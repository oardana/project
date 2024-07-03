<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ControllerLogin extends Controller
{
    //
    public function index(){
        if(Auth::guest()){
            return view('index');
        }else{
            return view('layouts.index');
        }
    }
    
    public function authenticate(Request $request){
        $result = $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
        ]); 

        if(Auth::attempt($result)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('error','Data Not found');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

