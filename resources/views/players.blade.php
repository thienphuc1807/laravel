<x-layout>
    <x-slot:title>Players Info</x-slot:title>
    <x-slot:heading>Players</x-slot:heading>
    <h1>This is players info page</h1>
   <ul>
        @foreach ($players as $player)
            <a href="/players/{{$player['id']}}" >
            <li class="hover:text-red-500"><strong>Name:</strong> {{$player['name']}} ,<strong>Position:</strong> {{$player['position']}}</li>
            </a>
        @endforeach
   </ul>
</x-layout>