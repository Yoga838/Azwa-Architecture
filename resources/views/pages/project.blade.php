@extends("landing")

@section("content")
    <section class="mt-20 mx-20">
        <div class="pt-30">
            <div class="flex flex-row items-center space-x-8">
                <div class="">
                    <h1 class="font-bold text-[48px] text-landing-brown-3">Portofolio Kami</h1>
                </div>
                <div class="flex-grow h-[2px] bg-landing-brown-3"></div>
            </div>
        </div>
        <div class="py-30">
            <div class="columns-1 sm:columns-2 lg:columns-2 gap-4">
                <!-- Bentuk Geometris -->
                <div class="relative w-full h-full mb-4">
                    <img src="{{ asset('assets/img/assets-1.jpg') }}" class="w-full h-full object-cover" />
                </div>
                <div class="relative w-full h-[500px] mb-4">
                    <img src="{{ asset('assets/img/assets-4.jpg') }}" class="w-full h-full object-cover" />
                </div>
                <div class="relative w-full h-[500px] mb-4">
                    <img src="{{ asset('assets/img/assets-4.jpg') }}" class="w-full h-full object-cover" />
                </div>
                <div class="relative w-full h-full mb-4">
                    <img src="{{ asset('assets/img/assets-1.jpg') }}" class="w-full h-full object-cover" />
                </div>
                <div class="relative w-full h-full mb-4">
                    <img src="{{ asset('assets/img/assets-1.jpg') }}" class="w-full h-full object-cover" />
                </div>
                <div class="relative w-full h-full mb-4">
                    <img src="{{ asset('assets/img/assets-1.jpg') }}" class="w-full h-full object-cover" />
                </div>
                <div class="relative w-full h-[500px] mb-4">
                    <img src="{{ asset('assets/img/assets-4.jpg') }}" class="w-full h-full object-cover" />
                </div>
                <div class="relative w-full h-[500px] mb-4">
                    <img src="{{ asset('assets/img/assets-4.jpg') }}" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>
    <section class="relative w-full h-[600px]">
        <div class="w-full h-full">
            <img src="{{ asset('assets/img/Enscape.png') }}" class="w-full h-full object-cover" />
        </div>
        <div class="absolute inset-0 bg-landing-black-2 bg-opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div>
                <div class="flex justify-center items-center space-x-8">
                    <h1 class="text-white text-[48px]">Bersama</h1>
                    <img src="{{ asset('assets/img/LogoAzwa.png') }}" alt="Brand" class="w-[200px] h-auto" />
                </div>
                <div class="mt-[86px] w-[800px] text-center">
                    <h1 class="text-white text-[48px] font-bold">Wujudkan Rumah Impian Anda Sekarang Juga !</h1>
                </div>
            </div>
        </div>
    </section>
@endsection