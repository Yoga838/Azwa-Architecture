<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Azwa Design Studio</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- Swipper Carousel --}}
        <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-landing-body overflow-x-hidden">
        <div class="flex flex-col min-h-screen">
            @include("components.navigation.nav")
            <main class="flex-grow w-screen h-auto">
                @yield("content")
            </main>
            @include("components.footer.footer")
        </div>
    </body>
    {{-- Swipper Carousel --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</html>