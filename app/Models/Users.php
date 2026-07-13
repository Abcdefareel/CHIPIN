<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Users extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'phone_number',
        'timezone',
        'block_anonymous_gift',
    ];

    protected $hidden = [
        'password',
    ];

    public function creatorProfile()
    {
        return $this->hasOne(CreatorProfile::class, 'user_id', 'id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'user_id', 'id');
    }

    public function insertData(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->create($data);
    }

    public function updateProfile(int $id, array $data)
    {
        $user = $this->findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function updatePassword(int $id, string $oldPassword, string $newPassword)
    {
        $user = $this->findOrFail($id);

        if (!Hash::check($oldPassword, $user->password)) {
            return false;
        }

        $user->update(['password' => Hash::make($newPassword)]);
        return true;
    }

    public function updateEmail(int $id, string $newEmail, string $currentPassword): bool
    {
        $user = $this->findOrFail($id);

        if (!Hash::check($currentPassword, $user->password)) {
            return false;
        }

        $user->update(['email' => $newEmail]);
        return true;
    }
}
