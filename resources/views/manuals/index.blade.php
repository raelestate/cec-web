<?php

use App\Models\Manuals;

$manuals = Manuals::all();
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manuals
        </h2>
    </x-slot>
    <h1 class="text-3xl font-bold mb-8"></h1>
    <div>
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
    </div>
    <div class="mb-4">
        <a href="{{ route('manuals.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create A Manual</a>
    </div>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">PDF</th>
                <th class="border px-4 py-2">Created at</th>
                <th class="border px-4 py-2">Updated at</th>
                <th class="border px-4 py-2">Edit</th>
                <th class="border px-4 py-2">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($manuals as $manual)
                <tr>
                    <td class="border px-4 py-2">{{ $manual->id }}</td>
                    <td class="border px-4 py-2">{{ $manual->manuals_title }}</td>
                    <td class="border px-4 py-2">{{ $manual->manuals_pdf }}</td>
                    <td class="border px-4 py-2">{{ $manual->created_at }}</td>
                    <td class="border px-4 py-2">{{ $manual->updated_at }}</td>
                    <td class="border px-4 py-2"><a href="{{ route('manuals.edit', ['manuals' => $manual]) }}"
                            class="text-blue-500">Edit</a></td>
                    <td class="border px-4 py-2">
                        <form method="POST" action="{{ route('manuals.destroy', ['manuals' => $manual]) }}">
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
    <x-toast_errors></x-toast_errors>
</x-app-layout>
