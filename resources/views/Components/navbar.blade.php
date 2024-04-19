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
                        <x-nav-link href="/" :active="request()->is('/')">
                            Home</x-nav-link>
                    </li>
                    <li>
                        <details>
                            <summary class="text-lg">About Us</summary>
                            <ul class="text-center bg-cyan-900">
                                <li class="px-2">
                                    <x-nav-link href="/fact_sheet" :active="request()->is('fact_sheet')">Fact Sheet</x-nav-link>
                                    <x-nav-link href="/history" :active="request()->is('history')">History</x-nav-link>
                                    <x-nav-link href="/vision_mission" :active="request()->is('vision_mission')">Vision and Mision</x-nav-link>
                                    <x-nav-link href="/house_rules" :active="request()->is('house_rules')">House Rules</x-nav-link>
                                    <x-nav-link href="/manual" :active="request()->is('manual')">Manual on Corporate
                                        Governance</x-nav-link>

                                </li>
                                <li>
                                    <x-nav-link href="/board" :active="request()->is('board')">Board of Directors</x-nav-link>
                                    <x-nav-link href="/management_team" :active="request()->is('management_team')">Management Teams</x-nav-link>
                                    <x-nav-link href="/developers" :active="request()->is('developers')">Developers</x-nav-link>
                                </li>

                            </ul>
                        </details>
                    </li>
                    <li>
                        <x-nav-link href="/membership" :active="request()->is('membership')">Membership</x-nav-link>
                    </li>
                    <li>
                        <details>
                            <summary class="text-lg">Amenities</summary>
                            <ul class="text-center">
                                <li class="px-2">
                                    <x-nav-link href="/restaurant_outlets" :active="request()->is('restaurant_outlets')">Restaurant
                                        Outlets</x-nav-link>
                                    <x-nav-link href="/function_rooms" :active="request()->is('function_rooms')">Function Rooms</x-nav-link>
                                    <x-nav-link href="/sports" :active="request()->is('sports')">Sports</x-nav-link>
                                </li>

                            </ul>
                        </details>
                    </li>
                    <li>
                        <x-nav-link href="/promotions" :active="request()->is('promotions')">Promotions</x-nav-link>
                    </li>
                    <li>
                    <li>
                        <details>
                            <summary class="text-lg">Events</summary>
                            <ul class="text-center">
                                <li class="px-2">
                                    <x-nav-link href="/club_events" :active="request()->is('club_events')">Club Events</x-nav-link>
                                </li>

                            </ul>
                        </details>
                    </li>
                    </li>
                    <li>
                        <x-nav-link href="/circulars" :active="request()->is('circulars')">Circulars</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
                        <x-nav-link href="/member_login" :active="request()->is('member_login')">Member Login</x-nav-link>
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
                    <x-nav-link href="/" :active="request()->is('/')">
                        Home</x-nav-link>
                </li>
                <li>
                    <details>
                        <summary class="text-lg">About Us</summary>
                        <ul class="text-center bg-cyan-900">
                            <li class="px-40">
                                <x-nav-link href="/fact_sheet" :active="request()->is('fact_sheet')">Fact Sheet</x-nav-link>
                                <x-nav-link href="/history" :active="request()->is('history')">History</x-nav-link>
                                <x-nav-link href="/vision_mission" :active="request()->is('vision_mission')">Vision and Mision</x-nav-link>
                                <x-nav-link href="/house_rules" :active="request()->is('house_rules')">House Rules</x-nav-link>
                                <x-nav-link href="/manual" :active="request()->is('manual')">Manual on Corporate
                                    Governance</x-nav-link>
                                <div class="divider"></div>

                            </li>
                            <li>
                                <x-nav-link href="/board" :active="request()->is('board')">Board of Directors</x-nav-link>
                                <x-nav-link href="/management_team" :active="request()->is('management_team')">Management Teams</x-nav-link>
                                <x-nav-link href="/developers" :active="request()->is('developers')">Developers</x-nav-link>
                            </li>

                        </ul>
                    </details>
                </li>
                <li>
                    <x-nav-link href="/membership" :active="request()->is('membership')">Membership</x-nav-link>
                </li>
                <li>
                    <details>
                        <summary class="text-lg">Amenities</summary>
                        <ul class="text-center bg-cyan-900">
                            <li class="px-40">
                                <x-nav-link href="/restaurant_outlets" :active="request()->is('restaurant_outlets')">Restaurant
                                    Outlets</x-nav-link>
                                <x-nav-link href="/function_rooms" :active="request()->is('function_rooms')">Function Rooms</x-nav-link>
                                <x-nav-link href="/sports" :active="request()->is('sports')">Sports</x-nav-link>
                            </li>

                        </ul>
                    </details>
                </li>
                <li>
                    <x-nav-link href="/promotions" :active="request()->is('promotions')">Promotions</x-nav-link>
                </li>
                <li>
                <li>
                    <details>
                        <summary class="text-lg ">Events</summary>
                        <ul class="text-center bg-cyan-900">
                            <li class="px-40">
                                <x-nav-link href="/club_events" :active="request()->is('club_events')">Club Events</x-nav-link>
                            </li>

                        </ul>
                    </details>
                </li>
                </li>
                <li>
                    <x-nav-link href="/circulars" :active="request()->is('circulars')">Circulars</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
                </li>
            </ul>
        </div>
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <x-nav-link href="/member_login" :active="request()->is('member_login')">Member Login</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</div>
