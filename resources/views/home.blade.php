<x-layout>
    <x-slot name="heading">
        <div class="container mx-auto">
            <div class="flex flex-row justify-center items-center px-5 pb-5">
                <x-carousel></x-carousel>
            </div>
        </div>
    </x-slot>

    <div class="container mx-auto">
        <div class="grid-rows-auto">
            <div class="px-14 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="md:col-span-2">
                    <x-welcome_card></x-welcome_card>
                </div>
                <div class="md:col-span-1">
                    <x-facebook></x-facebook>
                </div>
                <div class="md:col-span-2">
                <x-casino_activities></x-casino_activities>
                </div>
                <x-featured></x-featured>
            </div>
        </div>
    </div>
</x-layout>
