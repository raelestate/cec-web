<?php

use App\Models\WelcomeCard;

$welcome_cards = WelcomeCard::all();
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome Card
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8">Welcome Cards</h1>
    <div>
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
    </div>
    <div class="mb-4">
        <a href="{{ route('welcomecard.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create a Welcome Card</a>
    </div>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Text</th>
                <th class="border px-4 py-2">Created at</th>
                <th class="border px-4 py-2">Updated at</th>
                <th class="border px-4 py-2">Edit</th>
                <th class="border px-4 py-2">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($welcome_cards as $welcomecard)
                <tr>
                    <td class="border px-4 py-2">{{ $welcomecard->id }}</td>
                    <td class="border px-4 py-2">{{ $welcomecard->welcome_title }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($welcomecard->welcome_text, 50, '...') }}</td>
                    <td class="border px-4 py-2">{{ $welcomecard->created_at }}</td>
                    <td class="border px-4 py-2">{{ $welcomecard->updated_at }}</td>
                    <td class="border px-4 py-2"><a href="{{ route('welcomecard.edit', ['welcomecard' => $welcomecard]) }}"
                            class="text-blue-500">Edit</a></td>
                    <td class="border px-4 py-2">
                        <form method="POST"
                            action="{{ route('welcomecard.destroy', ['welcomecard' => $welcomecard]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                class="text-red-500 hover:text-red-700 focus:outline-none">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>