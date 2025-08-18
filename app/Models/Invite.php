<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    public function confirmations()
    {
        return $this->hasMany(Confirmation::class);
    }
}
