<x-layout>
    <x-slot:title>Clubs</x-slot:title>
    <x-slot:heading>Premier League Clubs</x-slot:heading>
    <ul>
        @foreach ($clubs as $club)
            <li>{{$club["name"]}}</li>
        @endforeach
    </ul>
</x-layout>