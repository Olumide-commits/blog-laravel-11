<?php

namespace App\Http\Controllers;

<<<<<<< HEAD

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
=======
use Illuminate\Validation\ValidationException;
>>>>>>> origin/main

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
<<<<<<< HEAD
            'password' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



=======
            'password' => 'required'
        ]);

>>>>>>> origin/main
        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
