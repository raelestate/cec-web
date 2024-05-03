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
@if ($item === 'promotions')
<div class="py-5 px-3">
    <div class="card bg-white shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Group</h2>
            <h2 class="card-body font-bold">
                Monthly Promo<br>
                Chef Specialty<br>
                Club Events<br>
                Circulars<br>
            </h2>
            <div class="card-actions justify-end">
                <a href="/{{ $item }}" class="btn btn-primary" type="button">Modify Now</a>
            </div>
        </div>
    </div>
</div>
@elseif ($item === 'manuals')
<div class="py-5 px-3">
    <div class="card bg-white shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Group</h2>
            <h2 class="card-body font-bold">
                Manuals on Corporate Governance<br>
                Annual Reports<br>
            </h2>
            <div class="card-actions justify-end">
                <a href="/{{ $item }}" class="btn btn-primary" type="button">Modify Now</a>
            </div>
        </div>
    </div>
</div>
@else
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
@endif
@endforeach