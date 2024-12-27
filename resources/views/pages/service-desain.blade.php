@extends("landing")

@section("content")
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

@endsection