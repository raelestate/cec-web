<?php

use App\Models\Amenity;

$amenities = Amenity::all();
?>
@foreach ($amenities as $data)
    @if ($data->amenities_type == 'Function Rooms')
        <div class="container mx-auto px-5 pt-5">
            <div class="flex place-content-center text-white text-3xl font-extrabold pt-10 p-5">
                <p class="text-base font-thin"> Casino Español de Cebu is the best place for meetings, presentations,
                    conventions,
                    receptions, parties and
                    other
                    important events. We are well-equipped with modern facilities and offers a variety of services
                    including
                    WIFI
                    connectivity. We can provide you with function rooms that can be a perfect setting for a wide
                    variety of
                    activities
                    from product launching and display to trade exhibits, and other social events.</p>
            </div>
            <div class="hero min-h-screen rounded-3xl" style="background-image: url({{ $data->amenities_image }});">
                <div class="hero-overlay bg-opacity-80 rounded-3xl"></div>
                <div class="hero-content text-center text-lime-50">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">{{ $data->amenities_title }}</h1>
                        <p class="mb-5 text-justify">
                            {{ $data->amenities_description }}
                        </p>
                    </div>
                </div>
            </div>
    @endif
@endforeach
