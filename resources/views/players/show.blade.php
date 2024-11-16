<x-layout>
    <x-slot:title>Players Info</x-slot:title>
    <x-slot:heading>Players</x-slot:heading>
    <h1 class="text-xl"><strong>{{$player["name"]}}</strong></h1>
    <p><strong>Position:</strong> {{$player["position"]}}</p>
    <p><strong>Age:</strong> {{$player["age"]}}</p>
    <p><strong>Club:</strong> {{$player->club->name}}</p>
    {{-- Step 4: Can or Cannot --}}
    @can('edit-player', $player)
        <x-button href="/players/{{$player->id}}/edit">Edit player</x-button>
    @endcan
</x-layout>