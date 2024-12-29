<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginAdminController extends Controller
{
    public function index()
    {

        return view('auth.admin.login');
    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->route('admin.dashboard');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }
    public function logoutAdmin(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}