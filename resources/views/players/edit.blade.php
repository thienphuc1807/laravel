<x-layout>
    <x-slot:title>Edit player</x-slot:title>
    <x-slot:heading>Edit player: {{$player->name}}</x-slot:heading> 
<form method="POST" action="/players/{{$player->id}}">
    @csrf
    @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div>
                <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                <div class="mt-2">
                  <input type="text" value="{{$player->name}}" name="name" id="name" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                @error('name')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="position" class="block text-sm/6 font-medium text-gray-900">Position</label>
                <div class="mt-2">
                  <input type="text" value="{{$player->position}}" name="position" id="position" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                @error('club_id')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="club_id" class="block text-sm/6 font-medium text-gray-900">Club</label>
                <div class="mt-2">
                  <input type="text" value="{{$player->club_id}}" name="club_id" id="club_id" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                @error('club_id')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="age" class="block text-sm/6 font-medium text-gray-900">Age</label>
                <div class="mt-2">
                  <input type="text" value="{{$player->age}}" name="age" id="age" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                @error('age')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
        </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-between">
      <button type="submit" form="delete-form" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
      <div class="flex gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </div>

    {{-- @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif --}}
  </form>

  <form action="/players/{{$player->id}}" id="delete-form" method="post">
    @csrf
    @method('DELETE')
  </form>
  
</x-layout>