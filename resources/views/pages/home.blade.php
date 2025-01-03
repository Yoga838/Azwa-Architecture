@extends("landing")

@section('subtitle', 'Home')

@section("content")

    <div class="flex flex-col items-center justify-center flex-shrink-0 w-full h-screen">
        <div class="flex w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('assets/img/BgHome.png') }}')">        
            <div class="flex items-center justify-center w-full">
                <div class="mx-5 text-center transform -translate-y-50 lg:mx-44 md:mx-20">
                    <p class="text-lg text-justify text-black lg:text-3xl md:text-xl">
                        Menciptakan Karya dengan Kenyamanan Tanpa Kata
                    </p>
                </div>  
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

    <div class="flex flex-col items-center justify-center w-full lg:flex-row">
        <!-- Gambar -->
        <div class="flex-shrink-0 w-full lg:max-w-md">
            <img src="{{ asset('assets/img/BgHome.png') }}" alt="Deskripsi Gambar" class="object-cover w-full h-auto">
        </div>
        
        <!-- Teks -->
        <div class="w-full p-6 text-black lg:max-w-md">
            <p class="mb-4 text-2xl text-center lg:text-3xl">
                Cari Jasa <strong>Desain Arsitektur dan Interior</strong> Bermutu?
            </p>
            <h1 class="mb-4 text-xl text-center lg:text-2xl">
                <strong>Azwa Design Studio</strong>
            </h1>
            <p class="mb-4 text-lg text-center">
                Siap mewujudkan keinginan Anda!
            </p>
            <p class="text-base text-center lg:text-lg">
                <strong>Kami memperhitungkan kekuatan struktur serta anggaran</strong> dengan optimal, sehingga menghasilkan bangunan yang <strong>estetik</strong> namun tetap <strong>aman, kokoh, dan sesuai kondisi keuangan Anda.</strong>
            </p>
        </div>
    </div>    

    <div class="flex items-center justify-center w-full h-auto px-2 lg:h-screen sm:px-4 md:px-6">
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

                <div class="relative w-full my-5 lg:my-40 md:my-20 sm:my-10">
                <div class="relative swiper centered-slide-carousel swiper-container ">
                <div class="flex justify-center invisible mb-10 lg:visible md:invisible sm:invisible">
                    <div class="flex items-center gap-3 me-3">
                        <div class="px-5 py-5 border rounded-full bg-black-2"></div>
                        <h1 class="font-semibold text-landing-brown-3">azwacontractor</h1>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp3.jpg')}}" alt="Slide 1" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp4.jpg')}}" alt="Slide 2" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp5.jpg')}}" alt="Slide 3" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/Enscape.png')}}" alt="Slide 4" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp1.jpg')}}" alt="Slide 5" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp2.jpg')}}" alt="Slide 6" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
                        </div>
                    </div>
                </div>
                
                <div class="swiper-pagination"></div>
                </div>
                <div class="relative z-20 flex justify-center invisible mt-2 lg:visible md:invisible sm:invisible">
                    <div class="px-8 py-2 border rounded-full bg-landing-brown-1">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                                <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                            </svg>
                            <h1>Follow us!</h1>
                        </div>
                    </div>
                </div>                    
                    <div class="absolute top-[50%] left-[50.5%] transform -translate-x-1/2 -translate-y-1/2 lg:visible md:invisible sm:invisible invisible">
                        <img src="{{asset('assets/img/home/hp.png')}}" alt="Frame" class="w-[100%] h-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="flex justify-center w-full h-auto mt-10 lg:h-screen sm:px-8 md:px-10">
    <div class="relative flex flex-col justify-start w-full max-w-7xl sm:my-2 md:my-3">
        <h1 class="mb-4 text-5xl font-extrabold text-theme3">Layanan Kami</h1>
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

<div class="flex justify-center w-full h-auto mt-[-220px] mb-10 lg:h-auto sm:px-8 md:px-10">
    <div class="relative flex flex-col justify-start w-full p-6 border-4 border-black max-w-7xl rounded-[30px]">
        
        <!-- Bagian judul -->
        <div class="flex flex-col items-start justify-start mb-2">
            <h1 class="text-4xl font-extrabold text-[#a46a27]">PROMO ARSITEKTUR</h1>
        </div>

        <!-- Harga promo -->
        <div class="mt-2">
            <span class="text-3xl font-bold line-through text-theme3 decoration-[#a46a27] decoration-thick">Rp. 100.000/m2</span>
            <h2 class="mt-1 text-6xl font-extrabold text-[#a46a27]">Rp. 35.000/m2</h2>
        </div>

        <!-- Daftar fasilitas dan tombol di kanan -->
        <div class="flex items-center justify-between mt-4">
            <ul class="text-lg list-disc list-inside">
                <li>Denah 2D</li>
                <li>Tampak Eksterior Render 3D (4+ Tampak)</li>
                <li>Gambar Kerja Arsitektur</li>
                <li>Gambar Kerja Struktur</li>
                <li>Gambar Kerja MEP</li>
                <li class="text-lg font-bold">BONUS: Rancangan Anggaran Biaya (RAB) + Upah Kerja dan Material</li>
            </ul>
            <button class="px-6 py-3 ml-4 text-xl font-bold transition duration-300 border-2 rounded-full text-theme3 bg-[#a48057] bg-brown-600 hover:bg-brown-700 hover:border-brown-700">
                Dapatkan Promo!
            </button>            
        </div>
    </div>
</div>

<div class="flex flex-col items-center justify-center flex-shrink-0 w-full h-screen">
    <div class="relative flex w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('assets/img/BgHome.png') }}')">
        <div class="absolute inset-0 bg-black opacity-20"></div> 
        <div class="flex items-start justify-start w-full h-full px-5 py-10">
            <div class="text-left transform translate-x-10 -translate-y-0">
                <p class="text-4xl font-extrabold text-theme3 lg:text-5xl md:text-2xl">
                    Pendapat Mereka
                </p>
            </div>  
        </div>
        <!-- Grid untuk dua kolom dua baris -->
        <div class="absolute grid w-full grid-cols-2 gap-6 px-10 my-30">
            <!-- Kolom 1, Baris 1 -->
            <div class="flex p-5 rounded-lg shadow-lg bg-theme3">
                <!-- Bagian kiri (Gambar) -->
                <div class="w-1/2 pr-4">
                    <img src="{{ asset('assets/img/porto/assets-1.jpg') }}" alt="Avatar 1" class="object-cover w-full h-48 rounded-lg">
                </div>
                <!-- Bagian kanan (Avatar dan Teks) -->
                <div class="w-1/2">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/img/avatar1.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                        <p class="ml-4 text-lg font-semibold text-theme1">Nama Pengguna</p>
                    </div>
                    <p class="mt-2 text-sm text-theme1">Deskripsi singkat tentang testimoni pertama atau feedback dari pengguna ini.</p>
                </div>
            </div>
            <!-- Kolom 2, Baris 1 -->
            <div class="flex p-5 rounded-lg shadow-lg bg-theme3">
                <!-- Bagian kiri (Gambar) -->
                <div class="w-1/2 pr-4">
                    <img src="{{ asset('assets/img/porto/assets-2.jpg') }}" alt="Avatar 2" class="object-cover w-full h-48 rounded-lg">
                </div>
                <!-- Bagian kanan (Avatar dan Teks) -->
                <div class="w-1/2">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/img/avatar2.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                        <p class="ml-4 text-lg font-semibold text-theme1">Nama Pengguna</p>
                    </div>
                    <p class="mt-2 text-sm text-theme1">Deskripsi singkat tentang testimoni kedua atau feedback dari pengguna ini.</p>
                </div>
            </div>
            <!-- Kolom 1, Baris 2 -->
            <div class="flex p-5 rounded-lg shadow-lg bg-theme3">
                <!-- Bagian kiri (Gambar) -->
                <div class="w-1/2 pr-4">
                    <img src="{{ asset('assets/img/porto/assets-3.png') }}" alt="Avatar 3" class="object-cover w-full h-48 rounded-lg">
                </div>
                <!-- Bagian kanan (Avatar dan Teks) -->
                <div class="w-1/2">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/img/avatar3.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                        <p class="ml-4 text-lg font-semibold text-theme1">Nama Pengguna</p>
                    </div>
                    <p class="mt-2 text-sm text-theme1">Deskripsi singkat tentang testimoni ketiga atau feedback dari pengguna ini.</p>
                </div>
            </div>
            <!-- Kolom 2, Baris 2 -->
            <div class="flex p-5 rounded-lg shadow-lg bg-theme3">
                <!-- Bagian kiri (Gambar) -->
                <div class="w-1/2 pr-4">
                    <img src="{{ asset('assets/img/porto/assets-4.jpg') }}" alt="Avatar 4" class="object-cover w-full h-48 rounded-lg">
                </div>
                <!-- Bagian kanan (Avatar dan Teks) -->
                <div class="w-1/2">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/img/avatar4.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                        <p class="ml-4 text-lg font-semibold text-theme1">Nama Pengguna</p>
                    </div>
                    <p class="mt-2 text-sm text-theme1">Deskripsi singkat tentang testimoni keempat atau feedback dari pengguna ini.</p>
                </div>
            </div>
        </div>
        <!-- Bagian Hello yang berada di bawah testimonial -->
        <div class="absolute bottom-0 w-full text-center mt-30"> <!-- Menambah margin atas untuk slider -->
            <div class="max-w-xl mx-auto border-2 border-gray-300 mt-90 rounded-2xl">
                <!-- Slider Container -->
                <div class="relative overflow-hidden">
                    <!-- Slider Track -->
                    <div class="flex transition-transform duration-500 ease-in-out transform" id="slider-track">
                        <!-- Slide 1 -->
                        <div class="flex-shrink-0 w-full p-4">
                            <p class="text-xl font-semibold">Slide 1 Content</p>
                        </div>
                        <!-- Slide 2 -->
                        <div class="flex-shrink-0 w-full p-4">
                            <p class="text-xl font-semibold">Slide 2 Content</p>
                        </div>
                        <!-- Slide 3 -->
                        <div class="flex-shrink-0 w-full p-4">
                            <p class="text-xl font-semibold">Slide 3 Content</p>
                        </div>
                    </div>
                    <!-- Navigation buttons -->
                    <button id="prev-slide" class="absolute left-0 px-4 py-2 text-white transform -translate-y-1/2 bg-gray-600 rounded-full top-1/2">Prev</button>
                    <button id="next-slide" class="absolute right-0 px-4 py-2 text-white transform -translate-y-1/2 bg-gray-600 rounded-full top-1/2">Next</button>
                </div>
            </div>
        </div>                           
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
                        slidesPerView: 2,
                        spaceBetween: 40
                    }
                },
            });
        </script>
@endsection