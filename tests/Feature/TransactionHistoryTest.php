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

    public function test_creator_can_see_sender_name_and_message_on_tips_incoming_page(): void
    {
        $user = Users::create([
            'username' => 'creator-viewer',
            'email' => 'creator-viewer@example.com',
            'password' => bcrypt('password123'),
        ]);

        $creator = CreatorProfile::create([
            'user_id' => $user->id,
            'name' => 'Creator Viewer',
            'username' => 'creator-viewer',
        ]);

        $this->actingAs($user);

        Donation::create([
            'creator_profile_id' => $creator->id,
            'user_id' => $user->id,
            'sender_name' => 'Budi Fans',
            'message' => 'Semangat terus!',
            'amount' => 2500,
            'status' => 'pending',
        ]);

        $response = $this->get(route('kreator.tipmasuk'));

        $response->assertOk();
        $response->assertSee('Budi Fans');
        $response->assertSee('Semangat terus!');
    }

    public function test_donation_with_matching_username_is_linked_to_existing_user_history(): void
    {
        $donor = Users::create([
            'username' => 'donoruser',
            'email' => 'donoruser@example.com',
            'password' => bcrypt('password123'),
        ]);

        $creator = CreatorProfile::create([
            'user_id' => $donor->id,
            'name' => 'Creator For Link',
            'username' => 'creator-link',
        ]);

        $response = $this->post(route('donate.send', $creator->username), [
            'amount' => 1800,
            'sender_name' => 'donoruser',
            'message' => 'Saya ingin ikut dukung',
        ]);

        $response->assertRedirect();

        $donation = Donation::latest()->first();

        $this->assertNotNull($donation);
        $this->assertEquals($donor->id, $donation->user_id);
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
