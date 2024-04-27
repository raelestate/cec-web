<?php
use App\Models\Carousel;

$carousels = Carousel::all();
?>
<div class="py-5">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-green-300 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black">
                <p class="text-3xl">Carousel Data:</p>
                <p class="mt-4">Number of carousel at database: {{ $carousels->count() }}</p>
                <p class="mt-4">
                    @if($carousels->isEmpty())
                        No items found in the database.
                    @else
                        Carousel last updated {{ $carousels->last()->updated_at->diffForHumans() }}
                    @endif
                </p>
                <div class="py-5">
                <a href="/carousel"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Modify Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
