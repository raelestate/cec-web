<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <title>Casino Español de Cebu, Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
</head>

<body class="min-h-screen" style="font-family: Helvetica, Arial, sans-serif;">
    <style>
        /* * {
            border: solid 1px red;
        } */

        body {
            background: rgb(3, 2, 22);
            background: -moz-linear-gradient(90deg, rgba(3, 2, 22, 1) 0%, rgba(2, 2, 25, 1) 46%, rgba(3, 3, 29, 1) 100%);
            background: -webkit-linear-gradient(90deg, rgba(3, 2, 22, 1) 0%, rgba(2, 2, 25, 1) 46%, rgba(3, 3, 29, 1) 100%);
            background: linear-gradient(90deg, rgba(3, 2, 22, 1) 0%, rgba(2, 2, 25, 1) 46%, rgba(3, 3, 29, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#030216", endColorstr="#03031d", GradientType=1);
        }
    </style>
    <x-navbar>

    </x-navbar>

    <header>
        <div class="container mx-auto">{{ $heading }}</div>
    </header>
    <main>

        <div class="container mx-auto">{{ $slot }}</div>

    </main>
    <div class="pt-40">
        <x-footer>
        </x-footer>
    </div>

</body>
