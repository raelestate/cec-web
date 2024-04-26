<div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black">
                @php
                    $currentTime = now()->setTimezone('Asia/Manila');
                    $hour = $currentTime->format('H');
                    $greeting = $hour;
                    if ($hour < 12) {
                        $greeting = 'Good Morning';
                    } elseif ($hour >= 12 && $hour < 18) {
                        $greeting = 'Good Afternoon';
                    } else {
                        $greeting = 'Good Evening';
                    }
                @endphp
                <p class="text-3xl">{{ __($greeting) }},</p>
                <p class="text-2xl font-bold"> {{ Auth::user()->name }}.</p>
                <p class="mt-4 font-bold">Today is {{ $currentTime->toFormattedDateString() }}.</p>

            </div>
        </div>
    </div>
</div>
