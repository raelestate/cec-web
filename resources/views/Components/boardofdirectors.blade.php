<?php

use App\Models\Director;

$directors = Director::all();
?>
<div class="text-lime-100">
    @foreach ($directors->where('directors_position', 'PRESIDENTE' | 'Presidente') as $data)
        <div class="flex flex-col md:flex-row justify-center items-center p-5">
            <!-- CEO -->
            <div class="flex flex-col items-center md:w-1/3">
                <div class="bg-gray-200 w-44 h-44 flex items-center justify-center mb-2 rounded-xl"><img
                        src="{{ $data->directors_image }}" alt="" class="rounded-xl"></div>
                <p>{{ $data->directors_name }}</p>
                <p>{{ $data->directors_position }}</p>
            </div>
        </div>
    @endforeach
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 justify-center items-center p-5">
        @foreach ($directors as $data)
            @if ($data->directors_position !== 'Presidente')
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 w-44 h-44 flex items-center justify-center mb-2 rounded-xl"><img
                            src="{{ $data->directors_image }}" alt="" class="rounded-xl"></div>
                    <p>{{ $data->directors_name }}</p>
                    <p>{{ $data->directors_position }}</p>
                </div>
            @endif
        @endforeach
    </div>



</div>
