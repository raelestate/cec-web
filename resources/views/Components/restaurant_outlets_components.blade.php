<?php

use App\Models\Amenity;

$amenities = Amenity::all();
?>
@foreach ($amenities as $data)
    @if ($data->amenities_type == 'Restaurant')
        <div class="container mx-auto px-5 pt-5">
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
        </div>
    @endif
@endforeach
