@extends("landing")

@section('subtitle', 'Home')

@section("content")
<style>
    .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: #5d4e40 !important;
        margin-bottom: 20px;
    }
</style>

<div class="relative flex flex-col items-center justify-center w-full h-screen">

    <!-- Overlay Hitam -->
    <div class="absolute inset-0 z-10 bg-opacity-30 bg-theme2"></div>

    <!-- Swiper Slider Section -->
    <div class="absolute z-0 w-full h-full swiper centered-slide-carousel-3">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/BgHome.png') }}');"></div>
            <!-- Slide 2 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/service/desain/bg-cardpromo.png') }}');"></div>
            <!-- Slide 3 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/porto/assets-7.jpg') }}');"></div>
            <!-- Slide 4 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/home/portofolio1.png') }}');"></div>
            <!-- Slide 5 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/home/portofolio2.png') }}');"></div>
            <!-- Slide 6 -->
            <div class="bg-center bg-cover swiper-slide" style="background-image: url('{{ asset('assets/img/home/portofolio3.png') }}');"></div>
        </div>
    </div>

    <!-- Teks Judul -->
    <div class="absolute z-10 bottom-20 left-15">
        <h1 class="mb-4 text-4xl font-bold text-[#e1dfd4] lg:text-5xl drop-shadow-[4px_4px_6px_black]">
            Merangkai Ruang <br>
        </h1>
        <h1 class="text-4xl font-bold text-[#e1dfd4] lg:text-5xl drop-shadow-[4px_4px_6px_black]">
            Mewujudkan Impian
        </h1>
    </div>    
</div>


<div class="relative w-full py-10">
    <div class="absolute inset-0 bg-[#7a6a58] opacity-60"></div>
    <div data-aos="fade-right" data-aos-duration="1000" class="relative z-10 grid items-center justify-around grid-cols-1 gap-8 px-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- ONE-STOP SERVICE -->
        <div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center w-24 h-24 my-4 rounded-full opacity-75 bg-theme3">
                <img src="{{ asset('assets/img/home/icon1.png') }}" alt="Home Icon" width="50" height="50">
            </div>
            <h1 class="mb-4 text-center font-extrabold text-[#251d16] text-[20px] lg:text-[35px]">
                <p>
                    <strong>ONE-STOP</strong>
                </p>
                <p><strong>SERVICE</strong></p>
            </h1>
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                Layanan <span class="text-white">lengkap</span> dari desain,
            </p>            
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                pembangunan, perizinan
            </p>
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                dalam <span class="text-white">satu tempat</span>.
            </p>
        </div>
    
        <!-- GRATIS KONSULTASI -->
        <div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center w-24 h-24 my-4 rounded-full opacity-75 bg-theme3">
                <img src="{{ asset('assets/img/home/icon2.png') }}" alt="Home Icon" width="50" height="50">
            </div>
            <h1 class="mb-4 text-center font-extrabold text-[#251d16] text-[20px] lg:text-[35px]">
                <p>
                    <strong>GRATIS</strong>
                </p>
                <p>
                    <strong>KONSULTASI</strong>
                </p>
            </h1>
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                Dapatkan sesi konsultasi <span class="text-white">gratis</span>
            </p>
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                untuk solusi desain yang sesuai
            </p>
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                dengan kebutuhan Anda.
            </p>
        </div>
    
        <!-- HASIL BERKUALITAS -->
        <div class="flex flex-col items-center justify-center md:col-span-2 lg:col-span-1">
            <div class="flex items-center justify-center w-24 h-24 my-4 rounded-full opacity-75 bg-theme3">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 576 512">
                    <path fill="white" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0M571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93"/>
                </svg>
            </div>
            <h1 class="mb-4 text-center font-extrabold text-[#251d16] text-[20px] lg:text-[35px]">
                <p>
                    <strong>HASIL</strong>
                </p>
                <p>
                    <strong>BERKUALITAS</strong>
                </p>
            </h1>
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                Desain <span class="text-white">inovatif</span>, struktur <span class="text-white">kokoh</span>
            </p>
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                terjamin, dan rencana
            </p>
            <p class="text-center font-bold text-[#251d16] text-[16px] lg:text-[25px] max-w-[400px]">
                anggaran yang <span class="text-white">akurat</span>.
            </p>
        </div>
    </div>    
</div>

    <div class="flex flex-col items-center justify-center w-full px-10 xl:mt-30 lg:mt-20 sm:mt-20 lg:flex-row">
        <!-- Gambar -->
        <div data-aos="fade-right" data-aos-duration="1000" class="flex-shrink-0 w-full lg:w-2/6">
            <img src="{{ asset('assets/img/home/bg-jasa.png') }}" alt="Deskripsi Gambar" class="object-cover w-full h-auto">
        </div>
    
        <!-- Teks -->
        <div data-aos="fade-left" data-aos-duration="1000" class="relative w-full p-6 text-black xl:w-3/6 lg:w-4/6">
            <!-- Background image -->
            <div class="absolute inset-0 bg-top bg-no-repeat bg-cover opacity-20" style="background-image: url('{{ asset('assets/img/HeadLogo_Azwa.png') }}'); background-position: top center; background-size: contain;"></div>
        
            <!-- Konten teks -->
            <div class="relative p-6">
                <p class="mb-4 text-6xl text-center lg:text-4xl">
                    Cari Jasa
                </p>
                <p class="mb-4 text-6xl font-extrabold text-center xl:text-4xl lg:text-3xl">
                    <strong>Desain Arsitektur dan Interior</strong>
                </p>
                <p class="mb-4 text-6xl text-center xl:text-4xl lg:text-4xl">
                    Bermutu?
                </p>
                <h1 class="mt-10 mb-4 text-4xl text-center xl:text-4xl lg:text-3xl">
                    <strong>Azwa Design Studio</strong>
                </h1>
                <p class="mb-4 text-2xl text-center">
                    Siap mewujudkan keinginan Anda!
                </p>
                <p class="mt-10 text-xl text-center 2xl:text-2xl lg:text-xl">
                    <strong>Kami memperhitungkan kekuatan struktur</strong>
                </p>
                <p class="text-xl text-center 2xl:text-2xl lg:text-xl">
                    <strong>serta anggaran</strong> dengan optimal, sehingga menghasilkan
                </p>
                <p class="text-xl text-center 2xl:text-2xl lg:text-xl">
                    bangunan yang <strong>estetik</strong> namun tetap
                </p>
                <p class="text-xl text-center 2xl:text-2xl lg:text-xl">
                    <strong>aman, kokoh, dan sesuai kondisi keuangan Anda.</strong>
                </p>
                <div class="mt-6 text-center">
                    <a href="#link-ke-halaman-lain" class="inline-block px-20 py-2 mx-2 mt-10 text-xl text-white rounded-3xl bg-theme2">
                        Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
                         
    </div>

    <div class="flex items-center justify-center w-full h-auto px-2 my-15 lg:h-screen sm:px-4 md:px-6">
        <div class="relative flex items-center justify-center w-full my-2 mx-15 sm:my-4 md:my-6">
            <div 
                class="w-full max-w-[calc(100%-7.5rem)] h-[350px] sm:h-[500px] md:h-[600px] lg:h-[700px] bg-center bg-cover rounded-xl sm:rounded-2xl md:rounded-3xl relative overflow-hidden"
                style="background-image: url('{{ asset('assets/img/home/bg-portofolio.jpg') }}');">
    
                <!-- Overlay -->
                <div class="absolute inset-0 bg-theme2/80 rounded-xl sm:rounded-2xl md:rounded-3xl"></div>
    
                <!-- Judul -->
                <h1 class="absolute text-5xl font-bold text-white sm:text-5xl md:text-5xl lg:text-5xl xl:text-5xl 2xl:text-5xl top-4 sm:top-6 md:top-8 left-4 sm:left-6 md:left-8">
                    Portofolio Kami
                </h1>

                <div class="relative w-full 2xl:mt-40 xl:mt-20 lg:mt-30 md:mt-20 sm:mt-15">
                <div class="relative swiper centered-slide-carousel-1 swiper-container">
                <div class="flex justify-center invisible mb-2 2xl:visible xl:visible md:invisible sm:invisible">
                    <div class="flex items-center gap-3 2xl:mt-1 xl:mt-20 me-3">
                        <div class="p-5 border rounded-full bg-black-2 2xl:p-5 xl:p-3 md:p-5"></div>
                        <h1 class="text-xs font-semibold text-landing-brown-3 2xl:text-xl xl:text-base md:text-xs">azwadesignstudio</h1>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-94 md:h-94">
                            <img src="{{asset('assets/img/home/portofolio1.png')}}" alt="Slide 1" class="object-cover w-1/2 h-full xl:w-4/5 2xl:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>                        
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-94 md:h-94">
                            <img src="{{asset('assets/img/BgHome.png')}}" alt="Slide 2" class="object-cover w-1/2 h-full xl:w-4/5 2xl:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-94 md:h-94">
                            <img src="{{asset('assets/img/home/portofolio2.png')}}" alt="Slide 3" class="object-cover w-1/2 h-full xl:w-4/5 2xl:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-94 md:h-94">
                            <img src="{{asset('assets/img/home/portofolio3.png')}}" alt="Slide 4" class="object-cover w-1/2 h-full xl:w-4/5 2xl:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-94 md:h-94">
                            <img src="{{asset('assets/img/home/portofolio4.png')}}" alt="Slide 5" class="object-cover w-1/2 h-full xl:w-4/5 2xl:w-2/3 lg:w-2/3 md:w-2/3 sm:w-1/2 rounded-2xl">
                        </div>
                    </div>
                </div>                
                
                <div class="swiper-pagination"></div>
                </div>
                <div class="relative flex justify-center invisible mt-5 z-9 2xl:visible xl:visible lg:invisible md:invisible sm:invisible">
                    <div class="border rounded-full bg-landing-brown-1 2xl:px-9 xl:px-8 2xl:py-3">
                        <div class="flex items-center gap-2 text-xs 2xl:text-xl xl:text-base md:text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                                <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                            </svg>
                            <h1>Follow us!</h1>
                        </div>
                    </div>
                </div>                    
                <div class="absolute top-[60%] left-[50.5%] transform -translate-x-1/2 -translate-y-1/2 2xl:top-[50%] xl:top-[60%] 2xl:visible xl:visible lg:invisible md:invisible sm:invisible invisible z-0">
                    <img src="{{asset('assets/img/home/hp.png')}}" alt="Frame" class="w-[100%] h-auto">
                </div>
                </div>
            </div>
        </div>
    </div>


<div class="flex justify-center w-full mt-10 lg:h-[700] sm:px-10 md:px-10">
    <div class="relative flex flex-col justify-start w-full sm:my-2 md:my-3">
        <h1 data-aos="fade-right" data-aos-duration="1000" class="mb-8 text-5xl font-extrabold text-theme3">Layanan Kami</h1>
        <div data-aos="fade-right" data-aos-duration="1000" class="flex justify-center gap-8">
            <div class="relative w-3/4 overflow-hidden lg:w-1/2 rounded-2xl">
                <img src="{{asset('assets/img/home/layanan2.jpg')}}" alt="Arsitektur" class="w-full h-[450px] lg:h-[450px] object-cover">
                <div class="absolute inset-0 flex px-5 py-3 transition-opacity duration-300 bg-black-2 bg-opacity-70">
                    <h3 class="text-3xl font-bold text-white">Arsitektur</h3>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" class="relative w-3/4 overflow-hidden lg:w-1/2 rounded-2xl">
                <img src="{{asset('assets/img/home/layanan.jpg')}}" alt="Arsitektur" class="w-full h-[450px] lg:h-[450px] object-cover">
                <div class="absolute inset-0 flex px-5 py-3 transition-opacity duration-300 bg-black-2 bg-opacity-70">
                    <h3 class="text-3xl font-bold text-white">Interior</h3>
                </div>
            </div>            
        </div>
    </div>
</div>    

<div class="relative w-full pb-10 lg:px-36 laptop:px-40 desktop:px-52">
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
        <div data-aos="fade-right" data-aos-duration="3000" class="flex p-5 rounded-lg shadow-lg bg-theme3">
            <div class="w-full pr-4 sm:w-1/2">
                <img src="{{ asset('assets/img/porto/assets-1.png') }}" alt="Avatar 1" class="object-cover w-full h-48 rounded-lg">
            </div>
            <div class="w-full mt-4 sm:w-1/2 sm:mt-0">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/home/avatar.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                    <p class="ml-4 text-lg font-semibold text-theme1">Mr.A</p>
                </div>
                <p class="mt-2 text-sm text-theme1">Overall sangat puas untuk pengerjaan eksterior maupun interiornya. Promo yang diberikan juga menarik!
                    Terimakasih tim Azwa Architect.</p>
            </div>
        </div>

        <!-- Testimoni 2 -->
        <div data-aos="fade-left" data-aos-duration="3000" class="flex p-5 rounded-lg shadow-lg bg-theme3">
            <div class="w-full pr-4 sm:w-1/2">
                <img src="{{ asset('assets/img/porto/assets-2.png') }}" alt="Avatar 2" class="object-cover w-full h-48 rounded-lg">
            </div>
            <div class="w-full mt-4 sm:w-1/2 sm:mt-0">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/home/avatar.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                    <p class="ml-4 text-lg font-semibold text-theme1">Ms. D</p>
                </div>
                <p class="mt-2 text-sm text-theme1">
                    Terimakasih banyak atas bantuan dan kerjasamanya. Kami sangat puas dengan hasil dan karyanya.</p>
            </div>
        </div>

        <!-- Testimoni 3 -->
        <div data-aos="fade-right" data-aos-duration="3000" class="flex p-5 rounded-lg shadow-lg bg-theme3">
            <div class="w-full pr-4 sm:w-1/2">
                <img src="{{ asset('assets/img/porto/assets-3.png') }}" alt="Avatar 3" class="object-cover w-full h-48 rounded-lg">
            </div>
            <div class="w-full mt-4 sm:w-1/2 sm:mt-0">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/home/avatar.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                    <p class="ml-4 text-lg font-semibold text-theme1">Mr.f</p>
                </div>
                <p class="mt-2 text-sm text-theme1">
                    Terimakasih atas kerjasamanya. Azwa Architect memang terbaik dalam komunikasi, pelayanan, dan juga hasilnya.</p>
            </div>
        </div>

        <!-- Testimoni 4 -->
        <div data-aos="fade-left" data-aos-duration="3000" class="flex p-5 rounded-lg shadow-lg bg-theme3">
            <div class="w-full pr-4 sm:w-1/2">
                <img src="{{ asset('assets/img/porto/assets-4.png') }}" alt="Avatar 4" class="object-cover w-full h-48 rounded-lg">
            </div>
            <div class="w-full mt-4 sm:w-1/2 sm:mt-0">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/home/avatar.jpg') }}" alt="Avatar" class="w-12 h-12 border-2 rounded-full border-theme3">
                    <p class="ml-4 text-lg font-semibold text-theme1">Mr. AL</p>
                </div>
                <p class="mt-2 text-sm text-theme1">
                    Rate bintang 5 untuk hasilnya! Terimakasih tim Azwa Architect atas bantuannya dalam merancang rumah kami.</p>
            </div>
        </div>
    </div>

    <!-- Slider Swiper -->
    <div class="relative z-10 flex items-center justify-center w-full mx-auto min-w-6xl">
        {{-- <div class="swiper centered-slide-carousel-2 swiper-container">
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
        </div>         --}}
        <div class="swiper centered-slide-carousel-2 swiper-container">
            <div class="swiper-wrapper">
                @foreach ($testimoni as $item)
                    <div class="flex items-center justify-center swiper-slide">
                        @if (!empty($item->link_image))
                            <img src="{{ asset('storage/' . $item->link_image) }}" alt="Testimoni" class="object-cover w-auto h-[500px] sm:h-[600px] lg:h-[700px] rounded-2xl">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        
        <!-- Gambar BG -->
        <div class="absolute transform -translate-x-1/2 -translate-y-1/2 z-9 top-1/2 left-1/2 md:invisible lg:visible 
            {{ $testimoni->contains(fn($item) => !empty($item->link_image)) ? '' : 'invisible' }}">
            <img src="{{ asset('assets/img/home/hpTes.png') }}" alt="Frame" class="w-auto h-[720px]">
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
                    delay: 3500,
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
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                    1028: {
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                    990: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    640: {
                        slidesPerView: 1,
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
        document.addEventListener("DOMContentLoaded", () => {
        const sliderWrapper = document.querySelector("#dynamic-slider .swiper-wrapper");
        const apiUrl = "/api/testimoni/home"; // Endpoint API Laravel Anda

        // Ambil data dari API menggunakan Axios
        axios.get(apiUrl)
            .then(response => {
                const data = response.data;

                // Render slide secara dinamis
                data.forEach(image => {
                    const slide = document.createElement("div");
                    slide.classList.add("flex", "items-center", "justify-center", "swiper-slide");

                    slide.innerHTML = `
                        <img src="${image.url}" alt="${image.alt}" class="object-cover w-auto h-[500px] sm:h-[600px] lg:h-[700px] rounded-2xl">
                    `;
                    sliderWrapper.appendChild(slide);
                });

                // Inisialisasi Swiper setelah slide di-load
                new Swiper(".swiper-container", {
                    centeredSlides: true,
                    slidesPerView: 1,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                });
            })
            .catch(error => {
                console.error("Error fetching images:", error);
            });
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