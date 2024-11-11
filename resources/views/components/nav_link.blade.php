@props(["active" => false, "type" => "a"])

{{-- option 1 --}}
{{-- <{{$type}} {{ $attributes }} 
class="{{ $active ? 'rounded-md bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
aria-current='{{ $active ? 'page' : 'false' }}'>
{{ $slot }}
</{{$type}} > --}}

{{-- option 2 --}}
{{-- <?php if($type === "a") : ?>
<a {{ $attributes }} 
class="{{ $active ? 'rounded-md bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
aria-current='{{ $active ? 'page' : 'false' }}'>
{{ $slot }}
</a>
<?php else : ?>
<button {{ $attributes }} 
class="{{ $active ? 'rounded-md bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
aria-current='{{ $active ? 'page' : 'false' }}'>
{{ $slot }}
</button>
<?php endif ?> --}}

{{-- option 3 --}}
@if($type === "a")
<a {{ $attributes }} 
class="{{ $active ? 'rounded-md bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
aria-current='{{ $active ? 'page' : 'false' }}'>
{{ $slot }}
</a>
@else :
<button {{ $attributes }} 
class="{{ $active ? 'rounded-md bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
aria-current='{{ $active ? 'page' : 'false' }}'>
{{ $slot }}
</button>
@endif






