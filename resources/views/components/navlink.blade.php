
{{-- Declaring a variable that we recieve as a prop --}}
@props(["active"])
<a {{ $attributes }} class="{{ $active ? 'bg-slate-700 rounded-sm p-1' : 'hover:bg-gray-300'}}"> {{ $slot }} </a>