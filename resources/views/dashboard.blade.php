<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-admin_dashboard_register_user></x-admin_dashboard_register_user>

    <div class="grid grid-cols-2 gap-0">
        <x-admin_dashboard_greet_user></x-admin_dashboard_greet_user>
        <x-admin_dashboard_greet_user></x-admin_dashboard_greet_user>
    </div>
    <div class="grid grid-cols-2">
       
    </div>
    
</div>


</x-app-layout>
