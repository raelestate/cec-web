<?php

use App\Models\Promotion;

$promotions = Promotion::all();
?>
<div class="container mx-auto text-lime-50 px-5 pt-5">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($promotions as $data)
            @if ($data->promotions_type == 'Club Events')
                <div class="p-4">
                    <h2 class="text-2xl font-semibold mt-2">{{ $data->promotions_title }}</h2>
                    <!-- Description -->
                    <p class="mt-1">{{ $data->promotions_description }}</p>
                    <!-- Image -->
                    <img src="{{ $data->promotions_image }}" alt="{{ $data->promotions_title }}"
                        class="w-full h-auto rounded-2xl">
                </div>
            @endif
        @endforeach
    </div>
</div>
