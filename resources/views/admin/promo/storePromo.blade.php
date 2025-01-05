@extends('dashboard')

@section('content')
    
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Input Promo
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="index.html">Promo /</a>
                </li>
                <li class="font-medium text-primary">Buat Promo</li>
            </ol>
        </nav>
    </div>

    <div class="grid grid-cols-1 gap-9">
        <div class="flex flex-col gap-9">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Input Fields
                    </h3>
                </div>
                <div class="flex flex-col gap-5.5 p-6.5">
                    <div class="title">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Title
                        </label>
                        <input type="text" placeholder="Title Input" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                    </div>
                    <div class="price">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Price
                        </label>
                        <input type="text" placeholder="Price Input" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                    </div>
                    <div class="actual-price">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Actual Price
                        </label>
                        <input type="text" placeholder="Actual price Input" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                    </div>
                    <div class="description">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Description
                        </label>
                        <textarea rows="6" placeholder="Default textarea" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"></textarea>
                    </div>
                    <div class="ondisplay">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Status Display
                        </label>
                        <div x-data="{ switcherToggle: false }">
                            <label for="toggle3" class="flex cursor-pointer select-none items-center">
                                <div class="relative">
                                    <input type="checkbox" id="toggle3" class="sr-only" @change="switcherToggle = !switcherToggle"/>
                                    <div class="block h-8 w-14 rounded-full bg-meta-9 dark:bg-[#5A616B]"></div>
                                    <div :class="switcherToggle && '!right-1 !translate-x-full !bg-primary dark:!bg-white'" class="dot absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full bg-white transition">
                                        <span :class="switcherToggle && '!block'" class="hidden text-white dark:text-bodydark">
                                            <svg
                                                class="fill-current stroke-current"
                                                width="11"
                                                height="8"
                                                viewBox="0 0 11 8"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                fill=""
                                                stroke=""
                                                stroke-width="0.4"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span :class="switcherToggle && 'hidden'">
                                            <svg
                                                class="h-4 w-4 stroke-current"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"
                                                ></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </label>
                            <div class="mt-3 text-sm font-medium w-30 py-1 text-center border-[1px] border-gray-600 dark:border-white rounded-full">
                                <span x-show="switcherToggle" class="text-green-600">ondisplay</span>
                                <span x-show="!switcherToggle" class="text-red-600">offdisplay</span>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </div>

@endsection