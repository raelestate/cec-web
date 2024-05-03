<?php

use App\Models\WelcomeCard;

$welcomeCard = WelcomeCard::all();
?>
<div class="mx-auto text-white border p-9 rounded-xl">
    <h1 class="py-2 font-bold lg:text-5xl pb-7">
        @foreach ($welcomeCard as $welcomeCards)
            {{ $welcomeCards->welcome_title }}
        @endforeach
    </h1>
    <p class="leading-relaxed text-justify lg:text-2xl pb-5">
        @foreach ($welcomeCard as $welcomeCards)
            <?php
            $text = nl2br($welcomeCards->welcome_text); // Detect line breaks and convert them to <br> tags

            ?>
            {!! $text !!}
        @endforeach
    </p>
</div>