<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'creator_profile_id',
        'user_id',
        'sender_name',
        'message',
        'amount',
        'platform_fee',
        'net_amount',
        'status',
    ];

    const PLATFORM_FEE_PERCENTAGE = 5;

    protected static function booted()
    {
        static::creating(function ($donation) {
            $donation->platform_fee = round($donation->amount * self::PLATFORM_FEE_PERCENTAGE / 100);
            $donation->net_amount = $donation->amount - $donation->platform_fee;
        });
    }

    public function creatorProfile()
    {
        return $this->belongsTo(CreatorProfile::class);
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }
}
