<?php

namespace App\Http\Controllers\Dashboard\DashboardKreator;

use App\Events\TipReceived;
use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Users;
use Illuminate\Http\Request;

class TipsmasukController extends Controller
{
    public Users $user;

    public function __construct()
    {
        $this->user = new Users();
    }
    public function index()
    {
        $user = auth()->user();
        $creator = $user->creatorProfile;
        $title = 'Dashboard Tips-Masuk | ChipIn';

        $donations = Donation::where('creator_profile_id', $creator->id)
            ->latest()
            ->paginate(10);

        return view('Tipsmasuk', compact('user', 'title', 'donations'));
    }

    public function confirm(Donation $donation)
    {
        if ($donation->creatorProfile->user_id !== auth()->id()) {
            abort(403);
        }

        $donation->update(['status' => 'paid']);

        $creator = $donation->creatorProfile;
        $creator->decrement('balance_pending', $donation->net_amount);
        $creator->increment('balance_available', $donation->net_amount);

        return redirect()->back()->with('success', 'Tip telah dikonfirmasi sebagai dibayar.');
    }

    //
}
