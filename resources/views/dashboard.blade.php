<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard Azwa Design</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/img/HeadLogo_Azwa.png') }}" sizes="32x32">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body 
        x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
        x-init="
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark text-bodydark bg-landing-brown-3': darkMode === true}"
    >

        @include('components.dashboard.preload')
        <div class="flex h-screen overflow-hidden">
            <!-- Sidebar -->
            @include('components.dashboard.sidebar')
            
            <!-- Main Content -->
            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                <!-- Header -->
                @include('components.dashboard.header')
                
                <!-- Page Content -->
                <main class="max-w-screen-2xl p-4 md:p-6 2xl:p-10 flex-1">
                    @yield("content")
                </main>
            </div>
        </div>
        @include('sweetalert::alert')
    </body>
</html>