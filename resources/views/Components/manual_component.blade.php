<?php

use App\Models\Manuals;

$manuals = Manuals::all();
?>
@foreach ($manuals as $data)
    <div class="mx-auto px-5 pt-5">
        <div class="collapse collapse-arrow transparent border text-lime-100">
            <input type="radio" name="my-accordion-2" checked="checked" />
            <div class="collapse-title text-xl font-medium">
                {{ $data->manuals_title }}
            </div>
            <div class="collapse-content">
                <div class="responsive-iframe">
                    <iframe src="{{ $data->manuals_pdf }}" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endforeach
<style>
    .responsive-iframe {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio (divide 9 by 16 = 0.5625) */
    }

    .responsive-iframe iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
