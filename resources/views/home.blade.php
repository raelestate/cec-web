<x-layout>
    <x-slot:heading>
        <div class="container mx-auto">
            <div class="flex flex-row justify-center items-center px-5 pb-5">
                <x-carousel>
                </x-carousel>
                <div class="divider"></div>
            </div>
        </div>

    </x-slot:heading>
    <div class="grid-rows-auto">
        <div class="container mx-auto px-10">
            <x-welcome_card></x-welcome_card>
        </div>

        <div class="container mx-auto pt-10 px-14">
            <x-casino_activities></x-casino_activities>
        </div>
        <div class="container mx-auto pt-10 w-full px-10">
            <x-featured></x-featured>
        </div>
    </div>
</x-layout>
