@if ($errors->any())
    <div class="fixed bottom-4 right-4 z-50">
        @foreach ($errors->all() as $error)
            <div class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md mb-2">
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif
