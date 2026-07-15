<?php

namespace Tests\Feature;

use App\Models\CreatorProfile;
use App\Models\Users;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreatorDashboardPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_tip_page_shows_real_overlay_url_and_wallet_page_shows_balances(): void
    {
        $user = Users::create([
            'username' => 'creatorpage',
            'email' => 'creatorpage@example.com',
            'password' => bcrypt('password123'),
        ]);

        $creator = CreatorProfile::create([
            'user_id' => $user->id,
            'name' => 'Creator Page',
            'username' => 'creatorpage',
            'balance_available' => 150000,
            'balance_pending' => 25000,
        ]);

        $this->actingAs($user);

        $tipResponse = $this->get(route('kreator.tip'));
        $tipResponse->assertOk();
        $tipResponse->assertSee(route('overlay.show', $creator->username));
        $tipResponse->assertSee('data-overlay-url="' . route('overlay.show', $creator->username) . '"', false);

        $walletResponse = $this->get(route('wallet'));
        $walletResponse->assertOk();
        $walletResponse->assertSee('150.000');
        $walletResponse->assertSee('25.000');
    }
}
