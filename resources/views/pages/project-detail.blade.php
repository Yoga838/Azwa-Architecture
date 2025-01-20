@extends("landing")

@section('content')
    <style>
        .swiper-pagination-bullet {
            background: #5d4e40;
        }
        .swiper-pagination-bullet-active {
            background: #5d4e40 !important;
        }
    </style>

    <div class="2xl:mt-30 xl:mt-20 lg:mt-20 md:mt-20 mt-10 2xl:mx-30 xl:mx-20 lg:mx-20 md:mx-20 mx-10">
        <div class="py-30">
            <div class="w-full h-full mb-20">

                {{-- Line Horizontal --}}
                <div class="h-1 w-full bg-theme2"></div>
                <div class="flex md:flex-row flex-col">
                    <div class="md:w-1/3 w-full md:p-5 p-3 flex md:flex-col flex-row md:justify-start justify-between">
                        <div class="mb-3">
                            <p class="2xl:text-2xl xl:text-xl lg:text-xl md:text-xl text-lg font-bold text-theme2">Tahun :</p>
                            <p class="2xl:text-lg xl:text-base lg:text-base md:text-base text-base text-theme2 ">{{ $portofolio->date }}</p>
                        </div>
                        <div>
                            <p class="2xl:text-2xl xl:text-xl lg:text-xl md:text-xl text-lg font-bold text-theme2">Kategori :</p>
                            <p class="2xl:text-lg xl:text-base lg:text-base md:text-base text-base text-theme2">
                                {{ $portofolio->category ? $portofolio->category : '(Tidak dikategorikan)' }}
                            </p>
                        </div>
                    </div>

                    {{-- Line Vertical --}}
                    <div class="h-auto w-1 bg-theme2 sm:hidden md:block"></div>
                    <div class="h-1 w-auto bg-theme2 sm:block md:hidden"></div>

                    <div class="md:w-2/3 w-full md:p-5 p-3">
                        <h1 class="2xl:text-2xl xl:text-xl lg:text-xl md:text-xl text-xl font-bold mb-5 text-theme2 uppercase">{{ $portofolio->name }}</h1>
                        <div>
                            <div class="mb-4 h-[550px]">
                                <img src="{{ asset('storage/' . $portofolio->fotos->first()->path) }}" class="w-full h-full object-cover" />
                            </div>
                            <div class="columns-4 md:mb-8 mb-3">
                                @foreach ($portofolio->fotos->skip(1)->take(4) as $porto)
                                    <div class="w-[195px] h-[100px]">
                                        <img src="{{ asset('storage/' . $porto->path) }}" class="w-full h-full object-cover" />
                                    </div>
                                @endforeach
                                {{-- <img src="{{ asset('assets/img/Enscape.png') }}" class="w-full h-full" />
                                <img src="{{ asset('assets/img/Enscape.png') }}" class="w-full h-full" />
                                <img src="{{ asset('assets/img/Enscape.png') }}" class="w-full h-full" />
                                <img src="{{ asset('assets/img/Enscape.png') }}" class="w-full h-full" /> --}}
                            </div>
                            <div class="flex md:flex-row flex-col md:space-x-10 space-x-0">
                                <div class="flex md:flex-col flex-row md:justify-normal justify-between md:mb-0 mb-3">
                                    <div>
                                        <p class="2xl:text-xl xl:text-lg lg:text-lg md:text-lg text-lg font-bold text-theme2">Area</p>
                                        <p class="2xl:text-lg xl:text-base lg:text-base md:text-base text-base text-theme2">
                                            {{ $portofolio->luas }} sqm
                                        </p>
                                    </div>
                                    <div class="md:my-3 my-0">
                                        <p class="2xl:text-xl xl:text-lg lg:text-lg md:text-lg text-lg font-bold text-theme2">Tipe</p>
                                        <p class="2xl:text-lg xl:text-base lg:text-base md:text-base text-base text-theme2">
                                            {{ $portofolio->type ? $portofolio->type : '(Tidak ada tipe)' }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="2xl:text-xl xl:text-lg lg:text-lg md:text-lg text-lg font-bold text-theme2">Kontraktor</p>
                                        <p class="2xl:text-lg xl:text-base lg:text-base md:text-base text-base text-theme2">
                                            {{ $portofolio->kontraktor ? $portofolio->kontraktor : '(Tidak ada kontraktor)' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="text-justify">
                                    <p class="2xl:text-lg xl:text-base lg:text-base md:text-base text-base text-theme2">
                                        {{ $portofolio->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <h1 class="2xl:text-3xl xl:text-2xl lg:text-2xl md:text-2xl text-2xl font-bold mb-5 text-theme2">Portofolio Relevan</h1>
                </div>
                <div class="flex md:flex-row flex-col md:space-x-5 space-x-0">
                    @foreach ( $relatedPortofolio as $porto )
                        <div class="relative w-full h-full mb-4 group">
                            <div class="rounded-2xl md:h-65 h-45">
                                <img src="{{ asset('storage/' . $porto->fotos->first()->path) }}" class="w-full h-full object-cover rounded-2xl" />
                            </div>
                            <div class="rounded-2xl p-4 absolute inset-0 bg-white bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="text-theme3">
                                    <div class="w-full h-full transform translate-y-5 group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="lg:text-2xl text-xl">{{ $porto->category }}</p>
                                        <div class="absolute inset-0 flex justify-center items-center w-full h-full">
                                            <span>
                                                <p class="mb-2 lg:text-3xl md:text-2xl text-xl font-bold">{{ $porto->name }}</p>
                                                <div class="">
                                                    <span class="flex items-center space-x-2 mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7"/></svg>
                                                        <p class="lg:text-2xl text-xl">{{ $porto->date }}</p>
                                                    </span>
                                                    <span class="flex items-center space-x-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 100 100"><path fill="currentColor" d="M76.647 30.353a2 2 0 0 1-2-2v-3h-3a2 2 0 0 1 0-4h5a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2m-13.659-5h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-17.318 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-22.317 5a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h5a2 2 0 0 1 0 4h-3v3a2 2 0 0 1-2 2m0 34.635a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m0-17.318a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m5 30.977h-5a2 2 0 0 1-2-2v-5a2 2 0 0 1 4 0v3h3a2 2 0 0 1 0 4m34.635 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-17.318 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m30.977 0h-5a2 2 0 0 1 0-4h3v-3a2 2 0 0 1 4 0v5a2 2 0 0 1-2 2m0-13.659a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m0-17.318a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2"/><path fill="currentColor" d="M90.216 92.216H9.784a2 2 0 0 1-2-2V9.784a2 2 0 0 1 2-2h80.432a2 2 0 0 1 2 2v80.432a2 2 0 0 1-2 2m-78.432-4h76.432V11.784H11.784z"/></svg>
                                                        <p class="lg:text-2xl text-xl">{{ $porto->luas }}</p>
                                                    </span>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full mt-15 mb-10">
                <div class="h-1 w-full bg-theme2"></div>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper mb-15">
                    @foreach ( $allportofolio as $porto )
                        <div class="swiper-slide">
                            <div class="rounded-2xl md:w-50 w-full h-50 flex justify-center items-center overflow-hidden">
                                <img src="{{ asset('storage/' . $porto->fotos->first()->path) }}" alt="Slide" class="w-full h-full object-cover rounded-2xl">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="flex justify-center mt-2">
                <div class="border bg-landing-brown-1 px-8 py-2 rounded-full">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                            <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                        </svg>
                        <h1>Follow us!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.swiper', {
                centeredSlides: true,
                spaceBetween: 60,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                loop: true,

                breakpoints: {
                    // Extra large screens (1920px and above)
                    1920: {
                        slidesPerView: 7,
                        spaceBetween: 40,
                    },
                    // Large screens (desktop, 1440px and above)
                    1536: {
                        slidesPerView: 6,
                        spaceBetween: 35,
                    },
                    // Medium screens (desktop, 1366px and above)
                    1280: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                    // Small screens (large tablets and small desktops, 1024px and above)
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    // Small tablets (768px and above)
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    // Extra small screens (mobile phones, 576px and above)
                    576: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    }
                }
            });
        });
    </script>

@endsection