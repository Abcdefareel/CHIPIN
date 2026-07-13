<?php

namespace Tests\Feature;

use App\Models\CreatorProfile;
use App\Models\Donation;
use App\Models\Users;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TransactionHistoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_see_their_donation_history_on_transaction_page(): void
    {
        $user = Users::create([
            'username' => 'tester',
            'email' => 'tester@example.com',
            'password' => bcrypt('password123'),
        ]);

        $creator = CreatorProfile::create([
            'user_id' => $user->id,
            'name' => 'Creator Test',
            'username' => 'creator-test',
        ]);

        $this->actingAs($user);

        $this->post(route('donate.send', $creator->username), [
            'amount' => 1500,
            'sender_name' => 'Donatur A',
            'message' => 'Terima kasih',
        ]);

        $donation = Donation::latest()->first();

        $this->assertNotNull($donation);
        $this->assertEquals($user->id, $donation->user_id);

        $response = $this->get(route('dashboard.transaction'));

        $response->assertOk();
        $response->assertSee('Donatur A');
        $response->assertSee('1.500');
    }

    public function test_authenticated_user_can_filter_transactions_by_search_and_status(): void
    {
        $user = Users::create([
            'username' => 'tester2',
            'email' => 'tester2@example.com',
            'password' => bcrypt('password123'),
        ]);

        $creator = CreatorProfile::create([
            'user_id' => $user->id,
            'name' => 'Creator Filter',
            'username' => 'creator-filter',
        ]);

        $this->actingAs($user);

        Donation::create([
            'creator_profile_id' => $creator->id,
            'user_id' => $user->id,
            'sender_name' => 'Alpha Donatur',
            'message' => 'Sukses',
            'amount' => 2000,
            'status' => 'paid',
        ]);

        Donation::create([
            'creator_profile_id' => $creator->id,
            'user_id' => $user->id,
            'sender_name' => 'Beta Donatur',
            'message' => 'Pending',
            'amount' => 3000,
            'status' => 'pending',
        ]);

        $response = $this->get(route('dashboard.transaction', ['search' => 'Alpha', 'status' => 'paid']));

        $response->assertOk();
        $response->assertSee('Alpha Donatur');
        $response->assertDontSee('Beta Donatur');
    }
}
