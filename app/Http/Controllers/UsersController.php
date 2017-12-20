<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function login()
    {
        return view('user.login');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function signup(Request $request)
    {
    
        return view ('user.signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'number' => 'required',
            'password' => 'required|min:6|confirmed',
               
        ]);

        User::create(request(['username','email','number','password']));

        // auth()->login($user);
        
        return redirect('/');

    
    }

    public function role()
    {
        return view('role.make');
    }
}
