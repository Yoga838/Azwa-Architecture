<nav class="fixed top-0 z-50 w-screen">
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
                {{ request()->routeIs('about.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('about.index') }}">About Us</a>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('project.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('project.index') }}">Portofolio</a>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('service.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('service.index') }}">Services</a>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('insight.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('insight.index') }}">Insights</a>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('career.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('career.index') }}">Career</a>
                </li>
                <li class="">
                    <a class="text-lg text-white font-normal transition duration-300 ease-in-out hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('contact.index') ? 'text-landing-gold font-medium underline underline-offset-[8px]' : 'hover:text-landing-gold' }}" href="{{ route('contact.index') }}">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="hidden lg:block w-[10px] h-[10px]"></div>
        <div class="block lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-linecap="round" stroke-width="1.5" d="M4 7h3m13 0h-9m9 10h-3M4 17h9m-9-5h16"/></svg>
        </div>
    </div>
</nav>