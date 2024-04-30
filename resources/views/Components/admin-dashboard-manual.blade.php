<?php
use App\Models\Manuals;

$manuals = Manuals::all();
?>
<div class="py-5">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-purple-300 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black">
                <p class="text-3xl">Manuals Data:</p>
                <p class="mt-4">Number of manuals at database: {{ $manuals->count() }}</p>
                <p class="mt-4">
                    @if ($manuals->isEmpty())
                        No items found in the database.
                    @else
                        manuals last updated {{ $manuals->last()->updated_at->diffForHumans() }}
                    @endif
                </p>
                <div class="py-5">
                    <a href="/manuals" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Modify
                        Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
