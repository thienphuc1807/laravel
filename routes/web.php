<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => [['text' => 'Hello'], ['text' => 'Hello2']], 'test' => 'This is a test']);
});

Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('players', function () {
    return view('players', ['players' => [
        [
            'id' => 1,
            'name' => 'Rashford',
            'age' => 27,
            'position' => 'LW'
        ],
        [
            'id' => 2,
            'name' => 'Bruno',
            'age' => 30,
            'position' => 'CAM'
        ],
        [
            'id' => 3,
            'name' => 'Garnacho',
            'age' => 19,
            'position' => 'RW'
        ]
    ]]);
});
Route::get('players/{id}', function ($id) {
    $players = [
        [
            'id' => 1,
            'name' => 'Rashford',
            'age' => 27,
            'position' => 'LW'
        ],
        [
            'id' => 2,
            'name' => 'Bruno',
            'age' => 30,
            'position' => 'CAM'
        ],
        [
            'id' => 3,
            'name' => 'Garnacho',
            'age' => 19,
            'position' => 'RW'
        ]
    ];

    // Option 1
    // $player = Arr::first($players, function ($player) use ($id) {
    //     return $player['id'] == $id;
    // });

    // Option 2
    $player = Arr::first($players, fn($player) => $player["id"] == $id);

    // check if it work
    // dd($player);

    return view('player', ['player' => $player]);
});
