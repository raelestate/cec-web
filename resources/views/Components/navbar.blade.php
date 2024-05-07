<div class="container mx-auto text-white">
    <div class="navbar bg-transparent p-10">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>

                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-cyan-900 rounded-box w-52">
                    <li>
                        <x-nav-home href="/" :active="request()->is('/')">
                            Home</x-nav-home>
                    </li>
                    <li>
                        <details>
                            <summary class="text-lg">About Us</summary>
                            <ul class="text-center bg-cyan-900">
                                <li class="px-2">
                                    <x-nav-home href="/fact_sheet" :active="request()->is('fact_sheet')">Fact Sheet
                                    </x-nav-home>
                                    <x-nav-home href="/history" :active="request()->is('history')">History</x-nav-home>
                                    <x-nav-home href="/vision_mission" :active="request()->is('vision_mission')">Vision
                                        and Mision</x-nav-home>
                                    <x-nav-home href="/house_rules" :active="request()->is('house_rules')">House Rules
                                    </x-nav-home>
                                    <x-nav-home href="/manual" :active="request()->is('manual')">Manual on Corporate
                                        Governance</x-nav-home>
                                    <x-nav-home href="/annual" :active="request()->is('annual')">Annual Report
                                    </x-nav-home>

                                </li>
                                <li>
                                    <x-nav-home href="/board" :active="request()->is('board')">Board of Directors
                                    </x-nav-home>
                                    <x-nav-home href="/management_team" :active="request()->is('management_team')">
                                        Management Teams</x-nav-home>
                                    <x-nav-home href="/developers" :active="request()->is('developers')">Developers
                                    </x-nav-home>
                                </li>

                            </ul>
                        </details>
                    </li>
                    <li>
                        <x-nav-home href="/membership" :active="request()->is('membership')">Membership</x-nav-home>
                    </li>
                    <li>
                        <details>
                            <summary class="text-lg">Amenities</summary>
                            <ul class="text-center">
                                <li class="px-2">
                                    <x-nav-home href="/restaurant_outlets" :active="request()->is('restaurant_outlets')">Restaurant
                                        Outlets</x-nav-home>
                                    <x-nav-home href="/function_rooms" :active="request()->is('function_rooms')">
                                        Function Rooms</x-nav-home>
                                    <x-nav-home href="/sports" :active="request()->is('sports')">Sports</x-nav-home>
                                </li>

                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary class="text-lg">Promotions</summary>
                            <ul class="text-center">
                                <li class="px-2">
                                    <x-nav-home href="/monthly_promo" :active="request()->is('monthly_promo')">Monthly
                                        Promo</x-nav-home>
                                    <x-nav-home href="/chef" :active="request()->is('chef')">Chef Specialties
                                    </x-nav-home>
                                </li>
                            </ul>
                        </details>
                    </li>
                    <li>
                    <li>
                        <details>
                            <summary class="text-lg">Events</summary>
                            <ul class="text-center">
                                <li class="px-2">
                                    <x-nav-home href="/club_events" :active="request()->is('club_events')">Club Events
                                    </x-nav-home>
                                </li>

                            </ul>
                        </details>
                    </li>
                    </li>
                    <li>
                        <x-nav-home href="/circulars" :active="request()->is('circulars')">Circulars</x-nav-home>
                        <x-nav-home href="/contact" :active="request()->is('contact')">Contact Us</x-nav-home>
                        @props([
                            'active' => false,
                        ])
                        <a class="{{ $active ? 'border rounded-xl text-white' : 'text-white-500 hover:underline pb-4' }} 
            rounded-md px-3 py-2 text-lg"
                            aria-current="{{ request()->is('/https://123123123123') ? 'page' : 'false' }}"{{ $attributes }}>
                            Member Login
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-center hidden lg:flex">
                <div class="w-16 rounded-full p-15">
                    <a href="/"> <img src="/images/CEC_LOGO_WHITE.png" alt="CEC LOGO WHITE"></a>

                </div>
            </div>


        </div>
        <div class="navbar-center lg:hidden">
            <div class="w-16 rounded-full p-15">
                <a href="/"><img src="/images/CEC_LOGO_WHITE.png" alt="CEC LOGO WHITE"></a>

            </div>
        </div>
        <div class="navbar-end lg:hidden">
            <div class="w-16 rounded-full p-15">
                <img src="" alt="">
            </div>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 z-40">
                <li>
                    <x-nav-home href="/" :active="request()->is('/')">
                        Home</x-nav-home>
                </li>
                <li>
                    <details>
                        <summary class="text-lg">About Us</summary>
                        <ul class="text-center bg-cyan-900">
                            <li class="px-40">
                                <x-nav-home href="/fact_sheet" :active="request()->is('fact_sheet')">Fact Sheet
                                </x-nav-home>
                                <x-nav-home href="/history" :active="request()->is('history')">History</x-nav-home>
                                <x-nav-home href="/vision_mission" :active="request()->is('vision_mission')">Vision and
                                    Mision</x-nav-home>
                                <x-nav-home href="/house_rules" :active="request()->is('house_rules')">House Rules
                                </x-nav-home>
                                <x-nav-home href="/manual" :active="request()->is('manual')">Manual on Corporate
                                    Governance</x-nav-home>
                                <x-nav-home href="/annual" :active="request()->is('annual')">Annual Report</x-nav-home>
                                <div class="divider"></div>

                            </li>
                            <li>
                                <x-nav-home href="/board" :active="request()->is('board')">Board of Directors
                                </x-nav-home>
                                <x-nav-home href="/management_team" :active="request()->is('management_team')">
                                    Management Teams</x-nav-home>
                                <x-nav-home href="/developers" :active="request()->is('developers')">Developers
                                </x-nav-home>
                            </li>

                        </ul>
                    </details>
                </li>
                <li>
                    <x-nav-home href="/membership" :active="request()->is('membership')">Membership</x-nav-home>
                </li>
                <li>
                    <details>
                        <summary class="text-lg">Amenities</summary>
                        <ul class="text-center bg-cyan-900">
                            <li class="px-40">
                                <x-nav-home href="/restaurant_outlets" :active="request()->is('restaurant_outlets')">
                                    Restaurant
                                    Outlets</x-nav-home>
                                <x-nav-home href="/function_rooms" :active="request()->is('function_rooms')">Function
                                    Rooms</x-nav-home>
                                <x-nav-home href="/sports" :active="request()->is('sports')">Sports</x-nav-home>
                            </li>

                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary class="text-lg">Promotions</summary>
                        <ul class="text-center bg-cyan-900">
                            <li class="px-40">
                                <x-nav-home href="/monthly_promo" :active="request()->is('monthly_promo')">Monthly Promo
                                </x-nav-home>
                                <x-nav-home href="/chef" :active="request()->is('chef')">Chef Specialties</x-nav-home>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                <li>
                    <details>
                        <summary class="text-lg ">Events</summary>
                        <ul class="text-center bg-cyan-900">
                            <li class="px-40">
                                <x-nav-home href="/club_events" :active="request()->is('club_events')">Club Events
                                </x-nav-home>
                            </li>

                        </ul>
                    </details>
                </li>
                </li>
                <li>
                    <x-nav-home href="/circulars" :active="request()->is('circulars')">Circulars</x-nav-home>
                    <x-nav-home href="/contact" :active="request()->is('contact')">Contact Us</x-nav-home>
                </li>
            </ul>
        </div>
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li>
                    @props([
                        'active' => false,
                    ])
                    <a class="{{ $active ? 'border rounded-xl text-white' : 'text-white-500 hover:underline pb-4' }} 
        rounded-md px-3 py-2 text-lg"
                        aria-current="{{ request()->is('/https://123123123123') ? 'page' : 'false' }}"{{ $attributes }}>
                        Member Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
