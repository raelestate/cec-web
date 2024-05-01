<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Promotion
        </h2>
    </x-slot>
    <div>
        @if (session()->has('success'))
            <div class="bg-green-200 text-green-800 py-2 px-4 rounded-md mb-4">{{ session('success') }}</div>
        @endif
    </div>
    <div class="mb-4">Create an promotions</div>
    <a href="{{ route('promotions.create') }}"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
    <table class="w-full mt-8">
        <thead>
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Description</th>
                <th class="border px-4 py-2">Type</th>
                <th class="border px-4 py-2">Image</th>
                <th class="border px-4 py-2">Created at</th>
                <th class="border px-4 py-2">Updated at</th>
                <th class="border px-4 py-2">Edit</th>
                <th class="border px-4 py-2">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promotions as $promotion)
                <tr>
                    <td class="border px-4 py-2">{{ $promotion->id }}</td>
                    <td class="border px-4 py-2">{{ $promotion->promotions_title }}</td>
                    <td class="border px-4 py-2">{{ $promotion->promotions_description }}</td>
                    <td class="border px-4 py-2">{{ $promotion->promotions_type }}</td>
                    <td class="border px-4 py-2">
                        <img src="{{ $promotion->promotions_image }}" alt="{{ $promotion->promotions_title }}"
                            class="w-20 h-20 object-cover">
                    </td>
                    <td class="border px-4 py-2">{{ $promotion->created_at }}</td>
                    <td class="border px-4 py-2">{{ $promotion->updated_at }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('promotions.edit', ['promotion' => $promotion]) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                    </td>
                    <td class="border px-4 py-2">
                        <form method="POST" action="{{ route('promotions.destroy', ['promotion' => $promotion]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        <x-toast_errors></x-toast_errors>
    </div>
</x-app-layout>
