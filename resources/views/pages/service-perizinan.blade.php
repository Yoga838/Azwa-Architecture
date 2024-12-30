@extends("landing")

@section("content")
<div class="w-full h-full flex justify-center relative">
    <div class="absolute z-[-1] w-full h-[450px] overflow-hidden">
        <div class="absolute inset-0 bg-white opacity-5"></div>
        <img src="{{asset('assets/img/service/perizinan/perizinan5.jpeg')}}" alt="" class="w-screen brightness-75 object-cover md:h-full">
    </div>
    <div class="py-20 md:py-32">
        {{-- <h1 class="font-bold text-[100px] text-landing-black-2">Services Kontraktor</h1> --}}
        <div class="mx-10">
            <p class="md:mt-20 text-start lg:text-6xl md:text-4xl text-2xl font-bold text-theme1 drop-shadow-2">
                Bersama Kami, <br> Perizinan Bangunan Lebih Mudah dan Aman!
            </p>
        </div>
    </div>
</div>
<h1 class="text-landing-gold text-xl lg:text-4xl md:text-2xl text-md font-bold drop-shadow-2 text-center mt-10">Kenapa harus kami ?</h1>
{{-- CardTag --}}
<div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
    <div class="border px-5 py-4 w-11/12 bg-landing-brownLight-1 rounded-3xl">
        <div class="flex items-center">
            <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">
                
            </div>
            <div class="">
                <h1 class="font-bold lg:text-xl md:text-md text-xs">PROSES CEPAT, MUDAH, DAN AMAN</h1>
                <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Perizinan cepat, mudah, dan aman untuk kelancaran proyek Anda.</p>
            </div>
        </div>
    </div>
</div>
{{-- CardTag --}}
<div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
    <div class="border px-5 py-4 w-11/12 bg-landing-brownLight-2 rounded-3xl">
        <div class="flex items-center">
            <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

            </div>
            <div class="">
                <h1 class="font-bold lg:text-xl md:text-md text-xs">SSK LENGKAP</h1>
                <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Kami menyediakan layanan dengan langkah SKK (Surat Keterangan Kelayakan) lengkap.</p>
            </div>
        </div>
    </div>
</div>
{{-- CardTag --}}
<div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
    <div class="border px-5 py-4 w-11/12 bg-landing-brownLight-1 rounded-3xl">
        <div class="flex items-center">
            <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

            </div>
            <div class="">
                <h1 class="font-bold lg:text-xl md:text-md text-xs">TRANSPARAN</h1>
                <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Pelayanan terbuka dalam memberikan informasi akurat dan terpercaya.</p>
            </div>
        </div>
    </div>
</div>
{{-- CardTag --}}
<div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
    <div class="border px-5 py-4 w-11/12 bg-landing-brownLight-2 rounded-3xl">
        <div class="flex items-center">
            <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

            </div>
            <div class="">
                <h1 class="font-bold lg:text-xl md:text-md text-xs">PENDAMPINGAN</h1>
                <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Pendampingan penuh dalam proses perizinan bangunan, memastikan setiap langkah berjalan lancar dan sesuai regulasi.</p>
            </div>
        </div>
    </div>
</div>
{{-- CardTag --}}
<div class="mt-5 flex justify-center items-center lg:px-50 md:px-30 px-5">
    <div class="border px-5 py-4 w-11/12 bg-landing-brownLight-1 rounded-3xl">
        <div class="flex items-center">
            <div class="border bg-theme3 p-10 rounded-full lg:mx-5 mx-2">

            </div>
            <div class="">
                <h1 class="font-bold lg:text-xl md:text-md text-xs">PELUNASAN SETELAH JADI</h1>
                <p class="font-normal lg:text-xl md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Menggunakan sistem pelunasan setelah proses selesai, memberikan kepercayaan penuh pada Anda.</p>
            </div>
        </div>
    </div>
</div>

{{-- BG Gambar --}}
<div class="mt-50 w-full h-full flex items-center relative">
    <div class="absolute z-[-1] w-full h-[450px] overflow-hidden">
        <div class="absolute inset-0"></div>
        <img src="{{asset('assets/img/service/perizinan/perizinan4.jpeg')}}" alt="" class="w-screen brightness-75 object-cover h-full">
    </div>
    <div class="py-10 mx-10 mt-10 mb-10">
        <h1 class="font-bold text-2xl md:text-4xl text-theme1 drop-shadow-2 md:ml-21">PBG (Persetujuan Bangunan Gedung) / <br>SLF ( Sertifikasi Layak Fungsi)</h1>
    </div>
</div>
{{-- Card --}}
<div class="flex justify-center items-center lg:px-50 md:px-30 px-5">
    <div class=" w-[350px] lg:w-[700px] md:w-[500px] h-full bg-theme3 rounded-3xl">
        <div class="text-center">
            <h1 class="mt-5 font-bold lg:text-3xl md:text-md text-md text-landing-gold">MULAI 2 JUTA / 100 M2</h1>
        </div>
        <div class="mx-5 md:mx-20 mt-10 md:mt-15">
            <ul class="">
                <li class="list-disc text-white ml-8">
                    <p class="text-white text-md">TIDAK TERMASUK BIAYA GAMBAR TEKNIS </p>
                </li>
                <li class="list-disc text-white ml-8">
                    <p class="text-white text-md">PENDAMPINGAN SELAMA PENGURUSAN</p>
                </li>
            </ul>
        </div>
        <div class="px-5 py-2 w-[350px] lg:w-[700px] md:w-[500px] mt-10 rounded-full bg-theme2 ">
            <h1 class="text-white text-center">PILIH PAKET</h1>
        </div>
    </div>
</div>

{{-- BG Gambar --}}
<div class="mt-50 w-full h-full flex items-center relative">
    <div class="absolute z-[-1] w-full h-[450px] overflow-hidden">
        <div class="absolute inset-0"></div>
        <img src="{{asset('assets/img/service/perizinan/perizinan3.jpeg')}}" alt="" class="w-screen brightness-75 object-cover h-full">
    </div>
    <div class="py-10 mx-10 mt-10 mb-10">
        <h1 class="font-bold text-2xl md:text-4xl text-theme1 drop-shadow-2 md:ml-21">PAKET LENGKAP PBG & SLF</h1>
    </div>
</div>
{{-- Card --}}
<div class="flex justify-center items-center lg:px-50 md:px-30 px-5">
    <div class=" w-[350px] lg:w-[700px] md:w-[500px] h-full bg-theme3 rounded-3xl">
        <div class="text-center">
            <h1 class="mt-5 font-bold lg:text-3xl md:text-md text-md text-landing-gold">MULAI 5 JUTA / 100 M2</h1>
        </div>
        <div class="mx-5 md:mx-20 mt-10 md:mt-15">
            <ul class="">
                <li class="list-disc text-white ml-8">
                    <p class="text-white text-md">PROSES PERIZINAN</p>
                </li>
                <li class="list-disc text-white ml-8">
                    <p class="text-white text-md">SEMUA DOKUMEN LENGKAP (GAMBAR TEKNIK, LAPORAN TEKNIS STRUKTUR)</p>
                </li>
                <li class="list-disc text-white ml-8">
                    <p class="text-white text-md">PENDAMPINGAN SELAMA PENGURUSAN</p>
                </li>
            </ul>
        </div>
        <div class="px-5 py-2 w-[350px] lg:w-[700px] md:w-[500px] mt-10 rounded-full bg-theme2 ">
            <h1 class="text-white text-center">PILIH PAKET</h1>
        </div>
    </div>
</div>
<div class="flex justify-center my-20">
    <div class="bg-theme2 flex items-center w-fill px-3 rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-8 md:h-8" viewBox="0 0 24 24"><path fill="#e1dfd4" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
      <p class="text-sm md:text-xl font-medium pb-1 pl-3">
        <a href="https://wa.me/62895371025425" class="text-theme1 hover:underline" target="_blank" rel="noopener noreferrer">Konsultasi Sekarang</a>
      </p>
    </div>
</div>
@endsection