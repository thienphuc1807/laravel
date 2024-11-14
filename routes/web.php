<?php

use App\Models\Club;
use Illuminate\Support\Facades\Route;
use App\Models\Players;

// Option 2
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

    // Option 1
    // return view('players', ["players" => [
    //     [
    //         'id' => 1,
    //         'name' => 'Rashford',
    //         'age' => 27,
    //         'position' => 'LW'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Bruno',
    //         'age' => 30,
    //         'position' => 'CAM'
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'Garnacho',
    //         'age' => 19,
    //         'position' => 'RW'
    //     ]
    // ]]);

    // Option 2 (use ($variable))
    // return view('players', ["players" => $players]);

    // Option 3
    return view('players', ["players" => Players::all()]);

    // $players = Players::all();
    // dd($players);
});
Route::get('players/{id}', function ($id) use ($players) {

    // Option 1 (use $variable)
    // $player = Arr::first($players, function ($player) use ($id) {
    //     return $player['id'] == $id;
    // });

    // Option 2 (use $variable)
    // $player = Arr::first($players, fn($player) => $player["id"] == $id);


    // Option 3 (Model)
    // $player = Arr::first(Players::all(), fn($player) => $player["id"] == $id);

    // Option 4 (Model)
    $player = Players::find($id);

    // check if it work
    // dd($player);

    return view('player', ['player' => $player]);
});


Route::get('clubs', function () {
    $clubs = Club::all();
    // dd($clubs);

    return view('clubs', ['clubs' => $clubs]);
});
