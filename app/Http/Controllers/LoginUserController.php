<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate
        $validate = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // attempt to login the user
        if (!Auth::attempt($validate)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
        };
        // regenerate the session token
        request()->session()->regenerate();
        // redirect
        return redirect('/players');
    }

    public function destroy()
    {
        Auth::logout();
        // dd('log the user out');
        return redirect('/login');
    }
}
