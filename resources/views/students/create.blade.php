
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-red-900 dark:text-gray-100">
                <h1>Add Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name">
    <label>Surname:</label>
    <input type="text" name="surname">
    <label>Grade:</label>
    <input type="number" name="grade">
    <button type="submit">Save</button>
</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>