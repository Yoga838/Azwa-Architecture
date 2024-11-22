<header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
    <div class="flex flex-grow justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <button
                class="z-99999 block rounded-sm border border-stroke bg-white p-1 shadow-sm dark:border-black dark:bg-white lg:hidden"
                @click.stop="sidebarToggle = !sidebarToggle"
            >
            <span class="relative block h-5 w-5 cursor-pointer">
              <span class="du-block absolute right-0 h-full w-full">
                <span
                  class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-black"
                  :class="{ '!w-full delay-300': !sidebarToggle }"
                ></span>
                <span
                  class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-black"
                  :class="{ '!w-full delay-400': !sidebarToggle }"
                ></span>
                <span
                  class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-black"
                  :class="{ '!w-full delay-500': !sidebarToggle }"
                ></span>
              </span>
              <span class="du-block absolute right-0 h-full w-full rotate-45">
                <span
                  class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-black"
                  :class="{ '!h-0 delay-[0]': !sidebarToggle }"
                ></span>
                <span
                  class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-black"
                  :class="{ '!h-0 dealy-200': !sidebarToggle }"
                ></span>
              </span>
            </span>
          </button>
        </div>
        <div class="w-[20px] h-[20px]"></div>
        <div class="flex items-center space-x-4 h-10">
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
