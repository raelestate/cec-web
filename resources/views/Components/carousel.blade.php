<div x-data="{ activeSlide: 0, slides: 30 }" x-init="setInterval(() => { activeSlide = (activeSlide + 1) % slides }, 3000)" class="relative">
    <div class="overflow-hidden w-full">
        <div class="flex transition-transform duration-300 ease-in-out"
            :style="'transform: translateX(-' + (100 * activeSlide) + '%);'">
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" alt="Slide 1"
                    class="object-cover w-full h-64 rounded-lg">
                <span
                    class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">Slide
                    1 Text</span>
            </div>
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" alt="Slide 2"
                    class="object-cover w-full h-64 rounded-lg">
                <span
                    class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">Slide
                    2 Text</span>
            </div>
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" alt="Slide 3"
                    class="object-cover w-full h-64 rounded-lg">
                <span
                    class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">Slide
                    3 Text</span>
            </div>
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" alt="Slide 3"
                    class="object-cover w-full h-64 rounded-lg">
                <span
                    class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">Slide
                    3 Text</span>
            </div>
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" alt="Slide 3"
                    class="object-cover w-full h-64 rounded-lg">
                <span
                    class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">Slide
                    3 Text</span>
            </div>
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" alt="Slide 3"
                    class="object-cover w-full h-64 rounded-lg">
                <span
                    class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">Slide
                    3 Text</span>
            </div>
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" alt="Slide 3"
                    class="object-cover w-full h-64 rounded-lg">
                <span
                    class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">Slide
                    3 Text</span>
            </div>
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" alt="Slide 3"
                    class="object-cover w-full h-64 rounded-lg">
                <span
                    class="absolute inset-0 flex items-center justify-center text-white text-xl bg-black bg-opacity-25">Slide
                    3 Text</span>
            </div>
        </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 flex justify-center mt-2">
        <template x-for="i in slides">
            <button @click="activeSlide = i - 1" :class="{ 'bg-gray-600': activeSlide === i - 1 }"
                class="w-4 h-4 mx-1 rounded-full"></button>
        </template>
    </div>
</div>
</div>
