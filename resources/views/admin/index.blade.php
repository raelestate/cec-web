<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <title>CEC - ADMIN</title>
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
    <div class="container mx-auto p-5">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="/images/CEC_LOGO_WHITE.png" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-lime-50">CEC - ADMIN Login
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-lime-50">Username</label>
                        <div class="mt-2">
                            <input id="username" name="username" type="username" autocomplete="username" required
                                class="block w-full rounded-md border-0 py-1.5 text-lime-50 shadow-sm ring-1 ring-inset ring-lime-50 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-lime-50">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md border-0 py-1.5 text-lime-50 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-lime-50 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                            in</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
