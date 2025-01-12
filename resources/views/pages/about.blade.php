@extends("landing")

@section('subtitle', 'Tentang Kami')

@section("content")
    <div class="w-full h-screen flex justify-center items-center relative">
        <div class="absolute z-[-1] overflow-hidden">
            <img src="{{asset('assets/img/about-us/bg-aboutUs.png')}}" alt="" class="w-screen object-cover h-screen brightness-50">
        </div>
        <div class="mt-20 md:mt-0 desktop:mt-0">
            <div class="flex justify-center">
                <img src="{{asset('assets/img/HeadLogo_Azwa.png')}}" alt="" class="w-[10%] md:w-[8%] lg:w-[5%] desktop:w-[6%]">
            </div>
            {{-- <h1 class="font-bold text-[100px] text-landing-black-2 text-center">About Us</h1> --}}
            <div class="lg:mx-30 md:mx-16 mx-10">
                <p class="mt-12 text-center text-white lg:text-2xl md:text-lg text-base desktop:text-4xl tracking-wider"><strong>Azwa Design Studio</strong> merupakan penyedia layanan desain arsitektur<br>yang berkomitmen untuk menciptakan bangunan yang menginspirasi<br>dan memenuhi kebutuhan Anda dengan menawarkan solusi desain<br>yang inovatif, fungsional, dan estetis. 
                </p>
                <p class="mt-8 text-center text-white lg:text-2xl md:text-lg text-base desktop:text-4xl tracking-wider">Kami percaya bahwa setiap proyek adalah cerminan dari identitas dan<br>gaya hidup Anda, dan kami berusaha menghadirkan desain arsitektur<br>yang berkualitas tinggi dan memuaskan Anda. </p>
            </div>
        </div>
    </div>
    <div class="py-16 desktop:py-24">
        <div class="flex flex-wrap" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
            <div class="w-full md:w-1/3 text-center">
                <div class="flex justify-center items-center">
                    <span class="num text-8xl desktop:text-9xl text-landing-black-1 font-extrabold" data-val="5">0</span>
                    <span class="text-6xl desktop:text-7xl text-landing-black-1 font-extrabold">+</span>
                </div>
                <h1 class="text-landing-black-1 text-2xl desktop:text-3xl font-bold mt-8">TAHUN</br>BEROPERASI</h1>
            </div>
            <div class="w-full md:w-1/3 text-center mt-6 md:mt-0">
                <div class="flex justify-center items-center">
                    <span class="num text-8xl desktop:text-9xl text-landing-black-1 font-extrabold" data-val="700">0</span>
                    <span class="text-6xl desktop:text-7xl text-landing-black-1 font-extrabold">+</span>
                </div>
                <h1 class="text-landing-black-1 text-2xl desktop:text-3xl font-bold mt-8">PROYEK</br>TERSELESAIKAN</h1>
            </div>
            <div class="w-full md:w-1/3 text-center mt-6 md:mt-0">
                <div class="flex justify-center items-center">
                    <span class="num text-8xl desktop:text-9xl text-landing-black-1 font-extrabold" data-val="100">0</span>
                    <span class="text-6xl desktop:text-7xl text-landing-black-1 font-extrabold">+</span>
                </div>
                <h1 class="text-landing-black-1 text-2xl desktop:text-3xl font-bold mt-8">PROYEK</br>TERBANGUN</h1>
            </div>
        </div>
    </div>
    {{-- Gmaps Marker --}}
    {{-- <div class="mx-5 mt-5 border-8 border-dashed border-theme2">
        <gmp-map
            center="-2.548926,118.0148634"
            zoom="5"
            map-id="DEMO_MAP_ID"
            style="height: 400px"
        >
            @include('components.maps-marker.marker-maps')
        </gmp-map>
    </div> --}}
    {{-- Mapping Maps Image --}}
    <div class="overflow-x-auto">
        <img src="{{asset('assets/img/about-us/mapping.png')}}" class="w-screen h-full" style="min-width: 1024px;" alt="">
    </div>
    {{-- Visi --}}
    <div class="py-20">
        <div class="px-8 md:px-32 desktop:px-44">
            <div class="flex gap-10 md:gap-20">
                <h1 class="text-5xl desktop:text-7xl font-bold text-theme2">Visi</h1>
                <div class="w-full flex items-center">
                    <div class="h-1 desktop:h-[6px] w-full bg-theme2 rounded-lg"></div>
                </div>
            </div>
        </div>
        <div class="title-visi text-center py-8 px-10 lg:px-[180px]">
            <p class="font-medium text-theme2 text-xl desktop:text-3xl tracking-wider">Terdepan dalam menghadirkan desain arsitektur yang elegan, fungsional, dan ramah bagi semua<br>kalangan, memberikan pengalaman estetika dan kenyamanan yang melampaui ekspektasi.</p>
        </div>
    </div>
    {{-- Misi --}}
    <div class="px-8 md:px-32 desktop:px-44">
        <div class="flex gap-10 md:gap-20">
            <h1 class="text-5xl desktop:text-7xl font-bold text-theme2">Misi</h1>
            <div class="w-full flex items-center">
                <div class="h-1 desktop:h-[6px] w-full bg-theme2 rounded-lg"></div>
            </div>
        </div>
    </div>
    <div class="title-visi py-10 desktop:py-20 px-15 lg:px-54 desktop:px-80 mb-10">
        <ul class="space-y-6">
            <li class="list-disc text-theme2"><p class="font-medium tracking-wider text-theme2 text-xl desktop:text-3xl text-justify lg:text-start">Menciptakan karya arsitektur yang menggabungkan estetika elegan dengan fungsi optimal,<br>memastikan setiap desain memiliki nilai estetika yang tinggi sekaligus memenuhi kebutuhan<br>penghuni.
            </p></li>
            <li class="list-disc text-theme2"><p class="font-medium tracking-wider text-theme2 text-xl desktop:text-3xl text-justify lg:text-start">Menyediakan solusi desain yang terjangkau tanpa mengurangi kualitas, sehingga setiap<br>individu, terlepas dari latar belakang ekonomi, dapat merasakan keindahan dan kenyamanan<br>arsitektur berkualitas.
            </p></li>
            <li class="list-disc text-theme2"><p class="font-medium tracking-wider text-theme2 text-xl desktop:text-3xl text-justify lg:text-start">Memanfaatkan teknologi terbaru dalam proses desain dan konstruksi untuk memberikan<br>efisiensi, presisi, dan pengalaman klien yang lebih baik.
            </p></li>
        </ul>
    </div>

    <script src="{{asset('resources/script.js')}}"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqqkcDlizK-Z5wlUqeOAbcWRh_0r5vDd0&libraries=maps,marker&v=beta"
    defer >
    </script>
@endsection