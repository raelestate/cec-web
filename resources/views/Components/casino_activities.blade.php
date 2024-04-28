<?php

use App\Models\CasinoEvent;

$casinoevents = CasinoEvent::all();
?>
<div class="container flex flex-col justify-center items-center mx-auto rounded-xl">
    <h3 class="bg-cyan-900 text-white text-lg font-bold px-4 py-2 rounded-t-xl w-full">CASINO EVENT:
        @foreach ($casinoevents as $casino_event)
            {{ $casino_event->event_title }}
        @endforeach
    </h3>
    <iframe class="w-full aspect-video rounded-b-xl"
        src="
    @foreach ($casinoevents as $casino_event)
    {{ $casino_event->event_video }} @endforeach
    "></iframe>
</div>
