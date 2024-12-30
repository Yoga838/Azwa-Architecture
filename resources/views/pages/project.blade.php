@extends("landing")

@section("content")
    <section class="mx-20 mt-20">
        <div class="pt-30">
            <div class="flex flex-row items-center space-x-8">
                <div class="">
                    <h1 class="font-bold text-[48px] text-landing-brown-3">Portofolio Kami</h1>
                </div>
                <div class="flex-grow h-[2px] bg-landing-brown-3"></div>
            </div>
        </div>
        <div class="py-30">
            <div class="gap-4 columns-1 sm:columns-2 lg:columns-2">
                @forelse ($images as $image)
                    <div class="relative w-full h-full mb-4 group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                        <img src="{{ asset('assets/img/porto/' . $image->getFilename()) }}" alt="{{ $image->getFilename() }}" class="object-cover w-full h-full" />

                        <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100">
                            <span class="text-xl font-bold text-white transition-transform duration-300 transform translate-y-5 group-hover:translate-y-0">
                                Azwa
                            </span>
                        </div>
                    </div>
                @empty
                    <p>No images found in the directory.</p>
                @endforelse
            </div>
        </div>
        <div class="flex justify-center pb-30">
            <button class="w-[200px] flex items-center py-[5px] px-[10px] rounded-full bg-landing-brown-2 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                <p class="font-medium ms-[5px]">Lihat Selengkapnya</p>
            </button>
        </div>
    </section>
    <section class="relative w-full h-[600px]">
        <div class="w-full h-full">
            <img src="{{ asset('assets/img/Enscape.png') }}" class="object-cover w-full h-full" />
        </div>
        <div class="absolute inset-0 bg-opacity-50 bg-landing-black-2"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div>
                <div class="flex items-center justify-center space-x-8">
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