<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Casino Event
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8">CREATE</h1>

    <form method="POST" action="{{ route('casinoevent.store') }}" enctype="multipart/form-data"
        class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        @csrf
        <div class="mb-4">
            <label for="event_title" class="block text-sm font-medium text-gray-700">Casino Event Title</label>
            <input type="text" name="event_title" id="event_title" placeholder="Event Title"
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
                value="Save" required>
        </div>
    </form>
    <div class="mt-4">
        <x-toast_errors></x-toast_errors>
    </div>

    <!-- Toast Notification -->
    @if (session('video_upload_status'))
        <div class="fixed bottom-0 right-0 m-8 bg-green-500 text-white p-4 rounded">
            {{ session('video_upload_status') }}
        </div>
    @endif
</x-app-layout>
