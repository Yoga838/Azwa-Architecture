<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-end space-x-4 h-20">
            <div class="">
                <div class="flex items-center">
                    <label for="toggle" class="flex items-center cursor-pointer">
                        <!-- Toggle Background -->
                        <div class="relative">
                            <input type="checkbox" id="toggle" class="sr-only peer">
                            <div class="w-10 h-5 bg-gray-300 rounded-full peer-checked:bg-blue-500 transition"></div>
                            <!-- Toggle Knob -->
                            <div class="absolute top-0.5 left-0.5 w-4 h-4 bg-white rounded-full shadow-md peer-checked:translate-x-5 transition">
                                <svg class="peer-checked:hidden" xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 24 24"><path fill="black" d="M12 16q-1.671 0-2.835-1.164Q8 13.67 8 12t1.165-2.835T12 8t2.836 1.165T16 12t-1.164 2.836T12 16m-7-3.5H1.5v-1H5zm17.5 0H19v-1h3.5zM11.5 5V1.5h1V5zm0 17.5V19h1v3.5zM6.746 7.404l-2.16-2.098l.695-.745l2.111 2.135zM18.72 19.439l-2.117-2.141l.652-.702l2.16 2.098zM16.596 6.745l2.098-2.16l.745.695l-2.135 2.111zM4.562 18.72l2.14-2.117l.664.652l-2.08 2.179z"/></svg>
                                <svg class="hidden peer-checked:block" xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 24 24"><path fill="black" d="M12 21q-3.75 0-6.375-2.625T3 12t2.625-6.375T12 3q.35 0 .688.025t.662.075q-1.025.725-1.638 1.888T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q1.375 0 2.525-.613T20.9 10.65q.05.325.075.662T21 12q0 3.75-2.625 6.375T12 21m0-2q2.2 0 3.95-1.213t2.55-3.162q-.5.125-1 .2t-1 .075q-3.075 0-5.238-2.163T9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.163 2.55T5 12q0 2.9 2.05 4.95T12 19m-.25-6.75"/></svg>
                            </div>
                        </div>
                    </label>
                </div>                
            </div>
            <div class="flex items-center">
                <div class="me-3">
                    <h2 class="text-black text-end text-[14px] font-semibold">Admin Azwa</h2>
                    <h5 class="text-black text-end text-[12px]">Arul</h5>
                </div>
                <div class="relative group">
                    <!-- Profil Button -->
                    <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                    </button>
                
                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 z-10 mt-2 hidden w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none group-hover:block">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
