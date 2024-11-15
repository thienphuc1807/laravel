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

// index
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

    // Normal
    // $players = Players::all();
    // Eager Loading
    // $players = Players::with('club')->get();

    // Pagiante
    // $players = Players::with('club')->latest()->paginate(4);
    $players = Players::with('club')->latest()->simplePaginate(4);
    // $players = Players::with('club')->latest()->cursorPaginate(4);

    return view('players.index', ["players" => $players]);

    // $players = Players::all();
    // dd($players);
});

// Create page
Route::get('players/create', function () {
    return view('players.create');
});


// Show
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

    return view('players.show', ['player' => $player]);
});

// Edit
Route::get('players/{id}/edit', function ($id) use ($players) {
    $player = Players::find($id);
    return view('players.edit', ['player' => $player]);
});

// Update
Route::patch('players/{id}', function ($id) {
    // validate
    request()->validate([
        'name' => ['required', 'min:4'],
        'position' => ['required', 'min:2', 'max:3'],
        'club_id' => ['required', 'max:1'],
        'position' => ['required', 'min:2', 'max:3'],
        'age' => ['required', 'min:2'],
    ]);
    // authorize (on hold...)
    // update the player
    $player = Players::find($id);
    $player->update([
        'name' => request('name'),
        'age' => request('age'),
        'club_id' => request('club_id'),
        'position' => request('position')
    ]);
    // and persist
    // redirect to the player page
    return redirect('/players');
});

// Delete
Route::delete('players/{id}', function ($id) use ($players) {
    // authorize (on hold...)
    // delete the player
    Players::find($id)->delete();
    // and presist
    // redirect to the players page
    return redirect('/players');
});



Route::get('clubs', function () {
    $clubs = Club::all();
    // dd($clubs);

    return view('clubs', ['clubs' => $clubs]);
});

Route::post('players', function () {
    // dd(request("name"));

    request()->validate([
        'name' => ['required', 'min:4'],
        'position' => ['required', 'min:2', 'max:3'],
        'club_id' => ['required', 'max:1'],
        'position' => ['required', 'min:2', 'max:3'],
        'age' => ['required', 'min:2'],
    ]);

    Players::create([
        'name' => request('name'),
        'age' => request('age'),
        'club_id' => request('club_id'),
        'position' => request('position')
    ]);

    return redirect('/players');
});
