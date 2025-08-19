<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    protected $guarded = [];

    public function invite()
    {
        return $this->belongsTo(Invite::class);
    }
}
