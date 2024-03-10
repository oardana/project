<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;

class ControllerRegistration extends Controller
{
    //

    public function index()
    {
        return view('registration');
    }
    
    public function store(Request $request){
        $request->validate([
            "name" =>'required',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:8',
            'phone_number' =>'required|min:12|numeric',
            'address' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required'
        ]);

        User::create($request->all());
        return redirect('/login');
    }
}
