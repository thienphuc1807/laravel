<?php

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RegisteredUserController;
use App\Mail\PlayersPosted;
use App\Models\Club;
use Illuminate\Support\Facades\Route;
use App\Models\Players;
use Illuminate\Support\Facades\Mail;

// Option 2
// $players = [
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
// ];


Route::get('/', function () {
    return view('welcome', ['title' => [['text' => 'Hello'], ['text' => 'Hello2']], 'test' => 'This is a test']);
});

// ---------- ABOUT ----------
// Route::get('about', function () {
//     return view('about');
// });

Route::view('/about', 'about');

// ---------- CONTACT ----------
// Route::get('contact', function () {
//     return view('contact');
// });

Route::view('/contact', 'contact');

// Test
// Route::get('/test', function () {
//     Mail::to('phucnguyendev187@gmail.com')->send(
//         new PlayersPosted()
//     );

//     return 'Done';
// });



// // index
// Route::get('players', function () {

//     // Option 1
//     // return view('players', ["players" => [
//     //     [
//     //         'id' => 1,
//     //         'name' => 'Rashford',
//     //         'age' => 27,
//     //         'position' => 'LW'
//     //     ],
//     //     [
//     //         'id' => 2,
//     //         'name' => 'Bruno',
//     //         'age' => 30,
//     //         'position' => 'CAM'
//     //     ],
//     //     [
//     //         'id' => 3,
//     //         'name' => 'Garnacho',
//     //         'age' => 19,
//     //         'position' => 'RW'
//     //     ]
//     // ]]);

//     // Option 2 (use ($variable))
//     // return view('players', ["players" => $players]);

//     // Option 3
//     // Normal
//     // $players = Players::all();
//     // Eager Loading
//     // $players = Players::with('club')->get();

//     // Pagiante
//     // $players = Players::with('club')->latest()->paginate(4);
//     $players = Players::with('club')->latest()->simplePaginate(4);
//     // $players = Players::with('club')->latest()->cursorPaginate(4);

//     return view('players.index', ["players" => $players]);

//     // $players = Players::all();
//     // dd($players);
// });

// index (Controller Classes)
// Route::get('/players', [PlayersController::class, 'index']);

// ---------- CREATE ----------
// create
// Route::get('/players/create', function () {
//     return view('players.create');
// });

// create (Controller Classes)
// Route::get('/players/create', [PlayersController::class, 'create']);

// ---------- SHOW ----------
// Show
// Route::get('/players/{id}', function ($id) use ($players) {

//     // Option 1 (use $variable)
//     // $player = Arr::first($players, function ($player) use ($id) {
//     //     return $player['id'] == $id;
//     // });

//     // Option 2 (use $variable)
//     // $player = Arr::first($players, fn($player) => $player["id"] == $id);


//     // Option 3 (Model)
//     // $player = Arr::first(Players::all(), fn($player) => $player["id"] == $id);

//     // Option 4 (Model)
//     $player = Players::find($id);

//     // check if it work
//     // dd($player);

//     return view('players.show', ['player' => $player]);
// });

// Show (Route Model Binding)
// By default is ID but you can configuer it
// Ex: Router::get('/player/{player:name}',...)
// Route::get('/players/{player}', function (Players $player) {
//     return view('players.show', ['player' => $player]);
// });

// Show (Controller Classes)
// Route::get('/players/{player}', [PlayersController::class, 'show']);

// ---------- EDIT ----------
// Edit
// Route::get('/players/{id}/edit', function ($id) use ($players) {
//     $player = Players::find($id);
//     return view('players.edit', ['player' => $player]);
// });

// Edit (Route Model Binding)
// Route::get('/players/{player}/edit', function (Players $player) {
//     return view('players.edit', ['player' => $player]);
// });

// Edit (Controller Classes)
// Route::get('/players/{player}/edit', [PlayersController::class, 'edit']);

// ---------- UPDATE ----------
// // Update
// Route::patch('/players/{id}', function ($id) {
//     // validate
//     request()->validate([
//         'name' => ['required', 'min:4'],
//         'position' => ['required', 'min:2', 'max:3'],
//         'club_id' => ['required', 'max:1'],
//         'position' => ['required', 'min:2', 'max:3'],
//         'age' => ['required', 'min:2'],
//     ]);
//     // authorize (on hold...)
//     // update the player
//     $player = Players::find($id);
//     $player->update([
//         'name' => request('name'),
//         'age' => request('age'),
//         'club_id' => request('club_id'),
//         'position' => request('position')
//     ]);
//     // and persist
//     // redirect to the player page
//     return redirect('/players');
// });

// Update (Route Model Binding)
// Route::patch('/players/{player}', function (Players $player) {
//     // validate
//     request()->validate([
//         'name' => ['required', 'min:4'],
//         'position' => ['required', 'min:2', 'max:3'],
//         'club_id' => ['required', 'max:1'],
//         'position' => ['required', 'min:2', 'max:3'],
//         'age' => ['required', 'min:2'],
//     ]);
//     // authorize (on hold...)
//     // update the player
//     $player->update([
//         'name' => request('name'),
//         'age' => request('age'),
//         'club_id' => request('club_id'),
//         'position' => request('position')
//     ]);
//     // and persist
//     // redirect to the player page
//     return redirect('/players');
// });

// Update (Controller Classes)
// Route::patch('/players/{player}', [PlayersController::class, 'update']);


// ---------- DELETE ----------
// Delete
// Route::delete('/players/{id}', function ($id) {
//     // authorize (on hold...)
//     // delete the player
//     Players::find($id)->delete();
//     // and presist
//     // redirect to the players page
//     return redirect('/players');
// });

// Delete (Route model binding)
// Route::delete('/players/{player}', function (Players $player) {
//     // authorize (on hold...)
//     // delete the player
//     $player->delete();
//     // and presist
//     // redirect to the players page
//     return redirect('/players');
// });

// Delete (Controller Classes)
// Route::delete('/players/{player}', [PlayersController::class, 'delete']);

// ---------- STORE ----------
// store
// Route::post('/players', function () {
//     // dd(request("name"));

//     request()->validate([
//         'name' => ['required', 'min:4'],
//         'position' => ['required', 'min:2', 'max:3'],
//         'club_id' => ['required', 'max:1'],
//         'position' => ['required', 'min:2', 'max:3'],
//         'age' => ['required', 'min:2'],
//     ]);

//     Players::create([
//         'name' => request('name'),
//         'age' => request('age'),
//         'club_id' => request('club_id'),
//         'position' => request('position')
//     ]);

//     return redirect('/players');
// });

// Create (Controller Classes)
// Route::post('/players', [PlayersController::class, 'store']);

// ---------- CLUB ----------
// index club
Route::get('/clubs', function () {
    $clubs = Club::all();
    // dd($clubs);
    return view('/clubs', ['clubs' => $clubs]);
});

// Step 5: Middleware Authorization 
// Route Group
Route::controller(PlayersController::class)->group(function () {
    Route::get('/players', 'index');
    Route::get('/players/create', 'create')->middleware('auth');
    Route::get('/players/{player}', 'show');
    // Route::get('/players/{player}/edit', 'edit')->middleware(['auth', 'can:edit-player,player']);
    // Gates
    // Route::get('/players/{player}/edit', 'edit')->middleware('auth')->can('edit-player', 'player');
    // Policies
    Route::get('/players/{player}/edit', 'edit')->middleware('auth')->can('edit', 'player');
    Route::patch('/players/{player}', 'update');
    Route::delete('/players/{player}', 'destroy');
    Route::post('/players', 'store')->middleware('auth');
});

// Route Resource
// All route have middleware
// Route::resource('/players', PlayersController::class)->middleware('auth');

// Only index and show route have middleware
// Route::resource('/players', PlayersController::class)->only(['index', 'show'])->middleware('auth');

// All route except index and show have middleware
// Route::resource('/players', PlayersController::class)->except(['index', 'show'])->middleware('auth');



Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [LoginUserController::class, 'create'])->name('login');
Route::post('/login', [LoginUserController::class, 'store']);

Route::post('/logout', [LoginUserController::class, 'destroy']);
