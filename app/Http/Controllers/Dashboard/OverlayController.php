<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CreatorProfile;
use App\Models\Donation;
use Illuminate\Http\Request;

class OverlayController extends Controller
{
    public function show($username)
    {
        $creator = CreatorProfile::where('username', $username)->firstOrFail();

        return view('Overlay', compact('creator'));
    }

    public function latestDonation($username)
    {
        $creator = CreatorProfile::where('username', $username)->firstOrFail();

        $donation = Donation::where('creator_profile_id', $creator->id)
            ->whereIn('status', ['pending', 'confirmed'])
            ->latest()
            ->first();

        return response()->json($donation ? [
            'sender_name' => $donation->sender_name,
            'message' => $donation->message,
            'amount' => $donation->amount,
            'status' => $donation->status,
        ] : null);
    }
}
