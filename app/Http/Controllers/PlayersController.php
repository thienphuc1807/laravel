<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Players::with('club')->latest()->simplePaginate(4);
        return view('players.index', ["players" => $players]);
    }
    public function create()
    {
        return view('players.create');
    }

    public function show(Players $player)
    {
        return view('players.show', ['player' => $player]);
    }

    public function edit(Players $player)
    {
        return view('players.edit', ['player' => $player]);
    }

    public function update(Players $player)
    {
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
        $player->update([
            'name' => request('name'),
            'age' => request('age'),
            'club_id' => request('club_id'),
            'position' => request('position')
        ]);
        // and persist
        // redirect to the player page
        return redirect('/players');
    }

    public function delete(Players $player)
    {
        // authorize (on hold...)
        // delete the player
        $player->delete();
        // and presist
        // redirect to the players page
        return redirect('/players');
    }

    public function store()
    {
        request()->validate([
            'name' => ['required', 'min:4'],
            'position' => ['required', 'min:2', 'max:3'],
            'club_id' => ['required'],
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
    }
}
