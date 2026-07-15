<?php

namespace Tests\Feature;

use App\Events\TipReceived;
use App\Models\CreatorProfile;
use App\Models\Users;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class DonationOverlayTest extends TestCase
{
    use RefreshDatabase;

    public function test_donation_dispatches_overlay_event(): void
    {
        $user = Users::create([
            'username' => 'creator-overlay-user',
            'email' => 'creator-overlay@example.com',
            'password' => bcrypt('password123'),
        ]);

        $creator = CreatorProfile::create([
            'user_id' => $user->id,
            'name' => 'Creator Overlay',
            'username' => 'creator-overlay',
        ]);

        Event::fake();

        $response = $this->post(route('donate.send', $creator->username), [
            'amount' => 15000,
            'sender_name' => 'Budi',
            'message' => 'Semangat bro!',
        ]);

        $response->assertRedirect();
        Event::assertDispatched(TipReceived::class);
    }
}
