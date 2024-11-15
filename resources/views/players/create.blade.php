<x-layout>
    <x-slot:title>Player Create</x-slot:title>
    <x-slot:heading>Create</x-slot:heading> 
<form method="POST" action="/players">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Create a player</h2>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
            <x-form-field>
                <x-form-label for="name">Name</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="name" id="name" autocomplete="given-name" />
                </div>
                <x-form-error name="name" />
            </x-form-field>
            <x-form-field>
                <x-form-label for="position">Position</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="position" id="position" autocomplete="given-name" />
                </div>
                <x-form-error name="position" />

            </x-form-field>
            <x-form-field>
                <x-form-label for="club_id">Club</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="club_id" id="club_id" autocomplete="given-name" />
                </div>
                <x-form-error name="club_id" />

            </x-form-field>
            <x-form-field>
                <x-form-label for="age">Age</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="age" id="age" autocomplete="given-name" />
                </div>
                <x-form-error name="age" />
            </x-form-field>
        </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <x-form-button>Save</x-form-button>
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