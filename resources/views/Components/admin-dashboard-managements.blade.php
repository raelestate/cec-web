<?php
use App\Models\Management;

$managements = Management::all();
?>
<div class="py-5">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-purple-300 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black">
                <p class="text-3xl">management Data:</p>
                <p class="mt-4">Number of management at database: {{ $managements->count() }}</p>
                <p class="mt-4">
                    @if ($managements->isEmpty())
                        No items found in the database.
                    @else
                        management last updated {{ $managements->last()->updated_at->diffForHumans() }}
                    @endif
                </p>
                <div class="py-5">
                    <a href="/management"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Modify
                        Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
