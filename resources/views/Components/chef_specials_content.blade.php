<?php

use App\Models\Promotion;
use App\Models\Management;

$managements = Management::all();
$promotions = Promotion::all();
?>
<div class="container mx-auto text-lime-50 px-5 pt-5">
    <div class="flex justify-center items-center">
        @foreach ($managements as $data)
            @if ($data->management_position == 'Head Chef')
                <div class="p-4">
                    <div class="flex justify-center">
                        <img src="{{ $data->management_image }}" alt="{{ $data->management_name }}"
                            class="max-w-58 max-h-58 rounded">
                    </div>
                    <h2 class="text-2xl font-semibold mt-2">{{ $data->management_position }}</h2>
                    <!-- Description -->
                    <p class="mt-1">{{ $data->management_name }}</p>
                    <!-- Image -->
                </div>
            @endif
        @endforeach
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($promotions as $data)
            @if ($data->promotions_type == 'Chef Specialty')
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
