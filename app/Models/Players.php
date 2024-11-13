<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    /** @use HasFactory<\Database\Factories\PlayersFactory> */
    use HasFactory;

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
