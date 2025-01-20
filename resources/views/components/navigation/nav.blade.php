<nav 
    x-data="{'sidebarToggle': false}"
    class="fixed top-0 z-999 w-screen"
>
    <div id="navigation" class="flex items-center justify-between bg-landing-brown-3/80 
        py-3 sm:py-3 md:py-3 lg:py-3 xl:py-3 2xl:py-5
        px-8 sm:px-8 md:px-12 lg:px-12 xl:px-12 2xl:px-13 
        mx-3 sm:mx-3 md:mx-10 lg:mx-10 xl:mx-12 2xl:mx-14 
        my-5 
        rounded-3xl sm:rounded-3xl md:rounded-3xl lg:rounded-3xl xl:rounded-3xl 2xl:rounded-[30px]
        transition-all duration-300"
    >
        <div class="cursor-pointer">
            <div class="">
                <Image src="{{ asset('assets/img/LogoAzwa.png') }}" alt="Brand" class="2xl:w-[110px] xl:w-[100px] lg:w-[100px] md:w-[100px] sm:w-[100px] w-[100px] h-auto" />
            </div>
        </div>
        <div class="hidden lg:block">
            <ul class="text-white flex space-x-12">
                <li class="">
                    <a class="2xl:text-xl xl:text-lg lg:text-lg md:text-lg sm:text-lg text-lg font-normal transition duration-300 ease-in-out 
                {{ request()->routeIs('home.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="">
                    <a class="2xl:text-xl xl:text-lg lg:text-lg md:text-lg sm:text-lg text-lg font-normal transition duration-300 ease-in-out 
                {{ request()->routeIs('about.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('about.index') }}">Tentang Kami</a>
                </li>
                <li class="">
                    <a class="2xl:text-xl xl:text-lg lg:text-lg md:text-lg sm:text-lg text-lg font-normal transition duration-300 ease-in-out 
                {{ request()->routeIs('project.index') || request()->routeIs('project-detail.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('project.index') }}">Portofolio</a>
                </li>
                <li class="group relative ">
                    <a class="2xl:text-xl xl:text-lg lg:text-lg md:text-lg sm:text-lg text-lg font-normal {{request()->routeIs('service.*') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }} cursor-pointer" href="#">Layanan</a>
                    <ul class="absolute mt-2 w-24 bg-landing-brown-3 shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                        <li class="py-3 cursor-pointer text-center {{request()->routeIs('service.desain') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}"><a href="{{route('service.desain')}}">Desain</a></li>
                        <li class="py-3 cursor-pointer text-center {{request()->routeIs('service.kontraktor') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}"><a href="{{route('service.kontraktor')}}">Kontraktor</a></li>
                        <li class="py-3 cursor-pointer text-center {{request()->routeIs('service.perizinan') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}"><a href="{{route('service.perizinan')}}">Perizinan</a></li>
                    </ul>
                </li>
                <li class="">
                    <a class="2xl:text-xl xl:text-lg lg:text-lg md:text-lg sm:text-lg text-lg font-normal transition duration-300 ease-in-out 
                {{ request()->routeIs('career.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('career.index') }}">Karir</a>
                </li>
                <li class="">
                    <a class="2xl:text-xl lg:text-lg font-normal transition duration-300 ease-in-out 
                {{ request()->routeIs('contact.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('contact.index') }}">Kontak</a>
                </li>
            </ul>
        </div>
        <div class="hidden lg:block w-[10px] h-[10px]"></div>
        <div class="block lg:hidden">
            <button @click.stop="sidebarToggle = true">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="white" d="M4 17.27v-1h16v1zm0-4.77v-1h16v1zm0-4.77v-1h16v1z"/></svg>
            </button>
        </div>
    </div>

    {{-- Responsive Mobile --}}
    <div 
        x-show="sidebarToggle" 
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 -translate-y-10"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-10" 
        class="fixed inset-0 z-40 w-screen h-screen bg-landing-brown-3 p-4"
    >
        <div class="fixed z-999">
            <button @click.stop="sidebarToggle = false">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="white" d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6z"/></svg>
            </button>
        </div>
        <div class="fixed inset-0 w-screen h-screen flex justify-center items-center">
            <div>
                <div class="py-10">
                    <ul class="text-white text-center space-y-6">
                        <li class="">
                            <a class="text-3xl font-normal transition duration-300 ease-in-out 
                        {{ request()->routeIs('home.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li class="">
                            <a class="text-3xl font-normal transition duration-300 ease-in-out 
                        {{ request()->routeIs('about.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('about.index') }}">Tentang Kami</a>
                        </li>
                        <li class="">
                            <a class="text-3xl font-normal transition duration-300 ease-in-out 
                        {{ request()->routeIs('project.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('project.index') }}">Portofolio</a>
                        </li>
                        <li class="" x-data="{ selected: null }">
                            <a class="text-3xl font-normal transition duration-300 ease-in-out 
                                {{ request()->routeIs('service.*') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href=""
                                @click.prevent="selected = (selected === 'layanan' ? null : 'layanan')"
                            >Layanan</a>
                            
                            {{-- Dropdown --}}
                            <div 
                                class="translate transform overflow-hidden mt-6"
                                :class="selected === 'layanan' ? 'block' : 'hidden'"
                            >
                                <ul class="text-3xl font-normal transition duration-300 ease-in-out space-y-6">
                                    <li>
                                        <a href="{{route('service.desain')}}" class="{{request()->routeIs('service.desain') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}">Desain</a>
                                    </li>
                                    <li>
                                        <a href="{{route('service.kontraktor')}}" class="{{request()->routeIs('service.kontraktor') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}">Kontraktor</a>
                                    </li>
                                    <li>
                                        <a href="{{route('service.perizinan')}}" class="{{request()->routeIs('service.perizinan') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}">Perizinan</a>
                                    </li>
                                </ul>
                            </div>                            
                        </li>
                        <li class="">
                            <a class="text-3xl font-normal transition duration-300 ease-in-out 
                        {{ request()->routeIs('career.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('career.index') }}">Karir</a>
                        </li>
                        <li class="">
                            <a class="text-3xl font-normal transition duration-300 ease-in-out 
                        {{ request()->routeIs('contact.index') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold' }}" href="{{ route('contact.index') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <div class="text-white flex space-x-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M20.9 2H3.1A1.1 1.1 0 0 0 2 3.1v17.8A1.1 1.1 0 0 0 3.1 22h9.58v-7.75h-2.6v-3h2.6V9a3.64 3.64 0 0 1 3.88-4a20 20 0 0 1 2.33.12v2.7H17.3c-1.26 0-1.5.6-1.5 1.47v1.93h3l-.39 3H15.8V22h5.1a1.1 1.1 0 0 0 1.1-1.1V3.1A1.1 1.1 0 0 0 20.9 2"/></svg>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm0 2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1M8 10a1 1 0 0 1 .993.883L9 11v5a1 1 0 0 1-1.993.117L7 16v-5a1 1 0 0 1 1-1m3-1a1 1 0 0 1 .984.821a6 6 0 0 1 .623-.313c.667-.285 1.666-.442 2.568-.159c.473.15.948.43 1.3.907c.315.425.485.942.519 1.523L17 12v4a1 1 0 0 1-1.993.117L15 16v-4c0-.33-.08-.484-.132-.555a.55.55 0 0 0-.293-.188c-.348-.11-.849-.052-1.182.09c-.5.214-.958.55-1.27.861L12 12.34V16a1 1 0 0 1-1.993.117L10 16v-6a1 1 0 0 1 1-1M8 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2"/></g></svg>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10.01 10.01 0 0 0 12 2m5.939 7.713v.646a.37.37 0 0 1-.38.37a5.36 5.36 0 0 1-2.903-1.108v4.728a3.94 3.94 0 0 1-1.18 2.81a4 4 0 0 1-2.87 1.17a4.1 4.1 0 0 1-2.862-1.17a3.98 3.98 0 0 1-1.026-3.805c.159-.642.48-1.232.933-1.713a3.58 3.58 0 0 1 2.79-1.313h.82v1.703a.348.348 0 0 1-.39.348a1.918 1.918 0 0 0-1.23 3.631c.27.155.572.246.882.267c.24.01.48-.02.708-.092a1.93 1.93 0 0 0 1.313-1.816V5.754a.36.36 0 0 1 .359-.36h1.415a.36.36 0 0 1 .359.34a3.3 3.3 0 0 0 1.282 2.245a3.25 3.25 0 0 0 1.641.636a.37.37 0 0 1 .338.35z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navigation = document.getElementById('navigation');
        document.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                // Ubah ke warna solid (tanpa transparansi)
                navigation.classList.add('bg-landing-brown-3');
                navigation.classList.remove('bg-landing-brown-3/80');
            } else {
                // Ubah ke warna transparan
                navigation.classList.add('bg-landing-brown-3/80');
                navigation.classList.remove('bg-landing-brown-3');
            }
        });
    });
</script>