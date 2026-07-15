<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreatorProfile extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'username',
        'balance_available',
        'balance_pending',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
