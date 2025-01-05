<aside 
    :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-landing-brown-3 duration-300 ease-linear dark:bg-landing-black-1 lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false"
>
    <div class="cursor-pointer flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <img src="{{ asset('assets/img/LogoAzwa.png') }}" alt="Brand" class="w-[125px] h-auto" />
        <button
            class="block lg:hidden"
            @click.stop="sidebarToggle = !sidebarToggle"
        >
            <svg
                class="fill-current"
                width="20"
                height="18"
                viewBox="0 0 20 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                    fill="gray"
                />
            </svg>
        </button>
    </div>
    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{ selected: null }">
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-landing-body">MENU</h3>
                <ul class="mb-6 flex flex-col gap-1.5">
                    {{-- Dashboard --}}
                    <li>
                        <a 
                            href="#" 
                            class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-landing-brown-1 dark:hover:bg-landing-brown-3"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.557 2.75H4.682A1.93 1.93 0 0 0 2.75 4.682v3.875a1.94 1.94 0 0 0 1.932 1.942h3.875a1.94 1.94 0 0 0 1.942-1.942V4.682A1.94 1.94 0 0 0 8.557 2.75m10.761 0h-3.875a1.94 1.94 0 0 0-1.942 1.932v3.875a1.943 1.943 0 0 0 1.942 1.942h3.875a1.94 1.94 0 0 0 1.932-1.942V4.682a1.93 1.93 0 0 0-1.932-1.932m0 10.75h-3.875a1.94 1.94 0 0 0-1.942 1.933v3.875a1.94 1.94 0 0 0 1.942 1.942h3.875a1.94 1.94 0 0 0 1.932-1.942v-3.875a1.93 1.93 0 0 0-1.932-1.932M8.557 13.5H4.682a1.943 1.943 0 0 0-1.932 1.943v3.875a1.93 1.93 0 0 0 1.932 1.932h3.875a1.94 1.94 0 0 0 1.942-1.932v-3.875a1.94 1.94 0 0 0-1.942-1.942"/></svg>
                            Dashboard
                        </a>
                    </li>

                    {{-- Menu 1 --}}
                    <li>
                        <a 
                            href="#" 
                            class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-landing-brown-1 dark:hover:bg-landing-brown-3"
                            @click.prevent="selected = (selected === 'Menu 1' ? null : 'Menu 1')"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M6 5a2 2 0 0 1 2-2h4.157a2 2 0 0 1 1.656.879L15.249 6H19a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2v-5a3 3 0 0 0-3-3h-3.22l-1.14-1.682A3 3 0 0 0 9.157 6H6z"/><path d="M3 9a2 2 0 0 1 2-2h4.157a2 2 0 0 1 1.656.879L12.249 10H3zm0 3v7a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-7z"/></g></svg>
                            Portofolio
                            <svg
                                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': selected === 'Menu 1' }"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill=""
                                />
                            </svg>
                        </a>
                        <!-- Dropdown Menu -->
                        <div 
                            class="translate transform overflow-hidden"
                            :class="selected === 'Menu 1' ? 'block' : 'hidden'"
                        >
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a
                                        class="group relative flex items-center gap-3 rounded-md px-4 font-medium text-gray-200 duration-300 ease-in-out hover:text-white"
                                        href="{{route('show.portofolio')}}"
                                    >
                                        Daftar/List Portofolio
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="group relative flex items-center gap-3 rounded-md px-4 font-medium text-gray-200 duration-300 ease-in-out hover:text-white"
                                        href="{{route('show-store.portofolio')}}"
                                    >
                                        Buat Portofolio
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- Menu 2 --}}
                    <li>
                        <a 
                            href="#" 
                            class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-landing-brown-1 dark:hover:bg-landing-brown-3"
                            @click.prevent="selected = (selected === 'Menu 2' ? null : 'Menu 2')"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M18.045 3.007L12.31 3a1.97 1.97 0 0 0-1.4.585l-7.33 7.394a2 2 0 0 0 0 2.805l6.573 6.631a1.96 1.96 0 0 0 1.4.585a1.97 1.97 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 21 11.479v-5.5a2.97 2.97 0 0 0-2.955-2.972m-2.452 6.438a1 1 0 1 1 0-2a1 1 0 0 1 0 2"/></svg>
                            Promo
                            <svg
                                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': selected === 'Menu 2' }"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill=""
                                />
                            </svg>
                        </a>
                        <!-- Dropdown Menu -->
                        <div 
                            class="translate transform overflow-hidden"
                            :class="selected === 'Menu 2' ? 'block' : 'hidden'"
                        >
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a
                                        class="group relative flex items-center gap-3 rounded-md px-4 font-medium text-gray-200 duration-300 ease-in-out hover:text-white"
                                        href="{{route('show.promo')}}"
                                    >
                                        Daftar/List Promo
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="group relative flex items-center gap-3 rounded-md px-4 font-medium text-gray-200 duration-300 ease-in-out hover:text-white"
                                        href="{{route('show-store.promo')}}"
                                    >
                                        Buat Promo
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- Menu 3 --}}
                    <li>
                        <a 
                            href="#" 
                            class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-landing-brown-1 dark:hover:bg-landing-brown-3"
                            @click.prevent="selected = (selected === 'Menu 3' ? null : 'Menu 3')"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-6.616l-2.88 2.592C8.537 20.461 7 19.776 7 18.477V17H5a2 2 0 0 1-2-2zm4 2a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2zm8 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm-8 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm5 0a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2z" clip-rule="evenodd"/></svg>
                            Testimoni
                            <svg
                                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': selected === 'Menu 3' }"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill=""
                                />
                            </svg>
                        </a>
                        <!-- Dropdown Menu -->
                        <div 
                            class="translate transform overflow-hidden"
                            :class="selected === 'Menu 3' ? 'block' : 'hidden'"
                        >
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a
                                        class="group relative flex items-center gap-3 rounded-md px-4 font-medium text-gray-200 duration-300 ease-in-out hover:text-white"
                                        href="#"
                                    >
                                        Daftar/List Testimoni
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="group relative flex items-center gap-3 rounded-md px-4 font-medium text-gray-200 duration-300 ease-in-out hover:text-white"
                                        href="#"
                                    >
                                        Upload Testimoni
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</aside>
