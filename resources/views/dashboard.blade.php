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
    <body 
        x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" 
        x-init="
            darkMode = JSON.parse(localStorage.getItem('darkMode')); 
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" 
        :class="font-sans antialiased {'dark text-bodydark bg-boxdark-2': darkMode === true}">

        @include('components.dashboard.preload')
        <div class="flex h-screen overflow-hidden">
            <!-- Sidebar -->
            @include('components.dashboard.sidebar')
            
            <!-- Main Content -->
            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                <!-- Header -->
                @include('components.dashboard.header')
                
                <!-- Page Content -->
                <main class="max-w-screen-2xl p-4 md:p-6 2xl:p-10 flex-1 bg-[#F1F5F9]">
                    @yield("content")
                </main>
            </div>
        </div>
    </body>
</html>