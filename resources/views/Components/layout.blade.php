<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Casino Español de Cebu</title>
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
            background: rgb(26, 25, 51);
            background: -moz-linear-gradient(338deg, rgba(26, 25, 51, 1) 0%, rgba(32, 57, 83, 1) 33%, rgba(0, 53, 93, 1) 72%, rgba(6, 6, 45, 1) 100%);
            background: -webkit-linear-gradient(338deg, rgba(26, 25, 51, 1) 0%, rgba(32, 57, 83, 1) 33%, rgba(0, 53, 93, 1) 72%, rgba(6, 6, 45, 1) 100%);
            background: linear-gradient(338deg, rgba(26, 25, 51, 1) 0%, rgba(32, 57, 83, 1) 33%, rgba(0, 53, 93, 1) 72%, rgba(6, 6, 45, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#1a1933", endColorstr="#06062d", GradientType=1);
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
