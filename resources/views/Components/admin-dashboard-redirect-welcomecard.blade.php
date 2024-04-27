<?php
use App\Models\WelcomeCard;

$welcome_cards = WelcomeCard::all();
?>
<div class="py-5">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-green-300 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black">
                <p class="text-3xl">Welcome Card Data:</p>
                <p class="mt-4">Number of Welcome Cards at database: {{ $welcome_cards->count() }}</p>
                <p class="mt-4">
                    @if($welcome_cards->isEmpty())
                        No items found in the database.
                    @else
                        Welcome Card last updated {{ $welcome_cards->last()->updated_at->diffForHumans() }}
                    @endif
                </p>
                <div class="py-5">
                <a href="/welcomecard"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Modify Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
