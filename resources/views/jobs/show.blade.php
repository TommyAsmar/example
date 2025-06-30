<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2 class="text-lg font-bold">{{ $job->title }}</h2>
    <p>Salary: {{ $job->salary }}</p>

    <p class="mt-6"></p>
    <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
</x-layout>