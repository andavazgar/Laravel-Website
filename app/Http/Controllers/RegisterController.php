<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min: 3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min: 8', 'max:255'],
        ]);

        // Default avatar image
        $attributes['avatar'] = '/images/avatar-1.png';

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
