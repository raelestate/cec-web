<?php
use App\Models\CasinoEvent;

$casinoevents = CasinoEvent::all();
?>
<div class="py-5">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-green-300 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black">
                <p class="text-3xl">Casino Event Data:</p>
                <p class="mt-4">Number of Casino Events at database: {{ $casinoevents->count() }}</p>
                <p class="mt-4">
                    @if ($casinoevents->isEmpty())
                        No items found in the database.
                    @else
                        Carousel last updated {{ $casinoevents->last()->updated_at->diffForHumans() }}
                    @endif
                </p>
                <div class="py-5">
                    <a href="/casinoevent"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Modify Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
