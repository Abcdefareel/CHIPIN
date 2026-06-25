<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public Users $user;

    public function __construct()
    {
        $this->user = new Users();
    }

    public function index()
    {
        return view('Login');
    }

    public function loginProcess(Request $request)
    {
        $validated = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $loginField = filter_var($validated['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginField => $validated['login'],
            'password' => $validated['password'],
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('Success', 'Berhasil login');
        }

        return redirect()->route('login')->with('error', 'Username atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Berhasil logout');
    }
}
