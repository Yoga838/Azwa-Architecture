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
            <p class="mt-12 text-center mx-44 text-white text-3xl"><strong>Azwa Design Studio</strong> merupakan penyedia layanan desain arsitektur yang berkomitmen untuk menciptakan bangunan yang menginspirasi dan memenuhi kebutuhan Anda dengan menawarkan solusi desain yang inovatif, fungsional, dan estetis. 
            </p>
            <p class="mt-8 text-center mx-44 text-white text-3xl">Kami percaya bahwa setiap proyek adalah cerminan dari identitas dan gaya hidup Anda, dan kami berusaha menghadirkan desain arsitektur yang berkualitas tinggi dan memuaskan Anda. </p>
        </div>
    </div>
    <div class="py-28">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 text-center">
                <span class="num text-8xl font-bold" data-val="5">0</span><span class="text-6xl font-bold">+</span>
                <h1 class="text-black text-2xl font-bold mt-8">TAHUN</br>BEROPERASI</h1>
            </div>
            <div class="w-full md:w-1/3 text-center">
                <span class="num text-8xl font-bold" data-val="700">0</span><span class="text-6xl font-bold">+</span>
                <h1 class="text-black text-2xl font-bold mt-8">PROYEK</br>TERSELESAIKAN</h1>
            </div>
            <div class="w-full md:w-1/3 text-center">
                <span class="num text-8xl font-bold" data-val="100">0</span><span class="text-6xl font-bold">+</span>
                <h1 class="text-black text-2xl font-bold mt-8">PROYEK</br>TERBANGUN</h1>
            </div>
        </div>
    </div>
    <script src="{{asset('resources/script.js')}}"></script>
@endsection