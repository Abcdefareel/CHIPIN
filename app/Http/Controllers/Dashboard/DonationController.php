<?php

namespace App\Http\Controllers\Dashboard;

use App\Events\TipReceived;
use App\Http\Controllers\Controller;
use App\Models\CreatorProfile;
use App\Models\Donation;
use App\Models\Users;
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

        $senderName = trim((string) ($validated['sender_name'] ?? ''));
        $amount = (int) $validated['amount'];
        $platformFee = (int) round($amount * Donation::PLATFORM_FEE_PERCENTAGE / 100);
        $netAmount = $amount - $platformFee;

        $donationData = [
            'creator_profile_id' => $creator->id,
            'sender_name' => $senderName !== '' ? $senderName : 'Anonymous',
            'message' => $validated['message'],
            'amount' => $amount,
            'platform_fee' => $platformFee,
            'net_amount' => $netAmount,
            'status' => 'pending',
        ];

        $matchedUser = $senderName !== ''
            ? Users::whereRaw('LOWER(username) = ?', [strtolower($senderName)])->first()
            : null;

        if ($matchedUser) {
            $donationData['user_id'] = $matchedUser->id;
        } elseif (auth()->check()) {
            $donationData['user_id'] = auth()->id();
        }

        $donation = Donation::create($donationData);

        try {
            event(new TipReceived($donation));
        } catch (\Throwable $e) {
            report($e);
        }

        $creator->increment('balance_pending', $donation->net_amount ?? $netAmount);

        return redirect()->route('donate.show', $username)
            ->with('success', 'Tip berhasil dikirim, menunggu konfirmasi pembayaran.');
    }
}
