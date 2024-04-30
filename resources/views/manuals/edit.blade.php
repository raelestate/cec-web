<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manuals
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8"></h1>
    <form method="POST" action="{{ route('manuals.update', ['manuals' => $manual]) }}" enctype="multipart/form-data"
        class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="manuals_title" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" name="manuals_title" id="manuals_title" placeholder="Manual Title"
                value="{{ $manual->manuals_title }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="manuals_pdf" class="block text-sm font-medium text-gray-700"></label>
            <input type="file" name="manuals_pdf" id="manuals_pdf"
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
