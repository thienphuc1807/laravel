<x-layout>
    <x-slot:title>Players Info</x-slot:title>
    <x-slot:heading>Players</x-slot:heading> 
   <div class="space-y-4">
        @foreach ($players as $player)
            <a href="/players/{{$player['id']}}" class="block p-5 border border-1 hover:text-red-500">
            <div><strong>Name:</strong> {{$player['name']}}<br> 
                <strong>Position:</strong> {{$player['position']}}<br>
                <strong>Club:</strong> {{$player->club->name}}
            </div>
            </a>
        @endforeach
   </div>
   <div>{{$players->links()}}</div>
</x-layout>