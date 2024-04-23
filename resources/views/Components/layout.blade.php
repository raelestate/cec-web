<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <title>Casino Español de Cebu, Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>

</head>

<body class="min-h-screen font-mono">
    <style>
        /* * {
            border: solid 1px red;
        } */

        body {
            background: rgb(14, 13, 40);
            background: -moz-linear-gradient(19deg, rgba(14, 13, 40, 1) 0%, rgba(48, 20, 125, 1) 52%, rgba(6, 6, 45, 1) 100%);
            background: -webkit-linear-gradient(19deg, rgba(14, 13, 40, 1) 0%, rgba(48, 20, 125, 1) 52%, rgba(6, 6, 45, 1) 100%);
            background: linear-gradient(19deg, rgba(14, 13, 40, 1) 0%, rgba(48, 20, 125, 1) 52%, rgba(6, 6, 45, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0e0d28", endColorstr="#06062d", GradientType=1);
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
