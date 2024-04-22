<x-layout>
    <x-slot:heading>
        Job Item
    </x-slot:heading>
    <h3> Job Title: <span> {{ $job["title"] }} </span> </h3>
    <p class="my-5"> Years of Experience needed: {{ $job["experience"] }} </p>
    <p> Salary : {{ $job["salary"] }} </p> <br>
</x-layout>