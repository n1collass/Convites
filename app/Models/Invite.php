<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Policies\InvitePolicy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\UsePolicy;

class Invite extends Model
{
    protected $guarded = [];

    protected $hidden = ['password'];
    protected $casts = [
        'password' => 'hashed',
    ];

    #[UsePolicy(InvitePolicy::class)]
    protected static function booted()
    {
        static::creating(function ($invite) {
            $invite->code = strtoupper(Str::random(6));
            $invite->user_id = Auth::id();
        });
    }

    public function confirmations()
    {
        return $this->hasMany(Confirmation::class);
    }
}
