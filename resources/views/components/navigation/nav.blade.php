<nav 
    x-data="{'sidebarToggle': false}"
    class="fixed top-0 z-50 w-screen"
>
    <div class="flex items-center justify-between bg-landing-brown-3 py-3 px-[50px] my-5 mx-10 rounded-3xl">
        <div class="cursor-pointer">
            <div class="">
                <Image src="{{ asset('assets/img/LogoAzwa.png') }}" alt="Brand" class="w-[100px] h-auto" />
            </div>
        </div>
        <div class="hidden lg:block">
            <ul class="flex space-x-12">
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('home.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('about.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('about.index') }}">Tentang Kami</a>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('project.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('project.index') }}">Portofolio</a>
                </li>
                <li class="group relative ">
                    <a class="text-lg text-white font-normal {{request()->routeIs('service.*') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }} cursor-pointer" href="#">Layanan</a>
                    <ul class="absolute mt-2 w-24 bg-landing-brown-3 text-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                        <li class="py-3 cursor-pointer text-center {{request()->routeIs('service.desain') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}"><a href="{{route('service.desain')}}">Desain</a></li>
                        <li class="py-3 cursor-pointer text-center {{request()->routeIs('service.kontraktor') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}"><a href="{{route('service.kontraktor')}}">Kontraktor</a></li>
                        <li class="py-3 cursor-pointer text-center {{request()->routeIs('service.perizinan') ? 'text-landing-gold font-medium' : 'hover:text-landing-gold'}}"><a href="{{route('service.perizinan')}}">Perizinan</a></li>
                    </ul>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('career.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('career.index') }}">Karir</a>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('contact.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('contact.index') }}">Kontak</a>
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
                    <ul class="text-center space-y-6">
                        <li class="">
                            <a class="text-3xl text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                        {{ request()->routeIs('home.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li class="">
                            <a class="text-3xl text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                        {{ request()->routeIs('about.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('about.index') }}">Tentang Kami</a>
                        </li>
                        <li class="">
                            <a class="text-3xl text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                        {{ request()->routeIs('project.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('project.index') }}">Portofolio</a>
                        </li>
                        <li class="">
                            <a class="text-3xl text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                        {{ request()->routeIs('service.desain') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('service.desain') }}">Layanan</a>
                        </li>
                        <li class="">
                            <a class="text-3xl text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                        {{ request()->routeIs('career.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('career.index') }}">Karir</a>
                        </li>
                        <li class="">
                            <a class="text-3xl text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                        {{ request()->routeIs('contact.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('contact.index') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <div class="flex space-x-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="white" d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"/></svg>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="white" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.2 4.2 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.52 8.52 0 0 1-5.33 1.84q-.51 0-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23"/></svg>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="white" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>