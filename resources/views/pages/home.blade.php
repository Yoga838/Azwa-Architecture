@extends("landing")

@section("content")

    <div class="flex flex-col items-center justify-center flex-shrink-0 w-full h-screen">
        <div class="flex w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('assets/img/BgHome.png') }}')">        
            <div class="flex items-center justify-center w-full">
                <div class="mx-10 text-center transform -translate-y-50 lg:mx-44 md:mx-20">
                    <p class="text-lg text-justify text-black lg:text-3xl md:text-xl">
                        Menciptakan Karya dengan Kenyamanan Tanpa Kata
                    </p>
                </div>  
            </div>                       
        </div>
    </div>


    <div class="w-full bg-amber-600">
        <!-- Container Flex untuk Tiga Kolom -->
        <div class="flex items-center justify-around w-full">
            
            <!-- Kolom Pertama -->
            <div class="flex flex-col items-center justify-center my-5">
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
            
            <!-- Kolom Kedua -->
            <div class="flex flex-col items-center justify-center my-5">
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
            
            <!-- Kolom Ketiga -->
            <div class="flex flex-col items-center justify-center my-5">
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

    <div class="flex items-center justify-center w-full">
        <!-- Kolom Kiri (Gambar) -->
        <div class="flex-shrink-0 max-w-md">
            <img src="{{ asset('assets/img/BgHome.png') }}" alt="Deskripsi Gambar" class="object-cover w-full h-auto">
        </div>
        
        <!-- Kolom Kanan (Teks) -->
        <div class="max-w-md p-6 text-black">
            <p class="mb-4 text-3xl text-center">Cari Jasa
                <strong>Desain Arsitektur dan Interior</strong>
                Bermutu?</p>
            <h1 class="mb-4 text-2xl text-center">
                <strong>Azwa Design Studio</strong> 
                <p class="mb-4 text-xl text-center">siap mewujudkan keinginan Anda!</p>
            </h1>
            <p class="text-lg text-center">
                <strong>Kami memperhitungkan kekuatan struktur 
                serta anggaran</strong> dengan optimal, sehingga menghasilkan bangunan yang <strong>estetik</strong> namun tetap 
                <strong>aman, kokoh, dan sesuai kondisi keuangan Anda.</strong>
            </p>
        </div>
    </div>
    
    
    
@endsection