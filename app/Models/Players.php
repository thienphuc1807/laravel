<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    /** @use HasFactory<\Database\Factories\PlayersFactory> */
    use HasFactory;
    // protected $fillable = ['name', 'age', 'position', 'club_id'];
    protected $guarded = [];
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
