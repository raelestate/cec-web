<?php

use App\Models\FactSheet;

$factsheets = FactSheet::all();
?>
<x-layout>
    <x-slot name="heading">
        <x-breadcrumbs></x-breadcrumbs>
    </x-slot>
    <div class="flex justify-center text-white text-3xl font-extrabold pt-10">
        <h1>Fact Sheet</h1>
    </div>
    <div class="mx-auto p-10">
        @foreach ($factsheets as $data)
            <div class="container mx-auto px-4 py-8 md:px-8 lg:px-12 text-white text-justify">
                <h2 class="text-2xl font-semibold mb-4">{{ $data->fact_sheet_title }}</h2>
                <p>{!! nl2br(e($data->fact_sheet_text)) !!}</p>
            </div>
        @endforeach
    </div>
</x-layout>
