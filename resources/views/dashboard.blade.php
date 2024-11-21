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
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="flex h-screen">
            <!-- Sidebar -->
            @include('components.dashboard.sidebar')
            
            <!-- Main Content -->
            <div class="flex-1 flex flex-col">
                <!-- Header -->
                @include('components.dashboard.header')
                
                <!-- Page Content -->
                <main class="flex-1 p-6 bg-[#F1F5F9]">
                    @yield("content")
                </main>
            </div>
        </div>
    </body>
</html>