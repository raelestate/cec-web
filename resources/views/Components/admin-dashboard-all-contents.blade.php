@php
    $items = [
        'amenities',
        'carousel',
        'casinoevent',
        'director',
        'factsheet',
        'featured',
        'houserules',
        'management',
        'manuals',
        'promotions',
        'welcomecard',
    ];
@endphp

@foreach ($items as $item)
    <div class="py-5 px-3">
        <div class="card bg-white shadow-xl">
            <div class="card-body">
                <h2 class="card-title">{{ ucfirst($item) }}</h2>
                <div class="card-actions justify-end">
                    <a href="/{{ $item }}" class="btn btn-primary" type="button">Modify Now</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
