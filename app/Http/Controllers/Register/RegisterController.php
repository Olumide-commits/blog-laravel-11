<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.register');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:2|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:2|max:255',
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect()->route('main.index')->with('success', 'Your account has been created.');
    }
}
