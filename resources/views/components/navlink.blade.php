
{{-- Declaring variables that we recieve as a prop --}}
@props(["active" => false, "type" => "anchor"])

{{-- Anything that starts with @ is called a balde directive --}}
@if($type == "anchor")
    <a {{ $attributes }} class="{{ $active ? 'bg-slate-700 rounded-sm p-1' : 'hover:bg-blue-300'}}"> {{ $slot }} </a>
@else
    <button class="{{ $active ? 'bg-slate-700 rounded-sm p-1' : 'hover:bg-blue-300'}}"> {{ $slot }}</button>
@endif

