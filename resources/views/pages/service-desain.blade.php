@extends("landing")

@section('subtitle', 'Layanan Desain')

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
    <div class="relative flex items-center w-full h-full pt-15">
        <div class="absolute z-[-1] w-full h-[400px] desktop:h-[600px] overflow-hidden">
            <div class="absolute inset-0 bg-theme3 opacity-60"></div>
            <img src="{{asset('assets/img/service/desain/bg1-servicedesain.jpg')}}" alt="" class="object-cover w-screen h-full">
        </div>
        <div class="py-10 desktop:py-30 mt-30">
            <h1 class="ml-20 text-5xl font-bold tracking-wider desktop:text-7xl text-theme1 drop-shadow-2 desktop:ml-40">Arsitektur</h1>
        </div>
    </div>
    {{-- Card Arsitektur --}}
    <div class="flex flex-wrap justify-center gap-4">
        {{-- 1 --}}
        <div class="relative">
            <div class="border-0 w-[300px] desktop:w-[700px] lg:w-[500px] md:w-[300px] sm:w-[300px] h-[500px] desktop:h-[700px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 text-lg font-extrabold desktop:text-5xl lg:text-4xl text-landing-gold">BRONZE</h1>
                    <h1 class="text-lg font-medium tracking-wider desktop:text-5xl lg:text-4xl text-landing-gold">100.000 / M2</h1>
                </div>
                <div class="mx-5 mt-10 lg:mx-10 md:mx-10">
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DENAH 2D DAN 3D (2X REVISI)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D RENDER EKSTERIOR (ALL VIEW & 2X REVISI)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA ARSITEKTUR</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA STRUKTUR</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA MEP</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">UPAH KERJA & MATERIAL</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 w-full px-5 py-5 border-0 rounded-full bg-theme2">
                <h1 class="text-lg font-bold text-center text-white laptop:text-xl desktop:text-3xl">PILIH PAKET</h1>
            </div>
        </div>

        {{-- 2 --}}
        <div class="relative">
            <div class="border-0 w-[300px] desktop:w-[700px] lg:w-[500px] md:w-[300px] sm:w-[300px] h-[500px] desktop:h-[700px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 text-lg font-extrabold desktop:text-5xl lg:text-4xl text-landing-gold">GOLD</h1>
                    <h1 class="text-lg font-medium tracking-wider desktop:text-5xl lg:text-4xl text-landing-gold">150.000 / M2</h1>
                </div>
                <div class="mx-5 mt-10 lg:mx-10 md:mx-10">
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DENAH 2D DAN 3D (2X REVISI)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D RENDER EKSTERIOR (ALL VIEW & 2X REVISI)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">LAYOUT PRESENTATION + 3D MODEL</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA ARSITEKTUR</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA STRUKTUR</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA MEP</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">UPAH KERJA & MATERIAL</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">VIDEO 3D</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DOKUMEN HARDFILE DAN SOFTFILE</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 w-full px-5 py-5 border-0 rounded-full bg-theme2">
                <h1 class="text-lg font-bold text-center text-white laptop:text-xl desktop:text-3xl">PILIH PAKET</h1>
            </div>
        </div>
    </div>


    {{-- Desain Interior --}}
    <div class="relative flex items-center w-full h-full mt-50">
        <div class="absolute z-[-1] w-full h-[400px] desktop:h-[600px] overflow-hidden">
            <div class="absolute inset-0 bg-theme3 opacity-60"></div>
            <img src="{{asset('assets/img/service/desain/bg2-servicedesain.png')}}" alt="" class="object-cover w-screen h-full" style="object-position: 50% 85%;">
        </div>
        <div class="py-10 desktop:py-30 mt-30">
            <h1 class="ml-20 text-5xl font-bold tracking-wider desktop:text-7xl text-theme1 drop-shadow-2 desktop:ml-40">Desain Interior</h1>
        </div>
    </div>
    {{-- Card Desain Interior --}}
    <div class="flex flex-wrap justify-center gap-4">
        {{-- 1 --}}
        <div class="relative">
            <div class="border-0 w-[300px] desktop:w-[600px] lg:w-[370px] sm:w-[300px] h-[500px] desktop:h-[700px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 text-lg font-extrabold desktop:text-5xl lg:text-4xl text-landing-gold">DELUXE</h1>
                    <h1 class="text-lg font-medium tracking-wider desktop:text-5xl lg:text-4xl text-landing-gold">150.000 / M2</h1>
                </div>
                <div class="mx-5 mt-10 lg:mx-10 md:mx-10">
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">LAYOUT DENAH 2D</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D RENDER INTERIOR (ALL VIEW)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DETAIL INTERIOR (GAMBAR KERJA & SPESIFIKASI MATERIAL)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D MOODBOARD</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 w-full px-5 py-5 border-0 rounded-full bg-theme2">
                <h1 class="text-lg font-bold text-center text-white laptop:text-xl desktop:text-3xl">PILIH PAKET</h1>
            </div>
        </div>

        {{-- 2 --}}
        <div class="relative">
            <div class="border-0 w-[300px] desktop:w-[600px] lg:w-[370px] sm:w-[300px] h-[500px] desktop:h-[700px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 text-lg font-extrabold desktop:text-5xl lg:text-4xl text-landing-gold">PREMIUM</h1>
                    <h1 class="text-lg font-medium tracking-wider desktop:text-5xl lg:text-4xl text-landing-gold">200.000 / M2</h1>
                </div>
                <div class="mx-5 mt-10 lg:mx-10 md:mx-10">
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">LAYOUT DENAH 2D</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D RENDER INTERIOR (ALL VIEW)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DETAIL INTERIOR (GAMBAR KERJA & SPESIFIKASI MATERIAL)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D MOODBOARD</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D VIDEO RENDER (TOUR VIEW)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DOKUMEN HARDFILE DAN SOFTFILE</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 w-full px-5 py-5 border-0 rounded-full bg-theme2">
                <h1 class="text-lg font-bold text-center text-white laptop:text-xl desktop:text-3xl">PILIH PAKET</h1>
            </div>
        </div>
    </div>

    {{-- Arsitektur Interior --}}
    <div class="relative flex items-center w-full h-full mt-50">
        <div class="absolute z-[-1] w-full h-[400px] desktop:h-[600px] overflow-hidden">
            <div class="absolute inset-0 bg-theme3 opacity-60"></div>
            <img src="{{asset('assets/img/service/desain/bg3left-servicedesain.png')}}" alt="" class="object-cover w-screen h-full" style="object-position: 50% 85%;">
        </div>
        <div class="py-10 desktop:py-30 mt-30">
            <h1 class="ml-20 text-5xl font-bold tracking-wider desktop:text-7xl text-theme1 drop-shadow-2 desktop:ml-40">Arsitektur Interior</h1>
        </div>
    </div>
    {{-- Card Desain Interior --}}
    <div class="flex flex-wrap justify-center gap-4">
        {{-- 1 --}}
        <div class="relative">
            <div class="border-0 w-[300px] desktop:w-[650px] lg:w-[500px] md:w-[300px] sm:w-[300px] h-[700px] desktop:h-[900px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 text-lg font-extrabold desktop:text-5xl lg:text-4xl text-landing-gold">PLATINUM</h1>
                    <h1 class="text-lg font-medium tracking-wider desktop:text-5xl lg:text-4xl text-landing-gold">250.000 / M2</h1>
                </div>
                <div class="mx-5 mt-10 lg:mx-10 md:mx-10">
                    <h3 class="font-semibold text-white text-normal desktop:text-2xl">ARSITEKTUR :</h3>
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DENAH 2D DAN 3D (2X REVISI)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D RENDER EKSTERIOR (ALL VIEW & 2X REVISI)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA ARSITEKTUR</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA STRUKTUR</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA MEP</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">UPAH KERJA & MATERIAL</p>
                        </li>
                    </ul>
                    <h3 class="mt-5 font-semibold text-white text-normal desktop:text-2xl">INTERIOR :</h3>
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D RENDER INTERIOR (ALL VIEW)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA & SPESIFIKASI MATERIAL</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D MOODBOARD</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 w-full px-5 py-5 border-0 rounded-full bg-theme2">
                <h1 class="text-lg font-bold text-center text-white laptop:text-xl desktop:text-3xl">PILIH PAKET</h1>
            </div>
        </div>

        {{-- 2 --}}
        <div class="relative">
            <div class="border-0 w-[300px] desktop:w-[650px] lg:w-[500px] md:w-[300px] sm:w-[300px] h-[700px] desktop:h-[900px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 text-lg font-extrabold desktop:text-5xl lg:text-4xl text-landing-gold">PLATINUM PLUS</h1>
                    <h1 class="text-lg font-medium tracking-wider desktop:text-5xl lg:text-4xl text-landing-gold">325.000 / M2</h1>
                </div>
                <div class="mx-5 mt-10 lg:mx-10 md:mx-10">
                    <h3 class="font-semibold text-white text-normal desktop:text-2xl">ARSITEKTUR :</h3>
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DENAH 2D DAN 3D (2X REVISI)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D RENDER EKSTERIOR (ALL VIEW & 2X REVISI)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">LAYOUT PRESENTATION + 3D MODEL</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA ARSITEKTUR</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA STRUKTUR</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA MEP</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">UPAH KERJA & MATERIAL</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">VIDEO 3D</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DOKUMEN HARDFILE DAN SOFTFILE</p>
                        </li>
                    </ul>
                    <h3 class="mt-5 font-semibold text-white text-normal desktop:text-2xl">INTERIOR :</h3>
                    <ul class="ml-8 sm:ml-5 lg:ml-0">
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D RENDER INTERIOR (ALL VIEW)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">GAMBAR KERJA & SPESIFIKASI MATERIAL</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">3D MOODBOARD</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">VIDEO 3D</p>
                        </li>
                        <li class="text-white list-disc">
                            <p class="text-xs text-white lg:text-base desktop:text-2xl">DOKUMEN HARDFILE DAN SOFTFILE</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 w-full px-5 py-5 border-0 rounded-full bg-theme2">
                <h1 class="text-lg font-bold text-center text-white laptop:text-xl desktop:text-3xl">PILIH PAKET</h1>
            </div>
        </div>
    </div>

    <h1 class="py-10 text-3xl font-bold tracking-wide text-center lg:text-5xl desktop:text-6xl text-theme3">Bandingkan dan Pilih Paket Anda</h1>

    </div>
    @include('components.tabel-paket.tabel-paket')
      
    <div class="flex justify-center mt-10">
        <button class="flex items-center justify-center w-64 px-2 py-2 rounded-full desktop:w-96 desktop:py-4 desktop:px-4 bg-theme2 text-landing-black-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white desktop:w-10 desktop:h-10" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
            <p class="font-medium ms-[5px] text-white tracking-wider text-normal desktop:text-2xl">Konsultasi Sekarang!</p>
        </button>
    </div>

    <div class="h-[1px] w-[88%] bg-theme2 mt-10 mb-15"></div>

    {{-- Promo Card Slider --}} 
    <div class="relative w-full px-5 lg:px-36 laptop:px-40 desktop:px-52">
        <div class="relative swiper progress-slide-carousel swiper-container">
            <div class="swiper-wrapper">
                {{-- Dinamis card promo --}}
            </div>
            <div class="swiper-pagination !bottom-2 !top-auto !w-80 right-0 mx-auto bg-gray-100"></div>
        </div>
    </div>

    {{-- Flow Step --}}
    <div class="relative w-screen mt-10 overflow-x-auto overflow-y-hidden bg-center bg-cover rounded" style="background-image:url('{{asset('assets/img/service/desain/bg-alurrencana.png')}}')">
        <div class="absolute w-full h-full bg-black-2 opacity-65" style="min-width: 1024px;"></div>
        {{-- Flowchart Alur --}}
        <div class="px-10 lg:px-36 py-20 min-w-[1024px] relative z-10">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-white lg:text-5xl desktop:text-7xl me-5">Alur Kerja Perencanaan</h1>
                <div class="flex-1">
                    <span class="block h-[2px] desktop:h-[4px] bg-white"></span>
                </div>
            </div>
            {{-- Flow Top Step Perencanaan --}}
            <div class="grid grid-cols-5 mt-20">
                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-white rounded-full desktop:w-28 desktop:h-28">
                        {{-- icon --}}
                        <svg fill="#000000" class="w-13 h-100 desktop:w-18 desktop:h-100" viewBox="0 0 512 512" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="B_-_119_x2C__Support_x2C__Business_x2C__consulting_x2C__customer_x2C__man_x2C__online_consultant_x2C__service"> <g> <path d="M285.195,399.619c-1.621,0-2.871-1.327-2.871-2.911 c0-1.62,1.25-2.909,2.871-2.909h38.094c1.622,0,2.875,1.289,2.875,2.909c0,1.584-1.253,2.911-2.875,2.911H285.195z M285.195,423.491c-1.621,0-2.871-1.289-2.871-2.911c0-1.62,1.25-2.909,2.871-2.909h38.094c1.622,0,2.875,1.289,2.875,2.909 c0,1.622-1.253,2.911-2.875,2.911H285.195z M365.066,320.413c-11.346-6.04-24.83-13.298-40.6-22.251l-41.85,68.854 c-0.148,0.222-0.293,0.405-0.44,0.627c-1.105,1.178-2.946,1.252-4.128,0.147l-21.955-20.483l-24.314,24.167v0.036l0,0h-0.075 v0.038l-0.072,0.036v0.037l0,0v0.037h-0.072v0.035l0,0l-0.076,0.038l0,0v0.036l-0.072,0.038l-0.076,0.036l0,0l-0.221,0.111 l-0.072,0.036l0,0l-0.075,0.037l0,0l0,0l-0.072,0.036l0,0l-0.072,0.037l-0.076,0.037l0,0l-0.073,0.037l0,0h-0.076l0,0 l-0.072,0.037l0,0h-0.072l0,0l-0.076,0.035l0,0h-0.072l0,0h-0.075l0,0l-0.072,0.038l0,0l0,0h-0.072l0,0h-0.076l0,0h-0.072l0,0 h-0.076l0,0h-0.145h-0.076h-0.072h-0.075h-0.072l0,0h-0.076l0,0l-0.072-0.038l0,0h-0.072l0,0h-0.076l0,0l-0.072-0.035l0,0h-0.076 l-0.072-0.037l0,0h-0.072l0,0l-0.147-0.074l0,0l-0.148-0.073l0,0l-0.072-0.037l0,0l-0.076-0.036l0,0l0,0l-0.072-0.038l0,0 l-0.148-0.073v-0.036h-0.072l-0.075-0.112h-0.072v-0.035v-0.037h-0.076v-0.037v-0.036h-0.072v-0.038h-0.072v-0.036v-0.037h-0.076 V371.4v-0.038h-0.072v-0.036v-0.038l-0.075-0.035l0,0l-0.073-0.074v-0.037l-0.072-0.185l0,0l-0.075-0.036l-0.072-0.147 l-0.076-0.11l-39.639-72.427c-16.207,9.21-29.987,16.541-41.405,22.62c-26.526,14.183-40.379,21.551-47.156,32.565 c-7.367,12.01-7.147,29.398-6.63,65.611c0.147,10.278,0.295,21.993,0.295,34.04c54.521,12.452,108.969,18.53,163.421,18.456 c54.449-0.073,108.896-6.335,163.421-18.456c0-11.604,0.145-23.062,0.293-33.155c0.443-36.583,0.664-54.155-6.778-66.312 C406.031,342.37,392.03,334.854,365.066,320.413z M259.925,342.886l19.45,18.199l40.303-66.349l-14.66-13.445L259.925,342.886z M192.289,294.811l38.166,69.811l21.735-21.661l-45.167-61.669L192.289,294.811z M257.495,68.873 c-21.884,0-41.777,8.88-56.146,23.247c-11.566,11.567-19.525,26.672-22.251,43.507c0.147,0.406,0.22,0.884,0.147,1.326 c-0.295,1.841-0.516,3.72-0.588,5.599c-0.148,1.843-0.221,3.759-0.221,5.711c0,4.273,0.293,8.841,0.881,13.63v0.111 c0.592,4.79,1.477,9.799,2.582,14.81c0.072,0.258,0.146,0.589,0.146,0.883c0,0.259-0.073,0.479-0.073,0.737 c4.2,18.162,11.935,37.614,22.917,53.528c13.112,19.009,30.795,32.824,52.606,32.824c21.808,0,39.563-13.815,52.679-32.824 c1.4-2.063,2.799-4.2,4.128-6.373l-44.208,16.799c-2.285,0.847-4.644,0.737-6.705-0.185c-1.99-0.922-3.76-2.616-4.568-4.863 c-0.885-2.247-0.736-4.642,0.221-6.667c0.884-2.063,2.578-3.758,4.787-4.605l61.744-23.504 c7.441-18.972,11.349-38.865,11.349-54.3c0-21.92-8.915-41.777-23.284-56.144C299.27,77.752,279.449,68.873,257.495,68.873z M194.499,129.364c-0.737-1.4-0.148-3.168,1.25-3.905c1.4-0.737,3.17-0.147,3.907,1.252c1.545,2.948,3.387,5.49,5.452,7.663 c6.262,6.668,14.81,9.983,23.501,10.794c8.696,0.811,17.611-0.921,24.317-4.384c2.43-1.253,4.641-2.727,6.333-4.421l0.076-0.038 c15.25-14.441,20.923-17.129,23.357-14.588l0.145,0.147c1.477,1.731,1.032,4.237,0.443,7.146 c-0.443,2.137-0.957,4.606-0.516,5.785v0.074c0.367,0.589,1.841,0.553,5.82-0.922c5.453-2.063,13.484-4.532,20.703-4.863h0.076 c8.104-0.295,15.177,1.989,17.459,10.131c0.445,1.547-0.512,3.131-2.062,3.573c-1.546,0.405-3.167-0.515-3.535-2.025 c-1.329-4.752-6.116-6.078-11.643-5.858h-0.072c-6.413,0.295-13.853,2.58-18.864,4.458c-8.18,3.02-11.787,1.289-13.26-2.284 l-0.076-0.295c-1.029-2.689-0.368-6.042,0.221-8.915c0.296-1.4,1.4-1.695,0.961-2.137c-0.148-0.185-3.172,3.463-15.178,14.81 v0.037c-2.214,2.063-4.793,3.832-7.739,5.341c-7.664,3.979-17.684,5.932-27.481,5.011c-10.021-0.922-19.893-4.826-27.264-12.563 C198.403,135.848,196.265,132.827,194.499,129.364z M279.375,178.692c-1.474,0.626-3.168-0.073-3.832-1.547 c-0.588-1.474,0.076-3.168,1.549-3.795c0.072-0.037,18.053-8.104,26.744,0.627c1.105,1.105,1.105,2.983,0,4.125 c-1.177,1.105-3.019,1.105-4.123-0.037C293.891,172.245,279.449,178.692,279.375,178.692z M159.5,139.458 c3.315-27.703,15.105-52.275,32.272-69.995c17.459-18.051,40.524-28.993,65.722-28.993c25.271,0,48.331,10.942,65.794,28.993 c17.167,17.72,28.958,42.292,32.272,69.995h7.663v35.33h-23.137c1.915-9.506,2.875-18.567,2.875-26.524 c0-2.948-0.076-5.895-0.443-8.805h7.222c-3.315-26.12-14.44-49.254-30.651-65.943c-16.431-16.946-37.946-27.224-61.595-27.224 c-23.578,0-45.168,10.278-61.523,27.224c-16.21,16.688-27.408,39.823-30.651,65.943h7.147c-0.296,2.91-0.441,5.857-0.441,8.805 c0,7.957,0.958,17.019,2.947,26.524h-22.695v-35.33H159.5z M348.56,189.892c0-1.622,1.329-2.948,2.95-2.948 c1.618,0,2.871,1.326,2.871,2.948v12.157c0,1.326-0.884,2.432-2.062,2.799l-84.292,32.087c-1.545,0.589-3.166-0.184-3.755-1.657 c-0.589-1.51,0.147-3.205,1.694-3.758l82.593-31.461V189.892z M237.97,173.35c1.473,0.627,2.134,2.322,1.473,3.795 c-0.589,1.474-2.286,2.173-3.759,1.547c-0.072,0-14.513-6.447-20.334-0.627c-1.105,1.142-2.947,1.142-4.127,0.037 c-1.104-1.142-1.104-3.02,0-4.125C219.918,165.246,237.894,173.313,237.97,173.35z" style="fill-rule:evenodd;clip-rule:evenodd;"></path> </g> </g> <g id="Layer_1"></g> </g></svg>
                    </div>
                    <p class="mt-4 text-base text-white laptop:text-xl desktop:text-2xl">Konsultasi Gratis<br>& Pemilihan Paket</p>
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mt-3">
                        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full desktop:w-14 desktop:h-14">
                            <span class="text-sm font-bold text-black laptop:text-lg desktop:text-xl">1</span>
                        </div>
                        {{-- garis horizontal --}}
                        <div class="absolute w-full z-[-1] h-1 desktop:h-2 bg-white top-1/2 left-1/2 transform translate-y-[-50%]"></div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-yellow-500 rounded-full desktop:w-28 desktop:h-28">
                        {{-- icon --}}
                        <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-13 h-100 desktop:w-18 desktop:h-100" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#000000;}  </style> <g> <path class="st0" d="M335.859,68.875c0,0,4.656-12.469,29.734-28.297c24.063-15.172,5.594-36.141-29.734-28.422 C311.469,17.469,319.75,0,285.547,0s-25.922,17.469-50.313,12.156c-35.328-7.719-53.797,13.25-29.734,28.422 c25.078,15.828,29.734,28.297,29.734,28.297H335.859z"></path> <path class="st0" d="M432.063,224.453c0-7.141-4.234-13.281-10.328-16.109c6.094-2.844,10.344-8.969,10.344-16.109 c0-7.156-4.25-13.297-10.344-16.125c6.078-2.828,10.328-8.953,10.328-16.125c0-9.828-7.969-17.797-17.813-17.797h-59.375 c-9.828,0-17.813,7.969-17.813,17.797c0,7.172,4.25,13.297,10.344,16.125c-6.094,2.828-10.344,8.969-10.344,16.125 c0,7.141,4.25,13.266,10.344,16.109c-6.094,2.828-10.344,8.969-10.344,16.109c0,7.156,4.25,13.297,10.344,16.109 c-6.094,2.844-10.344,8.969-10.344,16.125c0,9.844,7.984,17.813,17.813,17.813h59.375c9.828,0,17.813-7.969,17.813-17.813 c0-7.156-4.25-13.281-10.328-16.109C427.813,237.75,432.063,231.609,432.063,224.453z"></path> <path class="st0" d="M346.203,89.641c-20,0-113.25,0-113.25,0c-48.969,0-62.656,38.328-100.578,38.328v121.641l16.578-0.766 c126.688-9.813,115.625-119.188,115.625-119.188s31.063,0,71.094,0C375.688,129.656,377.797,89.641,346.203,89.641z"></path> <rect x="64.703" y="113.75" class="st0" width="50.563" height="164.281"></rect> <path class="st0" d="M309.906,368.781c3.984-2.813,5.984-7.266,5.984-13.391c0-6.344-1.797-10.859-5.391-13.563 c-3.594-2.688-9.219-4.047-16.859-4.047H277.75V373h14.641C300.078,373,305.922,371.594,309.906,368.781z"></path> <path class="st0" d="M314.938,393.266c-1.797-1.484-4.094-2.641-6.906-3.422s-6.203-1.172-10.188-1.172H277.75v35.719h20.172 c4.219,0,7.734-0.516,10.578-1.516c2.828-1.016,5.109-2.359,6.813-4.047c1.719-1.688,2.953-3.641,3.703-5.891 c0.766-2.25,1.141-4.641,1.141-7.172c0-2.641-0.422-5.016-1.266-7.109C318.063,396.547,316.734,394.75,314.938,393.266z"></path> <path class="st0" d="M432.891,288.344c-5.469,3.219-11.828,5.125-18.641,5.125h-59.375c-20.266,0-36.766-16.5-36.766-36.781 c0-5.672,1.328-11.172,3.766-16.109c-2.438-4.938-3.766-10.438-3.766-16.125c0-5.672,1.328-11.172,3.766-16.109 c-2.438-4.938-3.766-10.438-3.766-16.109c0-5.688,1.328-11.188,3.766-16.125c-2.422-4.938-3.766-10.438-3.766-16.125 c0-3.969,0.641-7.781,1.813-11.359h-36.75c-1.703,18.797-7.984,47.141-28.594,71.813c-22.453,26.844-55.891,42.531-99.313,46.813 c-14.125,27.375-24.203,56.891-24.203,86.625c0,87.328,70.797,158.125,158.109,158.125c87.328,0,158.125-70.797,158.125-158.125 C447.297,331.625,441.625,309.531,432.891,288.344z M342.453,420.594c-1.969,4.391-4.828,8.156-8.594,11.344 c-3.75,3.172-8.391,5.656-13.906,7.453c-5.484,1.797-11.781,2.688-18.859,2.688h-2.484v12.328h-19.25v-12.328h-24.266h-7.953 v-9.891c0-2.922-0.188-4.672,2.609-5.281c0.25-0.047,0.609-0.094,1.063-0.188c0.469-0.094,1.297-0.234,2.516-0.453 c1.203-0.219-0.344-0.516,1.766-0.891v-88.422c-2.109-0.359-0.563-0.656-1.766-0.875c-1.219-0.234-2.047-0.359-2.516-0.453 c-0.453-0.078-0.813-0.156-1.063-0.188c-2.797-0.594-2.609-2.359-2.609-5.281v-9.891h7.953h24.266v-13.172h19.25v13.281 c5.875,0.25,11.031,0.969,15.453,2.156c5.656,1.516,10.297,3.688,13.906,6.5c3.625,2.797,6.281,6.188,7.953,10.188 c1.703,3.984,2.531,8.469,2.531,13.469c0,2.875-0.406,5.609-1.25,8.219c-0.859,2.609-2.156,5.063-3.922,7.344 c-1.781,2.266-4.016,4.328-6.75,6.188c-2.719,1.844-6.234,4.719-6.234,4.719c16.734,3.75,25.109,12.797,25.109,27.125 C345.406,411.438,344.422,416.219,342.453,420.594z"></path> </g> </g></svg>
                    </div>
                    <p class="mt-4 text-base text-white laptop:text-xl desktop:text-2xl">Pembayaran<br>Uang Muka</p>
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mt-3">
                        <div class="flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full desktop:w-14 desktop:h-14">
                            <span class="text-sm font-bold text-black laptop:text-lg desktop:text-xl">2</span>
                        </div>
                        {{-- garis horizontal --}}
                        <div class="absolute w-full z-[-1] h-1 desktop:h-2 bg-white top-1/2 left-1/2 transform translate-y-[-50%]"></div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-white rounded-full desktop:w-28 desktop:h-28">
                        {{-- icon --}}
                        <svg fill="#000000" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Layer_3" class="w-13 h-100 desktop:w-18 desktop:h-100" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M22,7c-1.654,0-3,1.346-3,3c0,0.68,0.236,1.301,0.619,1.805C18.642,12.535,18,13.69,18,15h-4 c0-1.31-0.642-2.465-1.619-3.195C12.764,11.301,13,10.68,13,10c0-1.654-1.346-3-3-3s-3,1.346-3,3c0,0.68,0.236,1.301,0.619,1.805 C6.642,12.535,6,13.69,6,15H5c-0.469,0-0.875,0.326-0.976,0.783l-2,9c-0.066,0.296,0.006,0.606,0.196,0.842 C2.41,25.862,2.697,26,3,26h3.556C6.212,26.591,6,27.268,6,28v1c0,0.552,0.448,1,1,1h6c0.552,0,1-0.448,1-1v-1 c0-0.732-0.212-1.409-0.556-2h5.113C18.212,26.591,18,27.268,18,28v1c0,0.552,0.448,1,1,1h6c0.552,0,1-0.448,1-1v-1 c0-0.732-0.212-1.409-0.556-2H29c0.303,0,0.59-0.138,0.78-0.375c0.189-0.236,0.262-0.546,0.196-0.842l-2-9 C27.875,15.326,27.469,15,27,15h-1c0-1.31-0.642-2.465-1.619-3.195C24.764,11.301,25,10.68,25,10C25,8.346,23.654,7,22,7z M21,10 c0-0.551,0.449-1,1-1s1,0.449,1,1s-0.449,1-1,1S21,10.551,21,10z M9,10c0-0.551,0.449-1,1-1s1,0.449,1,1s-0.449,1-1,1 S9,10.551,9,10z M10,13c1.103,0,2,0.897,2,2H8C8,13.897,8.897,13,10,13z M9,23c0-0.551,0.449-1,1-1s1,0.449,1,1s-0.449,1-1,1 S9,23.551,9,23z M12,28H8c0-1.103,0.897-2,2-2S12,26.897,12,28z M21,23c0-0.551,0.449-1,1-1s1,0.449,1,1s-0.449,1-1,1 S21,23.551,21,23z M24,28h-4c0-1.103,0.897-2,2-2S24,26.897,24,28z M26.198,17l1.556,7h-2.938C24.928,23.686,25,23.352,25,23 c0-1.654-1.346-3-3-3s-3,1.346-3,3c0,0.352,0.072,0.686,0.184,1h-6.369C12.928,23.686,13,23.352,13,23c0-1.654-1.346-3-3-3 s-3,1.346-3,3c0,0.352,0.072,0.686,0.184,1H4.247l1.556-7H7h6h6h6H26.198z M20,15c0-1.103,0.897-2,2-2s2,0.897,2,2H20z"></path> <path d="M18,2h-4c-1.654,0-3,1.346-3,3s1.346,3,3,3h0.865l1.367,1.64C16.423,9.87,16.705,10,17,10c0.038,0,0.077-0.002,0.115-0.007 c0.335-0.039,0.628-0.244,0.779-0.546l0.759-1.519C19.995,7.629,21,6.43,21,5C21,3.346,19.654,2,18,2z M18,6 c-0.379,0-0.725,0.214-0.895,0.553L16.79,7.185L16.102,6.36C15.912,6.132,15.63,6,15.333,6H14c-0.551,0-1-0.449-1-1s0.449-1,1-1h4 c0.551,0,1,0.449,1,1S18.551,6,18,6z"></path> </g> </g></svg>
                    </div>
                    <p class="mt-4 text-base text-white laptop:text-xl desktop:text-2xl">Diskusi dan<br>pengerjaan denah</p>
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mt-3">
                        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full desktop:w-14 desktop:h-14">
                            <span class="text-sm font-bold text-black laptop:text-lg desktop:text-xl">3</span>
                        </div>
                        {{-- garis horizontal --}}
                        <div class="absolute w-full z-[-1] h-1 desktop:h-2 bg-white top-1/2 left-1/2 transform translate-y-[-50%]"></div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-yellow-500 rounded-full desktop:w-28 desktop:h-28">
                        {{-- icon --}}
                        <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-13 h-100 desktop:w-18 desktop:h-100" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#000000;}  </style> <g> <path class="st0" d="M335.859,68.875c0,0,4.656-12.469,29.734-28.297c24.063-15.172,5.594-36.141-29.734-28.422 C311.469,17.469,319.75,0,285.547,0s-25.922,17.469-50.313,12.156c-35.328-7.719-53.797,13.25-29.734,28.422 c25.078,15.828,29.734,28.297,29.734,28.297H335.859z"></path> <path class="st0" d="M432.063,224.453c0-7.141-4.234-13.281-10.328-16.109c6.094-2.844,10.344-8.969,10.344-16.109 c0-7.156-4.25-13.297-10.344-16.125c6.078-2.828,10.328-8.953,10.328-16.125c0-9.828-7.969-17.797-17.813-17.797h-59.375 c-9.828,0-17.813,7.969-17.813,17.797c0,7.172,4.25,13.297,10.344,16.125c-6.094,2.828-10.344,8.969-10.344,16.125 c0,7.141,4.25,13.266,10.344,16.109c-6.094,2.828-10.344,8.969-10.344,16.109c0,7.156,4.25,13.297,10.344,16.109 c-6.094,2.844-10.344,8.969-10.344,16.125c0,9.844,7.984,17.813,17.813,17.813h59.375c9.828,0,17.813-7.969,17.813-17.813 c0-7.156-4.25-13.281-10.328-16.109C427.813,237.75,432.063,231.609,432.063,224.453z"></path> <path class="st0" d="M346.203,89.641c-20,0-113.25,0-113.25,0c-48.969,0-62.656,38.328-100.578,38.328v121.641l16.578-0.766 c126.688-9.813,115.625-119.188,115.625-119.188s31.063,0,71.094,0C375.688,129.656,377.797,89.641,346.203,89.641z"></path> <rect x="64.703" y="113.75" class="st0" width="50.563" height="164.281"></rect> <path class="st0" d="M309.906,368.781c3.984-2.813,5.984-7.266,5.984-13.391c0-6.344-1.797-10.859-5.391-13.563 c-3.594-2.688-9.219-4.047-16.859-4.047H277.75V373h14.641C300.078,373,305.922,371.594,309.906,368.781z"></path> <path class="st0" d="M314.938,393.266c-1.797-1.484-4.094-2.641-6.906-3.422s-6.203-1.172-10.188-1.172H277.75v35.719h20.172 c4.219,0,7.734-0.516,10.578-1.516c2.828-1.016,5.109-2.359,6.813-4.047c1.719-1.688,2.953-3.641,3.703-5.891 c0.766-2.25,1.141-4.641,1.141-7.172c0-2.641-0.422-5.016-1.266-7.109C318.063,396.547,316.734,394.75,314.938,393.266z"></path> <path class="st0" d="M432.891,288.344c-5.469,3.219-11.828,5.125-18.641,5.125h-59.375c-20.266,0-36.766-16.5-36.766-36.781 c0-5.672,1.328-11.172,3.766-16.109c-2.438-4.938-3.766-10.438-3.766-16.125c0-5.672,1.328-11.172,3.766-16.109 c-2.438-4.938-3.766-10.438-3.766-16.109c0-5.688,1.328-11.188,3.766-16.125c-2.422-4.938-3.766-10.438-3.766-16.125 c0-3.969,0.641-7.781,1.813-11.359h-36.75c-1.703,18.797-7.984,47.141-28.594,71.813c-22.453,26.844-55.891,42.531-99.313,46.813 c-14.125,27.375-24.203,56.891-24.203,86.625c0,87.328,70.797,158.125,158.109,158.125c87.328,0,158.125-70.797,158.125-158.125 C447.297,331.625,441.625,309.531,432.891,288.344z M342.453,420.594c-1.969,4.391-4.828,8.156-8.594,11.344 c-3.75,3.172-8.391,5.656-13.906,7.453c-5.484,1.797-11.781,2.688-18.859,2.688h-2.484v12.328h-19.25v-12.328h-24.266h-7.953 v-9.891c0-2.922-0.188-4.672,2.609-5.281c0.25-0.047,0.609-0.094,1.063-0.188c0.469-0.094,1.297-0.234,2.516-0.453 c1.203-0.219-0.344-0.516,1.766-0.891v-88.422c-2.109-0.359-0.563-0.656-1.766-0.875c-1.219-0.234-2.047-0.359-2.516-0.453 c-0.453-0.078-0.813-0.156-1.063-0.188c-2.797-0.594-2.609-2.359-2.609-5.281v-9.891h7.953h24.266v-13.172h19.25v13.281 c5.875,0.25,11.031,0.969,15.453,2.156c5.656,1.516,10.297,3.688,13.906,6.5c3.625,2.797,6.281,6.188,7.953,10.188 c1.703,3.984,2.531,8.469,2.531,13.469c0,2.875-0.406,5.609-1.25,8.219c-0.859,2.609-2.156,5.063-3.922,7.344 c-1.781,2.266-4.016,4.328-6.75,6.188c-2.719,1.844-6.234,4.719-6.234,4.719c16.734,3.75,25.109,12.797,25.109,27.125 C345.406,411.438,344.422,416.219,342.453,420.594z"></path> </g> </g></svg>
                    </div>
                    <p class="mt-4 text-base text-white laptop:text-xl desktop:text-2xl">Pembayaran<br>Tahap Kedua</p>
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mt-3">
                        <div class="flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full desktop:w-14 desktop:h-14">
                            <span class="text-sm font-bold text-black laptop:text-lg desktop:text-xl">4</span>
                        </div>
                        {{-- garis horizontal --}}
                        <div class="absolute w-full z-[-1] h-1 desktop:h-2 bg-white top-1/2 left-1/2 transform translate-y-[-50%]"></div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-white rounded-full desktop:w-28 desktop:h-28">
                        {{-- icon --}}
                        <svg fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" class="w-13 h-100 desktop:w-18 desktop:h-100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M436.494,282.174l-20.377-15.098c2.325-15.684,2.343-31.45,0.051-46.996l20.326-15.061 c2.956-2.19,4.042-6.111,2.634-9.509l-19.635-47.401c-1.408-3.399-4.952-5.405-8.586-4.861l-25.022,3.723 c-9.373-12.613-20.532-23.748-33.269-33.196l3.734-25.086c0.541-3.639-1.463-7.179-4.861-8.586l-47.401-19.633 c-3.398-1.408-7.32-0.322-9.509,2.634l-4.908,6.623V25.119C289.67,11.268,278.402,0,264.551,0h-17.102 c-13.851,0-25.119,11.268-25.119,25.119v44.607l-4.908-6.624c-2.189-2.956-6.11-4.041-9.509-2.634l-47.401,19.633 c-3.399,1.408-5.403,4.948-4.861,8.586l3.723,25.023c-12.612,9.373-23.747,20.531-33.194,33.268l-25.086-3.733 c-3.64-0.543-7.179,1.463-8.586,4.861l-19.635,47.401c-1.408,3.399-0.322,7.32,2.634,9.509l20.377,15.098 c-2.325,15.684-2.342,31.45-0.051,46.996l-20.326,15.061c-2.956,2.19-4.042,6.111-2.634,9.509l19.635,47.402 c1.408,3.399,4.952,5.404,8.586,4.861l25.023-3.723c9.373,12.613,20.531,23.748,33.268,33.196l-3.734,25.086 c-0.541,3.638,1.463,7.179,4.861,8.586l47.401,19.635c3.399,1.408,7.32,0.322,9.509-2.634l4.908-6.624v1.005 c0,0.78,0.113,1.556,0.338,2.303l25.653,85.512C249.339,509.677,252.46,512,256,512c3.54,0,6.661-2.323,7.679-5.713l25.653-85.512 c0.224-0.747,0.338-1.523,0.338-2.303v-1.005l4.908,6.624c1.548,2.09,3.961,3.245,6.443,3.245c1.028,0,2.069-0.199,3.066-0.61 l47.401-19.635c3.399-1.408,5.403-4.948,4.861-8.586l-3.723-25.023c12.613-9.373,23.749-20.533,33.196-33.268l25.085,3.733 c3.64,0.543,7.179-1.463,8.586-4.861l19.634-47.401C440.536,288.285,439.45,284.364,436.494,282.174z M238.363,25.119 c0-5.01,4.076-9.086,9.086-9.086h17.102c5.01,0,9.086,4.076,9.086,9.086v17.637h-35.273V25.119z M238.363,58.789h35.273v23.934 c-11.777-1.315-23.577-1.331-35.273-0.049V58.789z M222.33,303.75c-13.41-7.526-24.082-19.421-30.025-33.77 c-13.5-32.592-0.047-69.723,30.025-86.53V303.75z M256,476.084l-14.879-49.596h29.757L256,476.084z M273.637,410.455h-35.273 V176.963c11.837-3.14,23.967-2.982,35.273,0.026V410.455z M223.481,165.088c-43.29,17.932-63.92,67.739-45.989,111.028 c8.448,20.398,24.65,36.771,44.838,45.5v19.482c-27.974-9.609-50.177-30.385-61.626-58.028 c-21.765-52.547,3.277-113.005,55.824-134.769c52.547-21.765,113.003,3.276,134.769,55.823c10.544,25.455,10.544,53.492,0,78.946 c-10.544,25.455-30.368,45.279-55.823,55.824c-1.909,0.79-3.849,1.513-5.803,2.189v-19.487h-0.001 c20.412-8.802,36.313-24.898,44.839-45.479c8.686-20.971,8.686-44.068,0-65.039C316.577,167.789,266.771,147.159,223.481,165.088z M289.67,303.749v-120.26c13.065,7.301,23.867,18.856,30.025,33.725c7.047,17.014,7.047,35.753,0,52.767 C313.691,284.476,303.171,296.225,289.67,303.749z M407.076,327.167l-23.731-3.531c-3.015-0.449-6.021,0.85-7.761,3.351 c-9.92,14.259-22.095,26.459-36.185,36.261c-2.501,1.74-3.8,4.747-3.351,7.761l3.521,23.665l-35.836,14.844l-14.063-18.982V357.93 c4.039-1.196,8.039-2.608,11.938-4.223c29.412-12.182,52.318-35.09,64.5-64.5c12.182-29.411,12.182-61.807,0-91.217 c-25.149-60.714-95.005-89.648-155.719-64.5c-60.714,25.148-89.649,95.003-64.501,155.719 c13.937,33.648,41.659,58.492,76.44,68.717v32.613l-14.065,18.981l-35.836-14.844l3.532-23.73c0.448-3.013-0.85-6.021-3.351-7.761 c-14.259-9.922-26.459-22.096-36.261-36.185c-1.74-2.501-4.747-3.801-7.761-3.351l-23.665,3.521l-14.844-35.836l19.223-14.243 c2.449-1.814,3.657-4.859,3.118-7.859c-3.031-16.894-3.014-34.13,0.053-51.227c0.538-2.999-0.669-6.044-3.118-7.857 l-19.278-14.284l14.844-35.836l23.73,3.531c3.013,0.448,6.02-0.85,7.76-3.35c9.923-14.26,22.097-26.46,36.185-36.261 c2.501-1.739,3.8-4.747,3.351-7.76l-3.521-23.665l35.836-14.844l14.244,19.224c1.814,2.449,4.857,3.656,7.857,3.118 c16.892-3.031,34.127-3.014,51.227,0.053c2.997,0.538,6.042-0.67,7.856-3.118l14.284-19.278l35.836,14.844l-3.532,23.732 c-0.448,3.013,0.85,6.02,3.351,7.76c14.26,9.922,26.459,22.096,36.261,36.185c1.74,2.501,4.749,3.802,7.761,3.351l23.665-3.521 l14.844,35.835l-19.223,14.244c-2.449,1.814-3.657,4.858-3.118,7.857c3.031,16.895,3.014,34.13-0.053,51.227 c-0.538,2.999,0.669,6.044,3.118,7.857l19.277,14.284L407.076,327.167z"></path> </g> </g> </g></svg>
                    </div>
                    <p class="mt-4 text-base text-white laptop:text-xl desktop:text-2xl">Pengerjaan<br>desain 3D</p>
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mt-3">
                        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full desktop:w-14 desktop:h-14">
                            <span class="text-sm font-bold text-black laptop:text-lg desktop:text-xl">5</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Flow Bottom Step Perencanaan --}}
            <div class="grid grid-cols-5 mt-30">
                <div class="text-center"></div>
                <div class="text-center">
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mb-3">
                        <div class="flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full desktop:w-14 desktop:h-14">
                            <span class="text-sm font-bold text-black laptop:text-lg desktop:text-xl">8</span>
                        </div>
                        {{-- garis horizontal --}}
                        <div class="absolute w-full z-[-1] h-1 desktop:h-2 bg-white top-1/2 left-1/2 transform translate-y-[-50%]"></div>
                    </div>
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-yellow-500 rounded-full desktop:w-28 desktop:h-28">
                        {{-- icon --}}
                        <svg fill="#000000" class="w-13 h-100 desktop:w-18 desktop:h-100" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>hand-holding-hand</title> <path d="M29.064 19.701c-0.421-0.177-0.91-0.28-1.423-0.28-0.577 0-1.123 0.13-1.611 0.362l0.023-0.010-5.778 2.595c0.003-0.047 0.026-0.087 0.026-0.134-0.015-1.371-1.129-2.476-2.502-2.476-0.069 0-0.137 0.003-0.204 0.008l0.009-0.001h-3.783l-4.76-1.395c-0.062-0.020-0.133-0.031-0.207-0.031-0.001 0-0.003 0-0.004 0h-2.169v-0.757c-0-0.414-0.336-0.75-0.75-0.75h-3.883c-0.414 0-0.75 0.336-0.75 0.75v0 12.208c0 0.414 0.336 0.75 0.75 0.75h3.883c0.414-0 0.75-0.336 0.75-0.75v0-1.005c1.818 0.284 3.445 0.742 4.987 1.367l-0.149-0.054c1.15 0.416 2.478 0.656 3.862 0.656 0.007 0 0.014 0 0.021-0h-0.001c0.005 0 0.011 0 0.017 0 1.604 0 3.133-0.319 4.528-0.898l-0.078 0.029c1.243-0.553 2.298-1.136 3.297-1.799l-0.082 0.051c0.338-0.209 0.674-0.418 1.014-0.619 1.633-0.967 2.945-1.816 4.129-2.672 0.579-0.412 1.083-0.819 1.563-1.253l-0.014 0.013c0.373-0.302 0.671-0.682 0.871-1.116l0.008-0.019c0.031-0.079 0.048-0.17 0.048-0.266 0-0.057-0.006-0.112-0.018-0.165l0.001 0.005c-0.146-1.017-0.755-1.866-1.603-2.337l-0.016-0.008zM5.181 29.041h-2.383v-10.709h2.383zM28.719 22.541c-0.412 0.37-0.86 0.729-1.328 1.062l-0.047 0.032c-1.143 0.826-2.418 1.65-4.014 2.596-0.348 0.205-0.691 0.418-1.037 0.631-0.854 0.573-1.837 1.12-2.864 1.586l-0.13 0.053c-1.152 0.474-2.49 0.748-3.892 0.748-1.203 0-2.359-0.203-3.436-0.575l0.074 0.022c-1.555-0.648-3.363-1.145-5.248-1.407l-0.117-0.013v-7.436h2.062l4.76 1.395c0.062 0.020 0.133 0.031 0.207 0.031 0.001 0 0.003 0 0.004 0h3.89c0.883 0 1.197 0.521 1.197 0.969s-0.314 0.969-1.197 0.969h-6.809c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h7.781c0.001 0 0.003 0 0.004 0 0.11 0 0.214-0.024 0.307-0.068l-0.004 0.002 7.795-3.5c0.288-0.132 0.625-0.209 0.98-0.209 0.265 0 0.52 0.043 0.758 0.122l-0.017-0.005c0.383 0.23 0.658 0.604 0.752 1.046l0.002 0.011c-0.136 0.159-0.278 0.302-0.429 0.435l-0.005 0.004zM29.951 1.506h-3.883c-0.414 0-0.75 0.336-0.75 0.75v0 1.011c-1.814-0.279-3.443-0.74-4.981-1.374l0.143 0.052c-1.159-0.415-2.496-0.654-3.89-0.654-1.606 0-3.138 0.319-4.536 0.896l0.079-0.029c-1.242 0.552-2.297 1.136-3.295 1.8l0.081-0.051c-0.337 0.208-0.674 0.417-1.014 0.618-1.646 0.975-2.958 1.823-4.127 2.671-0.576 0.408-1.078 0.812-1.555 1.244l0.014-0.012c-0.377 0.304-0.678 0.686-0.882 1.123l-0.008 0.019c-0.032 0.081-0.051 0.175-0.051 0.273 0 0.056 0.006 0.11 0.017 0.162l-0.001-0.005c0.147 1.016 0.756 1.864 1.604 2.336l0.016 0.008c0.377 0.186 0.82 0.295 1.289 0.295 0.013 0 0.026-0 0.039-0l-0.002 0c0.612-0.008 1.191-0.142 1.715-0.377l-0.027 0.011 5.778-2.597c-0.003 0.047-0.026 0.088-0.026 0.135 0.014 1.371 1.129 2.477 2.502 2.477 0.069 0 0.136-0.003 0.204-0.008l-0.009 0.001h3.783l4.76 1.395c0.062 0.019 0.134 0.030 0.208 0.030 0.001 0 0.002 0 0.003 0h2.168v0.757c0 0.414 0.336 0.75 0.75 0.75h3.883c0.414-0 0.75-0.336 0.75-0.75v0-12.207c-0-0.414-0.336-0.75-0.75-0.75v0zM23.258 12.206l-4.76-1.394c-0.062-0.019-0.134-0.030-0.208-0.030-0.001 0-0.002 0-0.003 0h-3.89c-0.883 0-1.196-0.522-1.196-0.97s0.313-0.97 1.196-0.97h6.809c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-7.782c-0.111 0-0.217 0.024-0.312 0.067l0.005-0.002-7.793 3.503c-0.287 0.132-0.624 0.21-0.978 0.21-0.266 0-0.522-0.043-0.76-0.124l0.017 0.005c-0.382-0.229-0.657-0.604-0.751-1.045l-0.002-0.011c0.136-0.159 0.278-0.303 0.431-0.435l0.005-0.004c0.413-0.373 0.861-0.732 1.33-1.063l0.045-0.030c1.132-0.821 2.407-1.646 4.013-2.596 0.348-0.207 0.693-0.421 1.038-0.634 0.854-0.573 1.836-1.119 2.864-1.583l0.129-0.052c1.153-0.474 2.491-0.75 3.894-0.75 1.202 0 2.357 0.202 3.433 0.575l-0.074-0.022c1.554 0.647 3.362 1.145 5.245 1.409l0.118 0.014v7.434zM29.201 13.713h-2.383v-10.707h2.383z"></path> </g></svg>
                    </div>
                    <p class="mt-4 text-base text-white laptop:text-xl desktop:text-2xl">Penyerahan<br>Dokumen Hasil</p>
                </div>
                <div class="text-center">
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mb-3">
                        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full desktop:w-14 desktop:h-14">
                            <span class="text-sm font-bold text-black laptop:text-lg desktop:text-xl">7</span>
                        </div>
                        {{-- garis horizontal --}}
                        <div class="absolute w-full z-[-1] h-1 desktop:h-2 bg-white top-1/2 left-1/2 transform translate-y-[-50%]"></div>
                    </div>
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-white rounded-full desktop:w-28 desktop:h-28">
                        {{-- icon --}}
                        <svg fill="#000000" class="w-13 h-100 desktop:w-18 desktop:h-100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17,6 L17,16.2792476 L18.5,17.7902865 L20,16.2792476 L20,6 L17,6 Z M17,5 L20,5 L20,3.01471863 L17,3.01471863 L17,5 Z M21,7 L21,16.4852814 C21,16.6172545 20.9478236,16.7438756 20.8548472,16.8375362 L18.8548472,18.8522548 C18.6592928,19.0492484 18.3407072,19.0492484 18.1451528,18.8522548 L16.1451528,16.8375362 C16.0521764,16.7438756 16,16.6172545 16,16.4852814 L16,14 L15.5,14 C14.6715729,14 14,13.3284271 14,12.5 L14,9.5 C14,8.67157288 14.6715729,8 15.5,8 L16,8 L16,7 L6,7 L6,14.5 C6,14.7761424 5.77614237,15 5.5,15 L5,15 C3.34314575,15 2,16.3431458 2,18 C2,19.6568542 3.34314575,21 5,21 L22,21 L22,7 L21,7 Z M21,6 L22.5,6 C22.7761424,6 23,6.22385763 23,6.5 L23,21.5 C23,21.7761424 22.7761424,22 22.5,22 L5,22 C2.790861,22 1,20.209139 1,18 L1,6.5 C1,4.01471863 3.01471863,2 5.5,2 C5.77614237,2 6,2.22385763 6,2.5 L6,6 L16,6 L16,2.51471863 C16,2.23857625 16.2238576,2.01471863 16.5,2.01471863 L20.5,2.01471863 C20.7761424,2.01471863 21,2.23857625 21,2.51471863 L21,6 Z M16,9 L15.5,9 C15.2238576,9 15,9.22385763 15,9.5 L15,12.5 C15,12.7761424 15.2238576,13 15.5,13 L16,13 L16,9 Z M2,15.3541756 C2.73294445,14.5237549 3.80530747,14 5,14 L5,3.03544443 C3.30385293,3.27805926 2,4.73676405 2,6.5 L2,15.3541756 L2,15.3541756 Z M8.5,8 L11.5,8 C12.3284271,8 13,8.67157288 13,9.5 L13,12.5 C13,13.3284271 12.3284271,14 11.5,14 L8.5,14 C7.67157288,14 7,13.3284271 7,12.5 L7,9.5 C7,8.67157288 7.67157288,8 8.5,8 Z M8.5,9 C8.22385763,9 8,9.22385763 8,9.5 L8,12.5 C8,12.7761424 8.22385763,13 8.5,13 L11.5,13 C11.7761424,13 12,12.7761424 12,12.5 L12,9.5 C12,9.22385763 11.7761424,9 11.5,9 L8.5,9 Z M7.5,17 C7.22385763,17 7,16.7761424 7,16.5 C7,16.2238576 7.22385763,16 7.5,16 L14.5,16 C14.7761424,16 15,16.2238576 15,16.5 C15,16.7761424 14.7761424,17 14.5,17 L7.5,17 Z M7.5,19 C7.22385763,19 7,18.7761424 7,18.5 C7,18.2238576 7.22385763,18 7.5,18 L15.5,18 C15.7761424,18 16,18.2238576 16,18.5 C16,18.7761424 15.7761424,19 15.5,19 L7.5,19 Z"></path> </g></svg>
                    </div>
                    <p class="mt-4 text-base text-white laptop:text-xl desktop:text-2xl">Pengerjaan<br>Gambar Kerja & RAB</p>
                </div>
                <div class="text-center">
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mb-3">
                        <div class="flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full desktop:w-14 desktop:h-14">
                            <span class="text-sm font-bold text-black laptop:text-lg desktop:text-xl">6</span>
                        </div>
                        {{-- garis horizontal --}}
                        <div class="absolute w-full z-[-1] h-1 desktop:h-2 bg-white top-1/2 left-1/2 transform translate-y-[-50%]"></div>
                    </div>
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-yellow-500 rounded-full desktop:w-28 desktop:h-28">
                        {{-- icon --}}
                        <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-13 h-100 desktop:w-18 desktop:h-100" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#000000;}  </style> <g> <path class="st0" d="M335.859,68.875c0,0,4.656-12.469,29.734-28.297c24.063-15.172,5.594-36.141-29.734-28.422 C311.469,17.469,319.75,0,285.547,0s-25.922,17.469-50.313,12.156c-35.328-7.719-53.797,13.25-29.734,28.422 c25.078,15.828,29.734,28.297,29.734,28.297H335.859z"></path> <path class="st0" d="M432.063,224.453c0-7.141-4.234-13.281-10.328-16.109c6.094-2.844,10.344-8.969,10.344-16.109 c0-7.156-4.25-13.297-10.344-16.125c6.078-2.828,10.328-8.953,10.328-16.125c0-9.828-7.969-17.797-17.813-17.797h-59.375 c-9.828,0-17.813,7.969-17.813,17.797c0,7.172,4.25,13.297,10.344,16.125c-6.094,2.828-10.344,8.969-10.344,16.125 c0,7.141,4.25,13.266,10.344,16.109c-6.094,2.828-10.344,8.969-10.344,16.109c0,7.156,4.25,13.297,10.344,16.109 c-6.094,2.844-10.344,8.969-10.344,16.125c0,9.844,7.984,17.813,17.813,17.813h59.375c9.828,0,17.813-7.969,17.813-17.813 c0-7.156-4.25-13.281-10.328-16.109C427.813,237.75,432.063,231.609,432.063,224.453z"></path> <path class="st0" d="M346.203,89.641c-20,0-113.25,0-113.25,0c-48.969,0-62.656,38.328-100.578,38.328v121.641l16.578-0.766 c126.688-9.813,115.625-119.188,115.625-119.188s31.063,0,71.094,0C375.688,129.656,377.797,89.641,346.203,89.641z"></path> <rect x="64.703" y="113.75" class="st0" width="50.563" height="164.281"></rect> <path class="st0" d="M309.906,368.781c3.984-2.813,5.984-7.266,5.984-13.391c0-6.344-1.797-10.859-5.391-13.563 c-3.594-2.688-9.219-4.047-16.859-4.047H277.75V373h14.641C300.078,373,305.922,371.594,309.906,368.781z"></path> <path class="st0" d="M314.938,393.266c-1.797-1.484-4.094-2.641-6.906-3.422s-6.203-1.172-10.188-1.172H277.75v35.719h20.172 c4.219,0,7.734-0.516,10.578-1.516c2.828-1.016,5.109-2.359,6.813-4.047c1.719-1.688,2.953-3.641,3.703-5.891 c0.766-2.25,1.141-4.641,1.141-7.172c0-2.641-0.422-5.016-1.266-7.109C318.063,396.547,316.734,394.75,314.938,393.266z"></path> <path class="st0" d="M432.891,288.344c-5.469,3.219-11.828,5.125-18.641,5.125h-59.375c-20.266,0-36.766-16.5-36.766-36.781 c0-5.672,1.328-11.172,3.766-16.109c-2.438-4.938-3.766-10.438-3.766-16.125c0-5.672,1.328-11.172,3.766-16.109 c-2.438-4.938-3.766-10.438-3.766-16.109c0-5.688,1.328-11.188,3.766-16.125c-2.422-4.938-3.766-10.438-3.766-16.125 c0-3.969,0.641-7.781,1.813-11.359h-36.75c-1.703,18.797-7.984,47.141-28.594,71.813c-22.453,26.844-55.891,42.531-99.313,46.813 c-14.125,27.375-24.203,56.891-24.203,86.625c0,87.328,70.797,158.125,158.109,158.125c87.328,0,158.125-70.797,158.125-158.125 C447.297,331.625,441.625,309.531,432.891,288.344z M342.453,420.594c-1.969,4.391-4.828,8.156-8.594,11.344 c-3.75,3.172-8.391,5.656-13.906,7.453c-5.484,1.797-11.781,2.688-18.859,2.688h-2.484v12.328h-19.25v-12.328h-24.266h-7.953 v-9.891c0-2.922-0.188-4.672,2.609-5.281c0.25-0.047,0.609-0.094,1.063-0.188c0.469-0.094,1.297-0.234,2.516-0.453 c1.203-0.219-0.344-0.516,1.766-0.891v-88.422c-2.109-0.359-0.563-0.656-1.766-0.875c-1.219-0.234-2.047-0.359-2.516-0.453 c-0.453-0.078-0.813-0.156-1.063-0.188c-2.797-0.594-2.609-2.359-2.609-5.281v-9.891h7.953h24.266v-13.172h19.25v13.281 c5.875,0.25,11.031,0.969,15.453,2.156c5.656,1.516,10.297,3.688,13.906,6.5c3.625,2.797,6.281,6.188,7.953,10.188 c1.703,3.984,2.531,8.469,2.531,13.469c0,2.875-0.406,5.609-1.25,8.219c-0.859,2.609-2.156,5.063-3.922,7.344 c-1.781,2.266-4.016,4.328-6.75,6.188c-2.719,1.844-6.234,4.719-6.234,4.719c16.734,3.75,25.109,12.797,25.109,27.125 C345.406,411.438,344.422,416.219,342.453,420.594z"></path> </g> </g></svg>
                    </div>
                    <p class="mt-4 text-base text-white laptop:text-xl desktop:text-2xl">Pembayaran<br>Tahap Ketiga</p>
                </div>
                <div class="text-center">
                    {{-- nomor --}}
                    <div class="relative flex items-center justify-center mb-3">
                        <div class=""></div>
                        {{-- garis horizontal --}}
                        <div class="absolute w-[140px] desktop:w-[155px] z-[-1] h-1 desktop:h-2 bg-white top-[-54px] laptop:top-[-54px] desktop:top-[-48px] left-1/2 transform translate-x-[-50%] rotate-90"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".progress-slide-carousel", {
        loop: true,
        fraction: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".progress-slide-carousel .swiper-pagination",
            type: "progressbar",
        },
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const apiUrl = '/api/promo';
            const swiperWrapper = document.querySelector('.swiper-wrapper');
            axios.get(apiUrl)
                .then(response => {
                    const promos = response.data;
                    swiperWrapper.innerHTML = '';
                    const promoCards = promos.map(promo => {
                        const descriptionList = JSON.parse(promo.description);
                        return `
                        <div class="swiper-slide">
                            <div class="border-6 border-black rounded-[44px] h-[500px] desktop:h-[600px] overflow-hidden relative">
                                <img src="{{asset('assets/img/service/desain/bg-cardpromo.png')}}" alt="" class="absolute w-full h-full object-cover z-[-2]">
                                <div class="absolute inset-0 bg-white opacity-65 backdrop-brightness-50 z-[-1]"></div>
                                <div class="flex z-[9]">
                                    <div class="p-8 desktop:p-12">
                                        <h1 class="text-lg font-extrabold tracking-wide uppercase lg:text-3xl laptop:text-4xl desktop:text-5xl text-landing-brown-2">${promo.title}</h1>
                                        <div class="my-2 text-lg font-extrabold tracking-wider laptop:text-3xl desktop:text-4xl">
                                            <span class="line-through decoration-2 laptop:decoration-4 decoration-landing-brown-2">Rp. ${parseFloat(promo.actual_price).toLocaleString('id-ID')}</span>
                                        </div>
                                        <h1 class="text-3xl font-bold lg:text-4xl laptop:text-5xl desktop:text-6xl text-landing-brown-2">Rp. ${parseFloat(promo.price).toLocaleString('id-ID')}</h1>
                                        <ul class="my-2 mt-4">
                                            ${descriptionList.map(item => `<li class="text-base font-bold tracking-wider lg:text-lg desktop:text-xl text-landing-black-1">${item}</li>`).join('')}
                                        </ul>
                                        <div class="flex mt-10">
                                            <button class="px-4 py-1 text-xl font-extrabold tracking-wider transition duration-300 border-4 rounded-full text-landing-black-1 border-opacity-40 bg-landing-brown-2 bg-opacity-40 border-black-2">
                                                Dapatkan Promo!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
                    }).join('');

                    swiperWrapper.innerHTML = promoCards;
                    new Swiper('.swiper-container', {
                        loop: true,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                })
                .catch(error => {
                    console.error('Error fetching promos:', error);
                    swiperWrapper.innerHTML = '<p class="text-red-500">Failed to load promos.</p>';
                });
        });

    </script>

@endsection