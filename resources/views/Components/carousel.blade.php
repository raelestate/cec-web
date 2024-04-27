<?php

use App\Models\Carousel;

$carousels = Carousel::all();
?>
<div x-data="{ activeSlide: 0, slides: {{ $carousels->count() }} }" x-init="setInterval(() => { activeSlide = (activeSlide + 1) % slides }, 3000)" class="relative">
    <div class="overflow-hidden w-full">
        <div class="flex transition-transform duration-300 ease-in-out"
            :style="'transform: translateX(-' + (100 * activeSlide) + '%);'">
            @foreach ($carousels as $carousel)
                <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                    <img src="{{ $carousel->image }}" alt="Slide {{ $loop->iteration }}"
                        class="object-cover h-64 rounded-lg w-full">
                    <span
                        class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">{{ $carousel->carousel_title }}</span>
                </div>
            @endforeach
        </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 flex justify-center mt-2">
        <template x-for="i in slides">
            <button @click="activeSlide = i - 1" :class="{ 'bg-gray-600': activeSlide === i - 1 }"
                class="w-4 h-4 mx-1 rounded-full"></button>
        </template>
    </div>
</div>



