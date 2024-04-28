<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Carousel
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8">EDIT</h1>
    <img src="{{ $carousel->image }}" alt="">
    <form method="POST" action="{{ route('carousel.update', ['carousel' => $carousel]) }}" enctype="multipart/form-data"
        class="mt-8">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="carousel_title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="carousel_title" id="carousel_title" placeholder="Carousel Title"
                value="{{ $carousel->carousel_title }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                value="{{ $carousel->image }}">
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
