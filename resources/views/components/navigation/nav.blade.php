<nav class="fixed top-0 z-50 w-full">
    <div class="flex items-center justify-between bg-white py-6 px-[40px]">
        <div class="cursor-pointer">
            <div class="w-auto h-auto bg-[#515151] px-[20px] py-[8px] rounded-lg">
                <Image src="{{ asset('assets/img/LogoAzwa.png') }}" alt="Brand" class="w-[80px] h-auto" />
            </div>
        </div>
        <div class="">
            <ul class="flex space-x-8">
                <li class="">
                    <a class="text-lg text-black font-normal transition duration-300 ease-in-out hover:font-bold hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('about.index') ? 'font-bold underline underline-offset-[8px]' : 'hover:text-gray-700' }}" href="{{ route('about.index') }}">About</a>
                </li>
                <li class="">
                    <a class="text-lg text-black font-normal transition duration-300 ease-in-out hover:font-bold hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('project.index') ? 'font-bold underline underline-offset-[8px]' : 'hover:text-gray-700' }}" href="{{ route('project.index') }}">Projects</a>
                </li>
                <li class="">
                    <a class="text-lg text-black font-normal transition duration-300 ease-in-out hover:font-bold hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('service.index') ? 'font-bold underline underline-offset-[8px]' : 'hover:text-gray-700' }}" href="{{ route('service.index') }}">Services</a>
                </li>
                <li class="">
                    <a class="text-lg text-black font-normal transition duration-300 ease-in-out hover:font-bold hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('insight.index') ? 'font-bold underline underline-offset-[8px]' : 'hover:text-gray-700' }}" href="{{ route('insight.index') }}">Insights</a>
                </li>
                <li class="">
                    <a class="text-lg text-black font-normal transition duration-300 ease-in-out hover:font-bold hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('career.index') ? 'font-bold underline underline-offset-[8px]' : 'hover:text-gray-700' }}" href="{{ route('career.index') }}">Career</a>
                </li>
                <li class="">
                    <a class="text-lg text-black font-normal transition duration-300 ease-in-out hover:font-bold hover:underline hover:underline-offset-[8px] 
                {{ request()->routeIs('contact.index') ? 'font-bold underline underline-offset-[8px]' : 'hover:text-gray-700' }}" href="{{ route('contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-linecap="round" stroke-width="1.5" d="M4 7h3m13 0h-9m9 10h-3M4 17h9m-9-5h16"/></svg>
        </div>
    </div>
</nav>