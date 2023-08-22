<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        // Validate login form
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Throw exception if to login fails
        if (!auth()->attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials could not be matched.'
            ]);
        }

        // Login succeeded
        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
