<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    /** @use HasFactory<\Database\Factories\ClubFactory> */
    use HasFactory;


    public function players()
    {
        return $this->hasMany(Players::class);
        // return $this->belongsToMany(Players::class);
    }
}
