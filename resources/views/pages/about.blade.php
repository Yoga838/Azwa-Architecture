<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <!-- <body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-[#E8E5E1]">
        @include("components.navigation.nav")
    </body> -->
    <body class="font-sans antialiased bg-[#E8E5E1]">
        @include("components.navigation.nav")

        <div class="grid grid-cols-5 gap-4 mt-96 mx-14">
            <div class="col-start-1 col-end-2 ...">Introduction</div>
            <div class="col-end-5 col-span-2 ...">ETERLINE represents the eternal line, a timeless connection between form and function. We create enduring spaces that resonate with the human experience and integrate harmoniously into the immersive design.</div>
        </div>
    </body>
</html>