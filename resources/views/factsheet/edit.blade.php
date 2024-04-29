<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Fact Sheet
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8"></h1>
    <form method="POST" action="{{ route('factsheet.update', ['fact_sheets' => $fact_sheets]) }}"
        enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="fact_sheet_title" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" name="fact_sheet_title" id="fact_sheet_title" placeholder="Fact Sheet Title"
                value="{{ $fact_sheets->fact_sheet_title }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="fact_sheet_text" class="block text-sm font-medium text-gray-700"></label>
            <textarea type="text" name="fact_sheet_text" id="fact_sheet_text" placeholder="{{ $fact_sheets->fact_sheet_text }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>
        <div>
            <input type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                value="Update">
        </div>
    </form>
    <x-toast_errors></x-toast_errors>
</x-app-layout>
