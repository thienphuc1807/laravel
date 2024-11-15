<x-layout>
    <x-slot:title>Register</x-slot:title>
    <x-slot:heading>Register</x-slot:heading> 
<form method="POST" action="/register">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
            <x-form-field>
                <x-form-label for="first_name">First name</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="first_name" id="first_name" autocomplete="given-name" />
                </div>
                <x-form-error name="first_name" />
            </x-form-field>
            <x-form-field>
                <x-form-label for="last_name">Last name</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="last_name" id="last_name" autocomplete="given-name" />
                </div>
                <x-form-error name="last_name" />

            </x-form-field>
            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                  <x-form-input type="email" name="email" id="email" autocomplete="given-name" />
                </div>
                <x-form-error name="email" />

            </x-form-field>
            <x-form-field>
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-2">
                  <x-form-input type="password" name="password" id="password" autocomplete="given-name" />
                </div>
                <x-form-error name="password" />
            </x-form-field>
            <x-form-field>
                <x-form-label for="password_confirmation">Password confirmation</x-form-label>
                <div class="mt-2">
                  <x-form-input type="password" name="password_confirmation" id="password_confirmation" autocomplete="given-name" />
                </div>
                <x-form-error name="password_confirmation" />
            </x-form-field>
        </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <x-form-button>Register</x-form-button>
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