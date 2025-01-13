@extends("landing")

@section('subtitle', 'Home')

@section("content")

<div class="relative flex flex-col items-center justify-center w-full h-screen">
    <!-- Swiper Slider Section -->
    <div class="absolute w-full h-full swiper centered-slide-carousel-3">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/BgHome.png') }}');"></div>
            <!-- Slide 2 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/service/desain/bg-cardpromo.png') }}');"></div>
            <!-- Slide 3 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/porto/assets-7.jpg') }}');"></div>
        </div>
    </div>
</div>

    <div class="w-full bg-[#7a6a58]">
        <div class="flex flex-wrap items-center justify-around w-full">
            <div class="flex flex-col items-center justify-center w-full my-5 sm:w-1/3">
                <div class="flex items-center justify-center w-24 h-24 my-4 bg-black rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 576 512">
                        <path fill="white" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0M571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93"/>
                    </svg>
                </div>
                <h1 class="mb-8 text-justify text-white text-[24px]">
                    <strong>ONE-STOP SERVICE</strong>
                </h1>
                <p class="text-center text-white text-[18px] w-[300px]">
                    Layanan lengkap dari desain, pembangunan, perizinan dalam satu tempat.
                </p>
            </div>
            
            <div class="flex flex-col items-center justify-center w-full my-5 sm:w-1/3">
                <div class="flex items-center justify-center w-24 h-24 my-4 bg-black rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 576 512">
                        <path fill="white" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0M571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93"/>
                    </svg>
                </div>
                <h1 class="mb-8 text-justify text-white text-[24px]">
                    <strong>GRATIS KONSULTASI</strong>
                </h1>
                <p class="text-center text-white text-[18px] w-[300px]">
                    Dapatkan sesi konsultasi gratis untuk solusi desain yang sesuai dengan kebutuhan Anda.
                </p>
            </div>
            
            <div class="flex flex-col items-center justify-center w-full my-5 sm:w-1/3">
                <div class="flex items-center justify-center w-24 h-24 my-4 bg-black rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 576 512">
                        <path fill="white" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0M571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93"/>
                    </svg>
                </div>
                <h1 class="mb-8 text-justify text-white text-[24px]">
                    <strong>HASIL BERKUALITAS</strong>
                </h1>
                <p class="text-center text-white text-[18px] w-[300px]">
                    Desain inovatif, struktur kokoh terjamin, dan rencana anggaran yang akurat.
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center w-full px-10 my-15 lg:flex-row">
        <!-- Gambar -->
        <div class="flex-shrink-0 w-full lg:w-2/6">
            <img src="{{ asset('assets/img/home/bg-jasa.png') }}" alt="Deskripsi Gambar" class="object-cover w-full h-auto">
        </div>
    
        <!-- Teks -->
        <div class="w-full p-6 text-black lg:w-3/6">
            <p class="mb-4 text-6xl text-center lg:text-5xl">
                Cari Jasa <strong>Desain Arsitektur dan Interior</strong> Bermutu?
            </p>
            <h1 class="mb-4 text-4xl text-center lg:text-3xl">
                <strong>Azwa Design Studio</strong>
            </h1>
            <p class="mb-4 text-2xl text-center">
                Siap mewujudkan keinginan Anda!
            </p>
            <p class="text-xl text-center lg:text-2xl">
                <strong>Kami memperhitungkan kekuatan struktur serta anggaran</strong> dengan optimal, sehingga menghasilkan bangunan yang <strong>estetik</strong> namun tetap <strong>aman, kokoh, dan sesuai kondisi keuangan Anda.</strong>
            </p>
            <div class="mt-6 text-center">
                <a href="#link-ke-halaman-lain" class="inline-block px-20 py-2 mx-2 mt-10 text-xl text-white rounded-3xl bg-theme2">
                    Lebih Lanjut
                </a>
            </div>
        </div>             
    </div>

    <div class="flex items-center justify-center w-full h-auto px-2 my-15 lg:h-screen sm:px-4 md:px-6">
        <div class="relative flex items-center justify-center w-full my-2 mx-15 sm:my-4 md:my-6">
            <div 
                class="w-full max-w-[calc(100%-7.5rem)] h-[350px] sm:h-[500px] md:h-[600px] lg:h-[700px] bg-center bg-cover rounded-xl sm:rounded-2xl md:rounded-3xl relative overflow-hidden"
                style="background-image: url('{{ asset('assets/img/home/bg-portofolio.jpg') }}');">
    
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/80 rounded-xl sm:rounded-2xl md:rounded-3xl"></div>
    
                <!-- Judul -->
                <h1 class="absolute text-base font-bold text-white sm:text-lg md:text-xl lg:text-3xl top-4 sm:top-6 md:top-8 left-4 sm:left-6 md:left-8">
                    Portofolio Kami
                </h1>

                <div class="relative w-full desktop:my-25 laptop:my-10 lg:mt-15 md:my-10 sm:my-5">
                <div class="relative swiper centered-slide-carousel-1 swiper-container ">
                <div class="flex justify-center invisible mb-10 desktop:visible laptop:visible md:invisible sm:invisible">
                    <div class="flex items-center gap-3 desktop:mt-1 laptop:mt-30 me-3">
                        <div class="p-5 border rounded-full bg-black-2 desktop:p-7 laptop:p-5 md:p-5"></div>
                        <h1 class="text-xs font-semibold text-landing-brown-3 desktop:text-xl laptop:text-base md:text-xs">azwadesignstudio</h1>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl desktop:h-75 laptop:h-84 md:h-64">
                            <img src="{{asset('assets/img/home/portofolio1.png')}}" alt="Slide 1" class="object-cover w-1/2 h-full laptop:w-4/5 desktop:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>                        
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl desktop:h-75 laptop:h-84 md:h-64">
                            <img src="{{asset('assets/img/BgHome.png')}}" alt="Slide 2" class="object-cover w-1/2 h-full laptop:w-4/5 desktop:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl desktop:h-75 laptop:h-84 md:h-64">
                            <img src="{{asset('assets/img/home/portofolio2.png')}}" alt="Slide 3" class="object-cover w-1/2 h-full laptop:w-4/5 desktop:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl desktop:h-75 laptop:h-84 md:h-64">
                            <img src="{{asset('assets/img/home/portofolio3.png')}}" alt="Slide 4" class="object-cover w-1/2 h-full laptop:w-4/5 desktop:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl desktop:h-75 laptop:h-84 md:h-64">
                            <img src="{{asset('assets/img/home/portofolio4.png')}}" alt="Slide 5" class="object-cover w-1/2 h-full laptop:w-4/5 desktop:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>
                    </div>
                </div>                
                
                <div class="swiper-pagination"></div>
                </div>
                <div class="relative z-50 flex justify-center mt-5 desktop:visible laptop:visible md:invisible sm:invisible">
                    <div class="border rounded-full bg-landing-brown-1 desktop:px-9 laptop:px-8 desktop:py-3 laptop:py-2">
                        <div class="flex items-center gap-2 text-xs desktop:text-xl laptop:text-base md:text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                                <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                            </svg>
                            <h1>Follow us!</h1>
                        </div>
                    </div>
                </div>                    
                <div class="absolute top-[60%] left-[50.5%] desktop:top-[50%] transform -translate-x-1/2 -translate-y-1/2 lg:visible md:invisible sm:invisible z-0">
                    <img src="{{asset('assets/img/home/hp.png')}}" alt="Frame" class="w-[100%] h-auto">
                </div>
                </div>
            </div>
        </div>
    </div>


<div class="flex justify-center w-full mt-10 lg:h-[700] sm:px-8 md:px-10">
    <div class="relative flex flex-col justify-start w-full desktop:max-w-screen-desktop laptop:max-w-screen-laptop sm:my-2 md:my-3">
        <h1 class="mb-8 text-5xl font-extrabold text-theme3">Layanan Kami</h1>
        <div class="flex justify-center gap-8">
            <div class="relative w-3/4 overflow-hidden lg:w-1/2 rounded-2xl">
                <img src="{{asset('assets/img/porto/assets-7.jpg')}}" alt="Arsitektur" class="w-full h-auto">
                <div class="absolute inset-0 flex px-5 py-3 transition-opacity duration-300 bg-black-2 bg-opacity-70">
                    <h3 class="text-3xl font-bold text-white">Arsitektur</h3>
                </div>
            </div>
            <div class="relative w-3/4 overflow-hidden lg:w-1/2 rounded-2xl">
                <img src="{{asset('assets/img/porto/assets-6.jpg')}}" alt="Interior" class="object-cover w-full h-80">
                <div class="absolute inset-0 flex px-5 py-3 transition-opacity duration-300 bg-black-2 bg-opacity-70">
                    <h3 class="text-3xl font-bold text-white">Interior</h3>
                </div>
            </div>
        </div>
    </div>
</div>    

<div class="relative w-full px-5 lg:px-36 laptop:px-40 desktop:px-52">
    <div class="relative swiper progress-slide-carousel swiper-container1">
        <div class="swiper-promo swiper-wrapper">
            {{-- Dinamis card promo --}}
        </div>
        <div class="swiper-pagination1 !bottom-2 !top-auto !w-80 right-0 mx-auto bg-gray-100"></div>
    </div>
</div>

<div class="relative flex flex-col w-full h-auto overflow-hidden desktop:pb-15 laptop:pb-15 md:pb-20 sm:pb-10">
    <!-- Latar Belakang dengan Overlay -->
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('{{ asset('assets/img/BgHome.png') }}')">
        <div class="absolute inset-0 bg-black opacity-20"></div>
    </div>

    <!-- Judul di Pojok Kiri Atas -->
    <div class="absolute z-10 px-5 top-5 left-5">
        <p class="text-4xl font-extrabold text-theme3 lg:text-5xl md:text-3xl sm:text-2xl">Pendapat Mereka</p>
    </div>

    <!-- Grid Testimoni -->
    <div class="relative z-10 grid w-full grid-cols-1 gap-6 px-10 py-20 mx-auto mt-10 lg:grid-cols-2 max-w-7xl">
        <!-- Testimoni 1 -->
        <div class="flex p-5 rounded-lg shadow-lg bg-theme3">
            <div class="w-full pr-4 sm:w-1/2">
                <img src="{{ asset('assets/img/porto/assets-1.jpg') }}" alt="Avatar 1" class="object-cover w-full h-48 rounded-lg">
            </div>
            <div class="w-full mt-4 sm:w-1/2 sm:mt-0">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/avatar1.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                    <p class="ml-4 text-lg font-semibold text-theme1">Nama Pengguna</p>
                </div>
                <p class="mt-2 text-sm text-theme1">Deskripsi singkat tentang testimoni pertama atau feedback dari pengguna ini.</p>
            </div>
        </div>

        <!-- Testimoni 2 -->
        <div class="flex p-5 rounded-lg shadow-lg bg-theme3">
            <div class="w-full pr-4 sm:w-1/2">
                <img src="{{ asset('assets/img/porto/assets-2.jpg') }}" alt="Avatar 2" class="object-cover w-full h-48 rounded-lg">
            </div>
            <div class="w-full mt-4 sm:w-1/2 sm:mt-0">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/avatar2.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                    <p class="ml-4 text-lg font-semibold text-theme1">Nama Pengguna</p>
                </div>
                <p class="mt-2 text-sm text-theme1">Deskripsi singkat tentang testimoni kedua atau feedback dari pengguna ini.</p>
            </div>
        </div>

        <!-- Testimoni 3 -->
        <div class="flex p-5 rounded-lg shadow-lg bg-theme3">
            <div class="w-full pr-4 sm:w-1/2">
                <img src="{{ asset('assets/img/porto/assets-3.png') }}" alt="Avatar 3" class="object-cover w-full h-48 rounded-lg">
            </div>
            <div class="w-full mt-4 sm:w-1/2 sm:mt-0">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/avatar3.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                    <p class="ml-4 text-lg font-semibold text-theme1">Nama Pengguna</p>
                </div>
                <p class="mt-2 text-sm text-theme1">Deskripsi singkat tentang testimoni ketiga atau feedback dari pengguna ini.</p>
            </div>
        </div>

        <!-- Testimoni 4 -->
        <div class="flex p-5 rounded-lg shadow-lg bg-theme3">
            <div class="w-full pr-4 sm:w-1/2">
                <img src="{{ asset('assets/img/porto/assets-4.jpg') }}" alt="Avatar 4" class="object-cover w-full h-48 rounded-lg">
            </div>
            <div class="w-full mt-4 sm:w-1/2 sm:mt-0">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/avatar4.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                    <p class="ml-4 text-lg font-semibold text-theme1">Nama Pengguna</p>
                </div>
                <p class="mt-2 text-sm text-theme1">Deskripsi singkat tentang testimoni keempat atau feedback dari pengguna ini.</p>
            </div>
        </div>
    </div>

    <!-- Slider Swiper -->
    <div class="relative z-10 w-full mx-auto min-w-6xl">
        <div class="swiper centered-slide-carousel-2 swiper-container">
            <div class="swiper-wrapper">
                <!-- Multiple Slides -->
                <div class="flex items-center justify-center swiper-slide">
                    <img src="{{ asset('assets/img/home/testimoni/1.jpeg') }}" alt="Slide 1" class="object-cover w-auto h-[500px] sm:h-[600px] lg:h-[700px] rounded-2xl">
                </div>
                <div class="flex items-center justify-center swiper-slide">
                    <img src="{{ asset('assets/img/home/testimoni/2.jpeg') }}" alt="Slide 2" class="object-cover w-auto h-[500px] sm:h-[600px] lg:h-[700px] rounded-2xl">
                </div>
                <div class="flex items-center justify-center swiper-slide">
                    <img src="{{ asset('assets/img/home/testimoni/3.jpeg') }}" alt="Slide 3" class="object-cover w-auto h-[500px] sm:h-[600px] lg:h-[700px] rounded-2xl">
                </div>
                <!-- More slides here -->
            </div>
        </div>        

        <!-- Gambar BG -->
        <div class="z-9 absolute left-[556.5px] desktop:left-[556.5px] laptop:left-[360.5px] lg:visible md:invisible sm:invisible invisible transform -translate-y-[90%]">
            <img src="{{ asset('assets/img/home/hpTes.png') }}" alt="Frame" class="w-[825px] h-[865px]">
        </div>                        
    </div>        
</div>
 
        <script src="{{asset('resources/script.js')}}"></script>    
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            var swiper2 = new Swiper(".centered-slide-carousel-2", {
                centeredSlides: true,
                paginationClickable: true,
                loop: true,
                spaceBetween: 20,
                slideToClickedSlide: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    1920: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    1028: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    990: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    }
                },
            });

            var swiper3 = new Swiper(".centered-slide-carousel-3", {
                centeredSlides: true,
                paginationClickable: true,
                loop: true,
                spaceBetween: 20,
                slideToClickedSlide: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    1920: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    1028: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    990: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    }
                },
            });

            var swiper1 = new Swiper(".centered-slide-carousel-1", {
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
                        slidesPerView: 5,  // Hanya 1 slide per view
                        spaceBetween: 40,
                    },
                    1028: {
                        slidesPerView: 5,  // Hanya 1 slide per view
                        spaceBetween: 40,
                    },
                    990: {
                        slidesPerView: 5,  // Hanya 1 slide per view
                        spaceBetween: 40,
                    },
                    768: {
                        slidesPerView: 5,  // Hanya 1 slide per view
                        spaceBetween: 40,
                    },
                    640: {
                        slidesPerView: 5,  // Hanya 1 slide per view
                        spaceBetween: 40,
                    }
                },
            });

            var swiper4 = new Swiper(".progress-slide-carousel", {
            loop: true,
            fraction: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".progress-slide-carousel .swiper-pagination1",
                type: "progressbar",
            },
            });
    </script>
    <script>
       document.addEventListener('DOMContentLoaded', () => {
            const apiUrl = '/api/promo';
            const swiperWrapper = document.querySelector('.swiper-promo');
            axios.get(apiUrl)
                .then(response => {
                    const promos = response.data;
                    swiperWrapper.innerHTML = '';
                    const promoCards = promos.map(promo => {
                        const descriptionList = JSON.parse(promo.description);
                        return `
                        <div class="my-15 swiper-slide">
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
                    new Swiper('.swiper-container1', {
                        loop: true,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination1',
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