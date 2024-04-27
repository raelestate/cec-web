<?php

use App\Models\WelcomeCard;

$welcomeCard = WelcomeCard::all();
?>
<div class="max-w-md mx-auto mt-20 text-white border p-5 rounded-xl">
    <h1 class="py-2 font-bold text-xl ">
        @foreach($welcomeCard as $welcomeCards)
        {{$welcomeCards->welcome_title}}
        @endforeach

    </h1>
    <p class="leading-relaxed text-justify">
    @foreach($welcomeCard as $welcomeCards)
        <?php
            $text = $welcomeCards->welcome_text;
            $shortText = strlen($text) > 200 ? substr($text, 0, 200) : $text;
            $remainingText = strlen($text) > 200 ? substr($text, 200) : '';
        ?>
        {{ $shortText }}
        @if(strlen($text) > 200)
            <span class="hidden" id="more-text">{{ $remainingText }}</span>
        @endif
    @endforeach
    </p>
    <button id="toggle-btn" class="mt-4 text-blue-500 focus:outline-none">Read More</button>
    <button id="hide-btn" class="hidden mt-4 text-blue-500 focus:outline-none">Hide</button>
</div>


<script>
    const moreTextEl = document.getElementById('more-text');
    const toggleBtnEl = document.getElementById('toggle-btn');
    const hideBtnEl = document.getElementById('hide-btn');

    toggleBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });

    hideBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });
</script>
