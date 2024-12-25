@extends("landing")

@section("content")
    <div class="w-full h-full flex justify-center items-center relative">
        <div class="absolute z-[-1] w-full h-full overflow-hidden">
            <img src="{{asset('assets/img/about-us/bg-aboutUs.png')}}" alt="" class="w-screen object-cover h-screen">
        </div>
        <div class="py-32">
            {{-- <h1 class="font-bold text-[100px] text-landing-black-2 text-center">About Us</h1> --}}
            <div class="flex justify-center">
                <img src="{{asset('assets/img/LogoAzwa.png')}}" alt="" class="w-[10%]">
            </div>
            <p class="mt-12 text-center lg:mx-44 md:mx-20 mx-10 text-white lg:text-3xl md:text-xl text-lg"><strong>Azwa Design Studio</strong> merupakan penyedia layanan desain arsitektur yang berkomitmen untuk menciptakan bangunan yang menginspirasi dan memenuhi kebutuhan Anda dengan menawarkan solusi desain yang inovatif, fungsional, dan estetis. 
            </p>
            <p class="mt-8 text-center lg:mx-44 md:mx-20 mx-10 text-white lg:text-3xl md:text-xl text-lg">Kami percaya bahwa setiap proyek adalah cerminan dari identitas dan gaya hidup Anda, dan kami berusaha menghadirkan desain arsitektur yang berkualitas tinggi dan memuaskan Anda. </p>
        </div>
    </div>
    <div class="py-28">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 text-center">
                <span class="num text-8xl text-theme2 font-bold" data-val="5">0</span><span class="text-6xl text-theme2 font-bold">+</span>
                <h1 class="text-theme2 text-2xl font-bold mt-8">TAHUN</br>BEROPERASI</h1>
            </div>
            <div class="w-full md:w-1/3 text-center">
                <span class="num text-8xl text-theme2 font-bold" data-val="700">0</span><span class="text-6xl text-theme2 font-bold">+</span>
                <h1 class="text-theme2 text-2xl font-bold mt-8">PROYEK</br>TERSELESAIKAN</h1>
            </div>
            <div class="w-full md:w-1/3 text-center">
                <span class="num text-8xl text-theme2 font-bold" data-val="100">0</span><span class="text-6xl text-theme2 font-bold">+</span>
                <h1 class="text-theme2 text-2xl font-bold mt-8">PROYEK</br>TERBANGUN</h1>
            </div>
        </div>
    </div>
    {{-- Gmaps Marker --}}
    <div class="px-0">
        <gmp-map
            center="-2.548926,118.0148634"
            zoom="5"
            map-id="DEMO_MAP_ID"
            style="height: 400px"
        >
            @include('components.maps-marker.marker-maps')
        </gmp-map>
    </div>
    {{-- Visi --}}
    <div class="py-22 px-32">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4">
                <h1 class="text-5xl font-bold text-theme2">Visi</h1>
            </div>
            <div class="w-full md:w-9/12 flex justify-center items-center">
                <div class="h-1 w-full bg-theme2 rounded-lg"></div>
            </div>
        </div>
        <div class="title-visi text-center py-8">
            <p class="font-light text-theme2 text-base mx-8">Terdepan dalam menghadirkan desain arsitektur yang elegan, fungsional, dan ramah bagi semua kalangan, memberikan pengalaman estetika dan kenyamanan yang melampaui ekspektasi.</p>
        </div>
    </div>
    {{-- Misi --}}
    <div class="px-32">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4">
                <h1 class="text-5xl font-bold text-theme2">Misi</h1>
            </div>
            <div class="w-full md:w-9/12 flex justify-center items-center">
                <div class="h-1 w-full bg-theme2 rounded-lg"></div>
            </div>
        </div>
        <div class="title-visi py-10 mb-10">
            <ul class="space-y-3">
                <li class="list-disc mx-20 text-theme2"><p class="font-light text-theme2 text-base">Menciptakan karya arsitektur yang menggabungkan estetika elegan dengan fungsi optimal, memastikan setiap desain memiliki nilai estetika yang tinggi sekaligus memenuhi kebutuhan penghuni.
                </p></li>
                <li class="list-disc mx-20 text-theme2"><p class="font-light text-theme2 text-base">Menyediakan solusi desain yang terjangkau tanpa mengurangi kualitas, sehingga setiap individu, terlepas dari latar belakang ekonomi, dapat merasakan keindahan dan kenyamanan arsitektur berkualitas.
                </p></li>
                <li class="list-disc mx-20 text-theme2"><p class="font-light text-theme2 text-base">Memanfaatkan teknologi terbaru dalam proses desain dan konstruksi untuk memberikan efisiensi, presisi, dan pengalaman klien yang lebih baik.
                </p></li>
            </ul>
        </div>
    </div>

    <script src="{{asset('resources/script.js')}}"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqqkcDlizK-Z5wlUqeOAbcWRh_0r5vDd0&libraries=maps,marker&v=beta"
    defer >
    </script>
@endsection