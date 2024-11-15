<x-layout>
    <x-slot:title>Login</x-slot:title>
    <x-slot:heading>Login</x-slot:heading> 
<form method="POST" action="/login">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                  <x-form-input type="email" name="email" :value="old('email')" id="email" autocomplete="given-name" />
                </div>
                <x-form-error name="email" />

            </x-form-field>
            <x-form-field>
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-2">
                  <x-form-input type="password" :value="old('password')" name="password" id="password" autocomplete="given-name" />
                </div>
                <x-form-error name="password" />
            </x-form-field>
        </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <x-form-button>Login</x-form-button>
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