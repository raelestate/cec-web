<?php
use App\Models\Carousel;

$carousels = Carousel::all();
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-admin_dashboard_greet_user></x-admin_dashboard_greet_user>
        </h2>
    </x-slot>
    <x-admin_dashboard_register_user></x-admin_dashboard_register_user>
    <div class="container mx-auto px-5">
        <div class="grid grid-cols-2 gap-0">
            <x-admin-dashboard-redirect-welcomecard></x-admin-dashboard-redirect-welcomecard>
            <x-admin-dashboard-redirect-carousel></x-admin-dashboard-redirect-carousel>
            <x-admin-dashboard-redirect-casinoevents></x-admin-dashboard-redirect-casinoevents>
        </div>

    </div>


</x-app-layout>
