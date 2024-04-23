<x-layout>
    <x-slot:heading>
        Job Listings Page
    </x-slot:heading>
    <ul class="list-dic"> 
        {{-- Looping over an array of posts --}}
        @foreach ($jobs as $job)
            <li class="mt-5"> 
                <a href="/job/{{ $job["id"] }}"> Job Title: &nbsp; <span class="text-base text-black hover:text-blue-800 font-bold font-palanquitin"> {{ $job["title"] }} </span> </a>
            </li>
            <hr class="mt-4">
        @endforeach
    </ul>
</x-layout>