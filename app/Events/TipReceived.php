<?php

namespace App\Events;

use App\Models\Donation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TipReceived implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;

    public Donation $donation;

    public function __construct(Donation $donation)
    {
        $this->donation = $donation;
    }

    public function broadcastOn(): array
    {
        return [
            new Channel('tip-channel.' . $this->donation->creatorProfile->username),
        ];
    }

    public function broadcastAs(): string
    {
        return 'TipReceived';
    }

    public function broadcastWith(): array
    {
        return [
            'sender_name' => $this->donation->sender_name,
            'message' => $this->donation->message,
            'amount' => $this->donation->amount,
        ];
    }
}
