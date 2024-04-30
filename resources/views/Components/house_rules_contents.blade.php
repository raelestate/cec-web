<?php

use App\Models\HouseRule;

$houserules = HouseRule::all();
?>
@foreach ($houserules as $data)
    <div class="container mx-auto p-3">

        <div class="collapse collapse-plus bg-transparent border text-lime-100 p-5">
            <input type="radio" name="my-accordion-3" checked="checked" />
            <div class="collapse-title text-xl font-medium">
                {{ $data->houserules_title }}
            </div>
            <div class="collapse-content">
                <p>{!! nl2br(e($data->houserules_text)) !!}</p>
            </div>
        </div>

    </div>
@endforeach
<p class="text-lime-100">Revised | {{ $houserules->last()->updated_at->format('F Y') }}</p>
