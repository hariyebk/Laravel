<x-layout>
    <x-slot:heading>
        Job Item
    </x-slot:heading>
    @if ($job)
        <h3> Job Title: <span> {{ $job["title"] }} </span> </h3>
        <p class="my-5"> Years of Experience needed: {{ $job["experience"] }} </p>
        <p> Salary : {{ $job["salary"] }} </p> <br>
    @else
        <p> No Job Post found with an Id of {{ $job["id"] }} </p>;
        
    @endif

</x-layout>