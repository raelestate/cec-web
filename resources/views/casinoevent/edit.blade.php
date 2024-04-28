<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Casino Event
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8">EDIT</h1>
    <form method="POST" action="{{ route('casinoevent.update', ['casinoevent' => $casinoevent]) }}"
        enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="event_title" class="block text-sm font-medium text-gray-700">Casino Event Title</label>
            <input type="text" name="event_title" id="event_title" placeholder="Welcome Card Title"
                value="{{ $casinoevent->event_title }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="event_video" class="block text-sm font-medium text-gray-700">Casino Event Video</label>
            <input type="file" name="event_video" id="event_video" accept="video/*"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
            <input type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                value="Update">
        </div>
    </form>
    <x-toast_errors></x-toast_errors>
</x-app-layout>
