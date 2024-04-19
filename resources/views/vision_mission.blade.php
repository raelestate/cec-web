<x-layout>
    <x-slot:heading>

        <x-breadcrumbs></x-breadcrumbs>
        <div class="flex place-content-center text-white text-3xl font-extrabold pt-10">
            <h1>Vision and Mission</h1>
        </div>
    </x-slot:heading>
    <div class="container mx-auto pt-5 px-10 text-sky-100">
        <x-vision_message></x-vision_message>
        <div class="divider divider-vertical">AND</div>
        <x-mission_message></x-mission_message>
    </div>


</x-layout>
