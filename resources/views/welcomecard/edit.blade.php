<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome Card
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8">EDIT</h1>
    <form method="POST" action="{{ route('welcomecard.update', ['welcomecard' => $welcomecard]) }}"
        enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="welcome_title" class="block text-sm font-medium text-gray-700">Welcome Card Title</label>
            <input type="text" name="welcome_title" id="welcome_title" placeholder="Welcome Card Title"
                value="{{ $welcomecard->welcome_title }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="welcome_text" class="block text-sm font-medium text-gray-700">Welcome Text</label>
            <textarea name="welcome_text" id="welcome_text"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                cols="30" rows="10">{{ $welcomecard->welcome_text }}</textarea>
        </div>
        <div>
            <input type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                value="Update">
        </div>
    </form>
    <div class="mt-4">
        @if ($errors->any())
            <ul class="list-disc list-inside text-red-500">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</x-app-layout>