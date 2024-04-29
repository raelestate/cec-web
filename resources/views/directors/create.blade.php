<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Director
        </h2>
    </x-slot>
    <div class="py-5">
        <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            <h1 class="text-2xl font-bold mb-6">CREATE</h1>

            <form method="POST" action="{{ route('directors.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="directors_name" placeholder="Director's Name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Position</label>
                    <input type="text" name="directors_position" placeholder="Director's Position"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="directors_image"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <input type="submit" value="Save"
                        class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                </div>
            </form>

            <div class="mt-4">
                <x-toast_errors></x-toast_errors>
            </div>
        </div>
    </div>
</x-app-layout>
