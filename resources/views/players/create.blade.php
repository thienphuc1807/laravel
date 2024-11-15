<x-layout>
    <x-slot:title>Player Create</x-slot:title>
    <x-slot:heading>Create</x-slot:heading> 
<form method="POST" action="/players">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Create a player</h2>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div>
                <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                <div class="mt-2">
                  <input type="text" name="name" id="name" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                @error('name')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="position" class="block text-sm/6 font-medium text-gray-900">Position</label>
                <div class="mt-2">
                  <input type="text" name="position" id="position" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                @error('position')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="club_id" class="block text-sm/6 font-medium text-gray-900">Club</label>
                <div class="mt-2">
                  <input type="text" name="club_id" id="club_id" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                @error('club_id')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="age" class="block text-sm/6 font-medium text-gray-900">Age</label>
                <div class="mt-2">
                  <input type="text" name="age" id="age" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                @error('age')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
        </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>

    {{-- @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif --}}
  </form>
  
</x-layout>