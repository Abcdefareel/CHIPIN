<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public Users $user;

    public function __construct()
    {
        $this->user = new Users();
    }
    public function index()
    {
        return view('Register');
    }

    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $this->user->insertData($validated);

        return redirect()->route('login')->with('success', 'Berhasil membuat akun');
    }
}
