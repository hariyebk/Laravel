<x-layout>
    <x-slot:heading>
        Job Listings Page
    </x-slot:heading>
    <ul class="list-dic pb-10"> 
        <div class="space-y-4 mr-10">
            {{-- Looping over an array of posts --}}
            @foreach ($jobs as $job)
                <div class="mt-5 bg-gray-300 w-full px-5 py-5"> 
                    <h3 class="text-base text-blue-500 font-semibold"> {{ $job->employer->name }} </h3>
                    <a href="/job/{{ $job["id"] }}"> Job Title: &nbsp; <span class="text-base text-black hover:text-blue-800 font-bold font-palanquitin mt-5"> {{ $job["title"] }} </span> </a>
                </div>
            @endforeach
            {{-- Yo pagination is so simple to implement in Laravel --}}
            {{ $jobs->links() }}
        </div>
    </ul>
</x-layout>