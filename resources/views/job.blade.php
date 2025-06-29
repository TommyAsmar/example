<x-layout>
    <x-slot:heading>About Page</x-slot:heading>
    <h2 class="text-lg font-bold">{{ $job['title'] }}</h2>
    <p>Salary: {{ $job['salary'] }}</p>
</x-layout>