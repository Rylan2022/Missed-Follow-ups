<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;

class AuthControllerAdv extends Controller
{
    public function register(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
        ]);

        $users = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        event(new Registered($users));

        return redirect()
        ->route('Auth.login')
        ->with('status', 'Registration successful. Please check your email to verify your account.');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required']
        ]);

        if(!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages ([
                'email' => 'Invalid credentials provided.',
            ]);
        }

        $request->session()->regenerate();

        if(Auth::user() && !Auth::user()->hasVerifiedEmail()){
            Auth::logout();
            return back()->withErrors(['email' => 'Please verify your email before logging in.']);
        }

        return redirect()->intended(route('dashboard'))
            ->with('success', 'Logged in successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login.form')
            ->with('status', 'Logged out successfully.');
    }
}

//GPT => https://chatgpt.com/share/6925ae77-45f0-8000-8fbb-73da541a033d