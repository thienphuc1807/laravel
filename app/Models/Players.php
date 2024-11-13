<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Players extends Model
{
    protected $fillable = ["name", "position", "age"];
    // public static function all(): array
    // {
    //     return  [
    //         [
    //             'id' => 1,
    //             'name' => 'Rashford',
    //             'age' => 27,
    //             'position' => 'LW'
    //         ],
    //         [
    //             'id' => 2,
    //             'name' => 'Bruno',
    //             'age' => 30,
    //             'position' => 'CAM'
    //         ],
    //         [
    //             'id' => 3,
    //             'name' => 'Garnacho',
    //             'age' => 19,
    //             'position' => 'RW'
    //         ]
    //     ];
    // }

    // public static function find(int $id): array
    // {
    //     $player = Arr::first(static::all(), fn($player) => $player["id"] == $id);

    //     if (!$player) {
    //         abort(404);
    //     }
    //     return $player;
    // }
}
