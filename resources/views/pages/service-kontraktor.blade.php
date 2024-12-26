@extends("landing")

@section("content")
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
    {{-- Card Konstruksi Arsitektural --}}
    <div class="flex justify-center items-center lg:px-50 md:px-30 px-5">
        <div class="border px-5 py-4 w-[700px] h-full bg-theme3 rounded-3xl">
            <div class="text-center">
                <h1 class="mt-5 font-bold lg:text-3xl md:text-md text-xs text-landing-gold">MULAI 3,5 JUTA / M2</h1>
                <p class="font-normal lg:text-sm md:text-md text-xs text-landing-gold md:tracking-wider tracking-tight">*non-metropolitan (bukan kota besar)</p>
            </div>
            <div class="mx-20 mt-10">
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
            <div class="border px-5 py-2 w-full rounded-full outline-none bg-theme2 ">
                <h1 class="text-white">PILIH PAKET</h1>
            </div>
        </div>
    </div>
@endsection