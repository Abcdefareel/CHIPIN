<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CreatorProfile;
use App\Models\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public Users $user;

    public function __construct()
    {
        $this->user = new Users();
    }
    public function index()
    {
        $user = auth()->user()->load('creatorProfile');

        return view('Dashboard', compact('user'));
    }

    public function becomeCreator(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:creator_profiles,username',
        ]);

        $validated['user_id'] = auth()->id();

        CreatorProfile::create($validated);

        return redirect()->route('wallet')->with('success', 'Berhasil membuat akun kreator');
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'phone_number' => 'nullable|string|max:20',
            'timezone' => 'required|string',
            'block_anonymous_gift' => 'nullable|boolean',
        ]);

        $validated['block_anonymous_gift'] = $request->has('block_anonymous_gift');

        $userModel = new Users();
        $userModel->updateProfile(auth()->id(), $validated);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        $userModel = new Users();
        $success = $userModel->updatePassword(
            auth()->id(),
            $validated['old_password'],
            $validated['new_password']
        );

        if (!$success) {
            return redirect()->back()->with('error', 'Password lama tidak sesuai');
        }

        return redirect()->back()->with('success', 'Password berhasil diubah');
    }

    public function updateEmail(Request $request)
    {
        $validated = $request->validate([
            'new_email' => 'required|email|unique:users,email',
            'current_password' => 'required|string',
        ]);

        $userModel = new Users();
        $success = $userModel->updateEmail(
            auth()->id(),
            $validated['new_email'],
            $validated['current_password']
        );

        if (!$success) {
            return redirect()->back()->with('error', 'Password saat ini tidak sesuai');
        }

        return redirect()->back()->with('success', 'Permintaan perubahan email telah dikirim');
    }
}
