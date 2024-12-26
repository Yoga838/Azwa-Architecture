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
        .swiper-pagination-bullet {
            background: #4F46E5;
        }
        .swiper-pagination-bullet-active {
            background: #4F46E5 !important;
        }
    </style>
    <div class="w-full h-full flex justify-center relative">
        <div class="absolute z-[-1] w-full h-[450px] overflow-hidden">
            <div class="absolute inset-0 bg-white opacity-5"></div>
            <img src="{{asset('assets/img/service/kontraktor/bg1-servicekontraktor.JPG')}}" alt="" class="w-screen object-cover h-full">
        </div>
        <div class="py-32">
            {{-- <h1 class="font-bold text-[100px] text-landing-black-2">Services Kontraktor</h1> --}}
            <div class="mx-10">
                <p class="mt-20 text-center lg:text-6xl md:text-4xl text-2xl font-bold text-theme1 drop-shadow-2">
                    Membangun bersama Azwa Contractor,</br>Konstruksi Berkualitas, Solusi Tanpa Batas !
                </p>
            </div>
        </div>
    </div>
    <h1 class="text-landing-gold lg:text-4xl md:text-2xl text-md font-bold drop-shadow-2 text-center mt-10">KENAPA HARUS AZWA CONTRACTOR ?</h1>
    {{-- CardTag Free Design --}}
    <div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border px-5 py-4 bg-landing-brownLight-1 rounded-3xl">
            <div class="flex items-center">
                <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">
                    
                </div>
                <div class="">
                    <h1 class="font-bold lg:text-xl md:text-md text-xs">FREE DESIGN & FREE SURVEY</h1>
                    <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Dapatkan desain dan survei gratis untuk memastikan proyek Anda berjalan lancar dan tepat sasaran.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag Transparan --}}
    <div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border px-5 py-4 bg-landing-brownLight-2 rounded-3xl">
            <div class="flex items-center">
                <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

                </div>
                <div class="">
                    <h1 class="font-bold lg:text-xl md:text-md text-xs">TRANSPARAN</h1>
                    <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Memastikan proses yang jelas, terbuka, dan memberi Anda kepercayaan penuh sepanjang proyek.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag Rekanan Terpercaya --}}
    <div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border px-5 py-4 bg-landing-brownLight-1 rounded-3xl">
            <div class="flex items-center">
                <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

                </div>
                <div class="">
                    <h1 class="font-bold lg:text-xl md:text-md text-xs">REKANAN TERPERCAYA (SUPERVISI OLEH ARSITEK DAN TEKNIK SIPIL)</h1>
                    <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Bekerjasama dengan rekanan terpercaya untuk memastikan setiap tahap pengerjaan bangunan memenuhi standar kualitas dan keamanan tertinggi.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag Proses Mudah dan Aman --}}
    <div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border px-5 py-4 bg-landing-brownLight-2 rounded-3xl">
            <div class="flex items-center">
                <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

                </div>
                <div class="">
                    <h1 class="font-bold lg:text-xl md:text-md text-xs">PROSES MUDAH DAN AMAN</h1>
                    <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Proses kami mudah, aman, dan terjamin dalam memastikan setiap tahap berjalan lancar dengan hasil sesuai harapan.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag dOKUMENTASI PROYEK --}}
    <div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border px-5 py-4 bg-landing-brownLight-1 rounded-3xl">
            <div class="flex items-center">
                <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

                </div>
                <div class="">
                    <h1 class="font-bold lg:text-xl md:text-md text-xs">DOKUMENTASI PROYEK DAN PENDAMPINGAN</h1>
                    <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Memastikan setiap tahap tercatat dengan jelas dan berjalan sesuai rencana.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag BERGARANSI --}}
    <div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border px-5 py-4 bg-landing-brownLight-2 rounded-3xl">
            <div class="flex items-center">
                <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

                </div>
                <div class="">
                    <h1 class="font-bold lg:text-xl md:text-md text-xs">BERGARANSI</h1>
                    <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Jasa kami dilengkapi garansi anti bocor dan retak struktur, memberikan jaminan ketahanan dan kualitas bangunan yang tahan lama.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-50 w-full h-full flex items-center relative">
        <div class="absolute z-[-1] w-full h-[450px] overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="{{asset('assets/img/service/kontraktor/bg2-servicekontraktor.JPG')}}" alt="" class="w-screen object-cover h-full">
        </div>
        <div class="py-10 mt-30">
            <h1 class="font-bold text-5xl text-theme1 drop-shadow-2 ml-10">Konstruksi Arsitektural</h1>
        </div>
    </div>
    {{-- Card Konstruksi Interior --}}
    <div class="flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border w-[700px] h-full bg-theme3 rounded-3xl">
            <div class="text-center">
                <h1 class="mt-5 font-bold lg:text-3xl text-lg text-landing-gold">MULAI 3,5 JUTA / M2</h1>
                <p class="font-normal lg:text-sm md:text-md text-xs text-landing-gold md:tracking-wider tracking-tight">*non-metropolitan (bukan kota besar)</p>
            </div>
            <div class="lg:mx-20 md:mx-20 mx-10 mt-10">
                <h3 class="text-white">FASILITAS :</h3>
                <ul class="">
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">FREE DESIGN DAN RANCANGAN ANGGARAN BIAYA (RAB)</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">PEKERJAAN PONDASI</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">PEKERJAAN STRUKTUR BAJA / BETON (SLOOF, KOLOM, BALOK, ATAP)</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">PEKERJAAN ARSITEKTURAL (DINDING DAN ORNAMEN FASAD, LANTAI)</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">PEKERJAAN MEP</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">PEKERJAAN FINISHING (CAT, BATU ALAM, DLL)</p>
                    </li>
                </ul>
                <div class="mt-5 mb-5">
                    <h3 class="text-white">LAYANAN LAIN :</h3>
                    <ul class="">
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">PEMBUATAN KANOPI</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">PEMBUATAN LANSKAP (TAMAN, KOLAM IKAN)</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">PEMBUATAN PAGAR BESI</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">PEKERJAAN PAVING</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">PEMBUATAN KOLAM RENANG</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border px-5 py-2 w-full rounded-full bg-theme2 outline-none">
                <h1 class="text-white font-bold text-center">PILIH PAKET</h1>
            </div>
        </div>
    </div>

    <div class="mt-50 w-full h-full flex items-center relative">
        <div class="absolute z-[-1] w-full h-[450px] overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="{{asset('assets/img/service/kontraktor/bg3-servicekontraktor.JPG')}}" alt="" class="w-screen object-cover h-full">
        </div>
        <div class="py-10 mt-30">
            <h1 class="font-bold text-5xl text-theme1 drop-shadow-2 ml-10">Konstruksi Interior</h1>
        </div>
    </div>
    {{-- Card Konstruksi Interior --}}
    <div class="flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border w-[700px] h-full bg-theme3 rounded-3xl">
            <div class="text-center">
                <h1 class="mt-5 font-bold lg:text-3xl text-lg text-landing-gold">MULAI 2 JUTA / M2</h1>
                <p class="font-normal lg:text-sm md:text-md text-xs text-landing-gold md:tracking-wider tracking-tight">*non-metropolitan (bukan kota besar)</p>
            </div>
            <div class="lg:mx-20 md:mx-20 mx-10 mt-10">
                <h3 class="text-white">FASILITAS :</h3>
                <ul class="">
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">FREE DESIGN DAN RANCANGAN ANGGARAN BIAYA (RAB) SUPERVISI</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">PEKERJAAN FURNITUR 1 RUANGAN</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-md">FREE PENGIRIMAN *S&K BERLAKU</p>
                    </li>
                </ul>
                <div class="mt-5 mb-5">
                    <h3 class="text-white">LAYANAN LAIN :</h3>
                    <ul class="">
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">KITCHEN SET & MINI BAR</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">WALK IN CLOSET</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">LEMARI (LEMARI BAJU, ETALASE / DISPLAY)</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">BUFFET & CABINET</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">SOFA</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">DIVAN KASUR / TEMPAT TIDUR (SPRING BOX)</p>
                        </li>
                        <li class="list-disc text-white ml-8">
                            <p class="text-white text-md">MEJA CUSTOM (MEJA KANTOR, MEJA MEETING, MEJA KOMPUTER, MEJA RESEPSIONIS, MEJA MAKAN)</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border px-5 py-2 w-full rounded-full bg-theme2 outline-none">
                <h1 class="text-white font-bold text-center">PILIH PAKET</h1>
            </div>
        </div>
    </div>

     {{-- Carousel Slider --}}
    <div class="w-full relative lg:my-60 md:my-20 sm:my-10 my-5">
    <div class="swiper centered-slide-carousel swiper-container relative ">
    <div class="flex justify-center mb-10 lg:visible md:invisible sm:invisible invisible">
        <div class="flex items-center gap-3 mr-10">
            <div class="border bg-black-2 px-5 py-5 rounded-full"></div>
            <h1 class="font-semibold text-landing-brown-3">azwacontractor</h1>
        </div>
    </div>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="bg-indigo-50 rounded-2xl h-64 flex justify-center items-center overflow-hidden">
                {{-- <span class="text-3xl font-semibold text-indigo-600">Slide 1 </span> --}}
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp3.jpg.jpg')}}" alt="Slide 1" class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="bg-indigo-50 rounded-2xl h-64 flex justify-center items-center overflow-hidden">
                {{-- <span class="text-3xl font-semibold text-indigo-600">Slide 2 </span> --}}
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp4.jpg.jpg')}}" alt="Slide 1" class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="bg-indigo-50 rounded-2xl h-64 flex justify-center items-center overflow-hidden">
                {{-- <span class="text-3xl font-semibold text-indigo-600">Slide 3 </span> --}}
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp5.jpg.JPG')}}" alt="Slide 1" class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="bg-indigo-50 rounded-2xl h-64 flex justify-center items-center overflow-hidden">
                {{-- <span class="text-3xl font-semibold text-indigo-600">Slide 4 </span> --}}
                <img src="{{asset('assets/img/Enscape.png')}}" alt="Slide 1" class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="bg-indigo-50 rounded-2xl h-64 flex justify-center items-center overflow-hidden">
                {{-- <span class="text-3xl font-semibold text-indigo-600">Slide 5 </span> --}}
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp1.jpg')}}" alt="Slide 1" class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="bg-indigo-50 rounded-2xl h-64 flex justify-center items-center overflow-hidden">
                {{-- <span class="text-3xl font-semibold text-indigo-600">Slide 6 </span> --}}
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp2.jpg.JPG')}}" alt="Slide 1" class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    </div>
    <div class="flex justify-center mt-2 lg:visible md:invisible sm:invisible invisible">
        <div class="border bg-landing-brown-1 px-8 py-2 rounded-full">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                    <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                </svg>
                <h1>Follow us!</h1>
            </div>
        </div>
    </div>
    <div class="absolute top-[50%] left-[50.5%] transform -translate-x-1/2 -translate-y-1/2 lg:visible md:invisible sm:invisible invisible">
        <img src="{{asset('assets/img/service/kontraktor/bg-framehp.png')}}" alt="Frame" class="w-[100%] h-auto">
    </div>
    </div>


    <script src="{{asset('resources/script.js')}}"></script>    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".centered-slide-carousel", {
            centeredSlides: true,
            paginationClickable: true,
            loop: true,
            spaceBetween: 60,
            slideToClickedSlide: true,
            pagination: {
                el: ".centered-slide-carousel .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1920: {
                    slidesPerView: 5,
                    spaceBetween: 40,
                },
                1028: {
                    slidesPerView: 5,
                    spaceBetween: 40,
                },
                990: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                640: {
                    slidePerView: 2,
                    spaceBetween: 40
                }
            },
        });
    </script>
        
@endsection