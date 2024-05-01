<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            promotions
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8">EDIT</h1>
    <img src="{{ $promotion->promotions_image }}" alt="">
    <form method="POST" action="{{ route('promotions.update', ['promotion' => $promotion]) }}"
        enctype="multipart/form-data" class="mt-8">
        @csrf
        @method('put')
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="promotions_title" placeholder="promotions Title"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea type="text" name="promotions_description" placeholder="promotions Title"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Type</label>
            <select name="promotions_type"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="Monthly Promo">Monthly Promo</option>
                <option value="Chef Specialty">Chef Specialty</option>
                <option value="Club Events">Club Events</option>
                <option value="Circulars">Circulars</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="promotions_image"
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
</x-app-layout>
