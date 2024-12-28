@extends("landing")

@section("content")
    <style>
        .swiper-wrapper {
            width: 100%;
            height: max-content !important;
            padding-bottom: 64px !important;
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
            position: relative;
        }
        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #5d4e40 !important;
        }
    </style>
    {{-- Arsitektur --}}
    <div class="pt-15 w-full h-full flex items-center relative">
        <div class="absolute z-[-1] w-full h-[400px] overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="{{asset('assets/img/service/desain/bg1-servicedesain.jpg')}}" alt="" class="w-screen h-full object-cover">
        </div>
        <div class="py-10 mt-30">
            <h1 class="font-bold text-5xl text-theme1 drop-shadow-2 ml-20 tracking-wider">Arsitektur</h1>
        </div>
    </div>
    {{-- Card Arsitektur --}}
    <div class="flex flex-wrap justify-center gap-4">
        {{-- 1 --}}
        <div class="relative">
            <div class="border-0 w-[300px] lg:w-[500px] md:w-[300px] sm:w-[300px] h-[500px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 font-extrabold lg:text-4xl text-lg text-landing-gold">BRONZE</h1>
                    <h1 class="font-medium lg:text-4xl text-lg text-landing-gold tracking-wider">100.000 / M2</h1>
                </div>
                <div class="lg:mx-10 md:mx-10 mx-5 mt-10">
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DENAH 2D DAN 3D (2X REVISI)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D RENDER EKSTERIOR (ALL VIEW & 2X REVISI)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA ARSITEKTUR</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA STRUKTUR</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA MEP</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">UPAH KERJA & MATERIAL</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 border-0 px-5 py-5 w-full rounded-full bg-theme2">
                <h1 class="text-white font-bold text-center">PILIH PAKET</h1>
            </div>
        </div>

        {{-- 2 --}}
        <div class="relative">
            <div class="border-0 w-[300px] lg:w-[500px] md:w-[300px] sm:w-[300px] h-[500px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 font-extrabold lg:text-4xl text-lg text-landing-gold">GOLD</h1>
                    <h1 class="font-medium lg:text-4xl text-lg text-landing-gold tracking-wider">150.000 / M2</h1>
                </div>
                <div class="lg:mx-10 md:mx-10 mx-5 mt-10">
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DENAH 2D DAN 3D (2X REVISI)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D RENDER EKSTERIOR (ALL VIEW & 2X REVISI)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">LAYOUT PRESENTATION + 3D MODEL</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA ARSITEKTUR</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA STRUKTUR</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA MEP</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">UPAH KERJA & MATERIAL</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">VIDEO 3D</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DOKUMEN HARDFILE DAN SOFTFILE</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 border-0 px-5 py-5 w-full rounded-full bg-theme2">
                <h1 class="text-white font-bold text-center">PILIH PAKET</h1>
            </div>
        </div>
    </div>


    {{-- Desain Interior --}}
    <div class="mt-50 w-full h-full flex items-center relative">
        <div class="absolute z-[-1] w-full h-[400px] overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="{{asset('assets/img/service/desain/bg2-servicedesain.png')}}" alt="" class="w-screen object-cover h-full" style="object-position: 50% 85%;">
        </div>
        <div class="py-10 mt-30">
            <h1 class="font-bold text-5xl text-theme1 drop-shadow-2 ml-20 tracking-wider">Desain Interior</h1>
        </div>
    </div>
    {{-- Card Desain Interior --}}
    <div class="flex flex-wrap justify-center gap-4">
        {{-- 1 --}}
        <div class="relative">
            <div class="border-0 w-[300px] lg:w-[370px] sm:w-[300px] h-[500px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 font-extrabold lg:text-4xl text-lg text-landing-gold">DELUXE</h1>
                    <h1 class="font-medium lg:text-4xl text-lg text-landing-gold tracking-wider">150.000 / M2</h1>
                </div>
                <div class="lg:mx-10 md:mx-10 mx-5 mt-10">
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">LAYOUT DENAH 2D</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D RENDER INTERIOR (ALL VIEW)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DETAIL INTERIOR (GAMBAR KERJA & SPESIFIKASI MATERIAL)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D MOODBOARD</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 border-0 px-5 py-5 w-full rounded-full bg-theme2">
                <h1 class="text-white font-bold text-center">PILIH PAKET</h1>
            </div>
        </div>

        {{-- 2 --}}
        <div class="relative">
            <div class="border-0 w-[300px] lg:w-[370px] sm:w-[300px] h-[500px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 font-extrabold lg:text-4xl text-lg text-landing-gold">PREMIUM</h1>
                    <h1 class="font-medium lg:text-4xl text-lg text-landing-gold tracking-wider">200.000 / M2</h1>
                </div>
                <div class="lg:mx-10 md:mx-10 mx-5 mt-10">
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">LAYOUT DENAH 2D</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D RENDER INTERIOR (ALL VIEW)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DETAIL INTERIOR (GAMBAR KERJA & SPESIFIKASI MATERIAL)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D MOODBOARD</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D VIDEO RENDER (TOUR VIEW)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DOKUMEN HARDFILE DAN SOFTFILE</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 border-0 px-5 py-5 w-full rounded-full bg-theme2">
                <h1 class="text-white font-bold text-center">PILIH PAKET</h1>
            </div>
        </div>
    </div>

    {{-- Arsitektur Interior --}}
    <div class="mt-50 w-full h-full flex items-center relative">
        <div class="absolute z-[-1] w-full h-[400px] overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="{{asset('assets/img/service/desain/bg3left-servicedesain.png')}}" alt="" class="w-screen object-cover h-full" style="object-position: 50% 85%;">
        </div>
        <div class="py-10 mt-30">
            <h1 class="font-bold text-5xl text-theme1 drop-shadow-2 ml-20 tracking-wider">Arsitektur Interior</h1>
        </div>
    </div>
    {{-- Card Desain Interior --}}
    <div class="flex flex-wrap justify-center gap-4">
        {{-- 1 --}}
        <div class="relative">
            <div class="border-0 w-[300px] lg:w-[500px] md:w-[300px] sm:w-[300px] h-[700px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 font-extrabold lg:text-4xl text-lg text-landing-gold">PLATINUM</h1>
                    <h1 class="font-medium lg:text-4xl text-lg text-landing-gold tracking-wider">250.000 / M2</h1>
                </div>
                <div class="lg:mx-10 md:mx-10 mx-5 mt-10">
                    <h3 class="text-white font-semibold">ARSITEKTUR :</h3>
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DENAH 2D DAN 3D (2X REVISI)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D RENDER EKSTERIOR (ALL VIEW & 2X REVISI)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA ARSITEKTUR</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA STRUKTUR</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA MEP</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">UPAH KERJA & MATERIAL</p>
                        </li>
                    </ul>
                    <h3 class="mt-5 text-white font-semibold">INTERIOR :</h3>
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D RENDER INTERIOR (ALL VIEW)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA & SPESIFIKASI MATERIAL</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D MOODBOARD</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 border-0 px-5 py-5 w-full rounded-full bg-theme2">
                <h1 class="text-white font-bold text-center">PILIH PAKET</h1>
            </div>
        </div>

        {{-- 2 --}}
        <div class="relative">
            <div class="border-0 w-[300px] lg:w-[500px] md:w-[300px] sm:w-[300px] h-[700px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 font-extrabold lg:text-4xl text-lg text-landing-gold">PLATINUM PLUS</h1>
                    <h1 class="font-medium lg:text-4xl text-lg text-landing-gold tracking-wider">325.000 / M2</h1>
                </div>
                <div class="lg:mx-10 md:mx-10 mx-5 mt-10">
                    <h3 class="text-white font-semibold">ARSITEKTUR :</h3>
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DENAH 2D DAN 3D (2X REVISI)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D RENDER EKSTERIOR (ALL VIEW & 2X REVISI)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">LAYOUT PRESENTATION + 3D MODEL</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA ARSITEKTUR</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA STRUKTUR</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA MEP</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">UPAH KERJA & MATERIAL</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">VIDEO 3D</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DOKUMEN HARDFILE DAN SOFTFILE</p>
                        </li>
                    </ul>
                    <h3 class="mt-5 text-white font-semibold">INTERIOR :</h3>
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D RENDER INTERIOR (ALL VIEW)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">GAMBAR KERJA & SPESIFIKASI MATERIAL</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">3D MOODBOARD</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">VIDEO 3D</p>
                        </li>
                        <li class="list-disc text-white">
                            <p class="text-white text-xs lg:text-base">DOKUMEN HARDFILE DAN SOFTFILE</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 border-0 px-5 py-5 w-full rounded-full bg-theme2">
                <h1 class="text-white font-bold text-center">PILIH PAKET</h1>
            </div>
        </div>
    </div>
    {{-- Card Arsitektur Interior --}}

    <div class="py-15 w-full flex justify-center">
        <h1 class="text-5xl font-bold tracking-wide text-theme3">Bandingkan dan Pilih Paket Anda</h1>
    </div>
    <div class="flex justify-center">
        <button class="w-64 flex justify-center items-center py-2 px-2 rounded-full bg-theme2 text-landing-black-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
            <p class="font-medium ms-[5px] text-white tracking-wider">Konsultasi Sekarang!</p>
        </button>
    </div>

    {{-- Promo Card Slider --}} 
    <div class="w-full relative mt-30 px-36">
        <div class="swiper progress-slide-carousel swiper-container relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    {{-- Card --}}
                    <div class="border-2 border-black rounded-2xl h-96 overflow-hidden relative">
                        <img src="{{asset('assets/img/service/desain/bg-cardpromo.png')}}" alt="" class="absolute w-full h-full object-cover z-[-2]">
                        <div class="absolute inset-0 bg-white opacity-85 backdrop-brightness-50 z-[-1]"></div>
                        <div class="flex z-[9]">
                            <div class="p-8">
                                <h1 class="text-3xl text-landing-brown-2 font-bold">PROMO ARSITEKTUR</h1>
                                <div class="text-lg font-bold tracking-wider">
                                    <span class="line-through decoration-2 decoration-landing-brown-2">Rp. 100.000/m2</span>
                                </div>
                                <h1 class="text-5xl text-landing-brown-2 font-bold">Rp. 35.000/m2</h1>
                                <ul class="mt-4 my-2">
                                    <li class="text-lg text-landing-brown-1 font-bold">Denah 2D</li>
                                    <li class="text-lg text-landing-brown-1 font-bold">Tampak Eksterior Render 3D (4+Tampak)</li>
                                    <li class="text-lg text-landing-brown-1 font-bold">Gambar Kerja Arsitektur</li>
                                    <li class="text-lg text-landing-brown-1 font-bold">Gambar Kerja Struktur</li>
                                    <li class="text-lg text-landing-brown-1 font-bold">Gambar Kerja MEP</li>
                                    <li class="text-lg text-landing-brown-1 font-bold"><span class="text-lg text-landing-brown-2 font-extrabold me-2">BONUS</span>Rancangan Anggaran Biaya (RAB) + Upah Kerja dan Material</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    {{-- Card --}}
                    <div class="border-2 border-black rounded-2xl h-96 overflow-hidden relative">
                        <img src="{{asset('assets/img/service/desain/bg-cardpromo.png')}}" alt="" class="absolute w-full h-full object-cover z-[-2]">
                        <div class="absolute inset-0 bg-white opacity-85 backdrop-brightness-50 z-[-1]"></div>
                        <div class="flex z-[9]">
                            <div class="p-8">
                                <h1 class="text-3xl text-landing-brown-2 font-bold">PROMO INTERIOR</h1>
                                <div class="text-lg font-bold tracking-wider">
                                    <span class="line-through decoration-2 decoration-landing-brown-2">Rp. 150.000/m2</span>
                                </div>
                                <h1 class="text-5xl text-landing-brown-2 font-bold">Rp. 75.000/m2</h1>
                                <ul class="mt-4 my-2">
                                    <li class="text-lg text-landing-brown-1 font-bold">Denah 2D</li>
                                    <li class="text-lg text-landing-brown-1 font-bold">Tampak Eksterior Render 3D (4+Tampak)</li>
                                    <li class="text-lg text-landing-brown-1 font-bold">Gambar Kerja Arsitektur</li>
                                    <li class="text-lg text-landing-brown-1 font-bold">Gambar Kerja Struktur</li>
                                    <li class="text-lg text-landing-brown-1 font-bold">Gambar Kerja MEP</li>
                                    <li class="text-lg text-landing-brown-1 font-bold"><span class="text-lg text-landing-brown-2 font-extrabold me-2">BONUS</span>Rancangan Anggaran Biaya (RAB) + Upah Kerja dan Material</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-slide">
                    <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                        <span class="text-3xl font-semibold text-indigo-600">Slide 2 </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                        <span class="text-3xl font-semibold text-indigo-600">Slide 3 </span>
                    </div>
                </div> --}}
            </div>
            <div class="swiper-pagination !bottom-2 !top-auto !w-80 right-0 mx-auto bg-gray-100"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".progress-slide-carousel", {
        loop: true,
        fraction: true,
        autoplay: {
            delay: 1200,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".progress-slide-carousel .swiper-pagination",
            type: "progressbar",
        },
        });
    </script>

@endsection