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
        return $this->updateStatus(new Request(['status' => 'paid']), $donation);
    }

    public function updateStatus(Request $request, Donation $donation)
    {
        if ($donation->creatorProfile->user_id !== auth()->id()) {
            abort(403);
        }

        $status = $request->input('status', 'pending');
        $allowedStatuses = ['pending', 'paid', 'rejected'];

        if (!in_array($status, $allowedStatuses, true)) {
            abort(400);
        }

        $previousStatus = $donation->status;
        $donation->update(['status' => $status]);

        $creator = $donation->creatorProfile;

        if ($previousStatus !== 'paid' && $status === 'paid') {
            $creator->decrement('balance_pending', $donation->net_amount);
            $creator->increment('balance_available', $donation->net_amount);

            session()->flash('tip_paid_popup', 'Donasi dari ' . ($donation->sender_name ?: 'Anonymous') . ' sebesar Rp ' . number_format($donation->amount, 0, ',', '.') . ' telah dikonfirmasi.');
        }

        if ($previousStatus === 'paid' && $status !== 'paid') {
            $creator->decrement('balance_available', $donation->net_amount);
            $creator->increment('balance_pending', $donation->net_amount);
        }

        $message = match ($status) {
            'paid' => 'Tip telah dikonfirmasi sebagai dibayar.',
            'pending' => 'Status tip dikembalikan ke pending.',
            'rejected' => 'Tip ditandai sebagai ditolak.',
        };

        return redirect()->back()->with('success', $message);
    }

    //
}
