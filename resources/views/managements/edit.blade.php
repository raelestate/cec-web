<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Management
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8">EDIT</h1>
    <img src="{{ asset($management->management_image) }}" alt="">
    <form method="POST" action="{{ route('managements.update', ['managements' => $management]) }}"
        enctype="multipart/form-data" class="mt-8">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="management_name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="management_name" id="management_name" placeholder="Management's Name"
                value="{{ $management->management_name }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="management_position" class="block text-sm font-medium text-gray-700">Position</label>
            <input type="text" name="management_position" id="management_position"
                placeholder="Management's Position" value="{{ $management->management_position }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="management_image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="management_image" id="management_image"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
            <input type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                value="Update">
        </div>
    </form>
    <div class="mt-4">
        <x-toast_errors></x-toast_errors>
    </div>
</x-app-layout>
