<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                <p class="text-2xl font-bold">{{ __($greeting) }}, {{ Auth::user()->name }}.</p>
                <p class="mt-2">Today is {{ $currentTime->toFormattedDateString() }}.</p>

            </div>
        </div>
    </div>
</div>
