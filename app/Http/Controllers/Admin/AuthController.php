<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['email' => 'Unauthorized access.']);
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegister() {
        return view('admin.register');
    }

    public function register(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true
        ]);

        Auth::login($user);

        return redirect()->route('admin.dashboard');
    }

    public function dashboard() {
        $inquiries = Contact::latest()->get();
        return view('admin.dashboard', compact('inquiries'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
