<?php

use App\Models\Featured;

$features = Featured::all();
?>
<div class="card w-full bg-transparent border shadow-xl text-lime-200">
    <div class="card-body">
        <h2 class="card-title">Featured!</h2>
        @foreach ($features as $featured)
            <div class="collapse collapse-plus transparent border">
                <input type="radio" name="my-accordion-3" />
                <div class="collapse-title text-xl font-medium">
                    {{ $featured->featured_title }}
                </div>
                <div class="collapse-content">
                    <img src="{{ $featured->featured_image }}" alt="{{ $featured->featured_title }}">
                </div>
            </div>
        @endforeach
    </div>
</div>
