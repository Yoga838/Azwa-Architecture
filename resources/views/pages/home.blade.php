@extends("landing")

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
        <div class="relative flex items-center justify-center w-full my-2 sm:my-4 md:my-6">
            <div 
                class="w-full max-w-[90%] sm:max-w-[85%] md:max-w-[75%] lg:max-w-[1100px] h-[250px] sm:h-[400px] md:h-[500px] lg:h-[600px] bg-center bg-cover rounded-xl sm:rounded-2xl md:rounded-3xl relative overflow-hidden"
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
                    <div class="flex items-center gap-3 mr-10 me-3">
                        <div class="px-5 py-5 border rounded-full bg-black-2"></div>
                        <h1 class="font-semibold text-landing-brown-3">azwacontractor</h1>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp3.jpg.jpg')}}" alt="Slide 1" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp4.jpg.jpg')}}" alt="Slide 2" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl">
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp5.jpg.JPG')}}" alt="Slide 3" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
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
                            <img src="{{asset('assets/img/service/kontraktor/slide-framehp2.jpg.JPG')}}" alt="Slide 6" class="object-cover w-1/2 h-full sm:w-3/4 lg:w-full rounded-2xl">
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