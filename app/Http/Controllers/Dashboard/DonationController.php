<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CreatorProfile;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function show($username)
    {
        $creator = CreatorProfile::where('username', $username)->firstOrFail();

        return view('donate.show', compact('creator'));
    }

    public function send(Request $request, $username)
    {
        $creator = CreatorProfile::where('username', $username)->firstOrFail();

        $validated = $request->validate([
            'amount' => 'required|integer|min:1000',
            'sender_name' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:500',
        ]);

        $donationData = [
            'creator_profile_id' => $creator->id,
            'sender_name' => $validated['sender_name'] ?? 'Anonymous',
            'message' => $validated['message'],
            'amount' => $validated['amount'],
            'status' => 'pending',
        ];

        if (auth()->check()) {
            $donationData['user_id'] = auth()->id();
        }

        $donation = Donation::create($donationData);

        $creator->increment('balance_pending', $donation->net_amount);

        return redirect()->route('donate.show', $username)
            ->with('success', 'Tip berhasil dikirim, menunggu konfirmasi pembayaran.');
    }
}
