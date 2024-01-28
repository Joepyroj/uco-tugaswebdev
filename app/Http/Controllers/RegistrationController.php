<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'age' => $request->input('age'),
            'cv_path' => $request->input('cv_path'),
            'location' => $request->input('location'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // You can add additional logic here, such as sending a welcome email or performing login

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
