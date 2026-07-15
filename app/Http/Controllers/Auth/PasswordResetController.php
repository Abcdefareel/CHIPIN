<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\PasswordReset;
use App\Mail\SendOtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    public function showForgot()
    {
        return view('auth.forgot');
    }

    public function sendOtp(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = Users::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan');
        }

        $otp = rand(100000, 999999);
        $expires = Carbon::now()->addMinutes(15);

        PasswordReset::create([
            'user_id' => $user->id,
            'email' => $user->email,
            'otp' => $otp,
            'expires_at' => $expires,
        ]);

        Mail::to($user->email)->send(new SendOtpMail($otp));

        return redirect()->route('password.verify.form')->with('success', 'OTP telah dikirim ke email Anda');
    }

    public function showVerify()
    {
        return view('auth.verify');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string',
        ]);

        $record = PasswordReset::where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('used', false)
            ->orderByDesc('created_at')
            ->first();

        if (!$record || Carbon::now()->gt($record->expires_at)) {
            return back()->with('error', 'OTP tidak valid atau sudah kadaluarsa');
        }

        $record->update(['used' => true]);

        // store a temp token in session to allow resetting password
        session(['password_reset_user_id' => $record->user_id]);

        return redirect()->route('password.reset.form')->with('success', 'OTP diverifikasi, silakan atur kata sandi baru');
    }

    public function showReset()
    {
        if (!session('password_reset_user_id')) {
            return redirect()->route('password.forgot.form')->with('error', 'Akses ditolak');
        }
        return view('auth.reset');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $userId = session('password_reset_user_id');
        if (!$userId) {
            return redirect()->route('password.forgot.form')->with('error', 'Akses ditolak');
        }

        $user = Users::find($userId);
        if (!$user) {
            return redirect()->route('password.forgot.form')->with('error', 'Pengguna tidak ditemukan');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        session()->forget('password_reset_user_id');

        return redirect()->route('login')->with('success', 'Kata sandi berhasil diperbarui, silakan masuk');
    }
}
