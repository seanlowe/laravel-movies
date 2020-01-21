<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class RegistrationController extends Controller
{
    public function create() {
        return view('signup');
    }

    public function store() {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(
            request(['name', 'email', bcrypt(request('password'))])
        );

        auth()->login($user);

        return redirect()->home();
    }
}