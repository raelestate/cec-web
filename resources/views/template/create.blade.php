<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8"></h1>

    <form method="POST" action="{{ route('.store') }}" enctype="multipart/form-data"
        class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        @csrf
        <div class="mb-4">
            <label for="" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" name="" id="" placeholder=""
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <input type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                value="Save" required>
        </div>
    </form>
    <x-toast_errors></x-toast_errors>
</x-app-layout>
