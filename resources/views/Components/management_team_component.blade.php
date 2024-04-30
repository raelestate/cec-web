<?php

use App\Models\Management;

$managements = Management::all();
?>
<div class="text-lime-50">
    @foreach ($managements as $data)
        <div class="flex flex-col md:flex-row justify-center items-center p-5">
            <div class="flex flex-col items-center md:w-1/3">
                <div class="bg-gray-200 w-44 h-44 flex items-center justify-center mb-2 rounded-xl"><img
                        src="{{ $data->management_image }}" alt="" class="rounded-xl"></div>
                <p>{{ $data->management_name }}</p>
                <p>{{ $data->management_position }}</p>
            </div>
        </div>
    @endforeach

</div>
