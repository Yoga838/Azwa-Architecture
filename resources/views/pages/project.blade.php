@extends("landing")

@section('subtitle', 'Portofolio')

@section("content")
    <section class="2xl:mt-30 xl:mt-20 lg:mt-20 md:mt-20 mt-10 2xl:mx-30 xl:mx-20 lg:mx-20 md:mx-20 mx-10">
        <div class="pt-30">
            <div class="flex flex-wrap">
                <div class="w-full 2xl:w-1/3 xl:w-1/3 lg:w-1/3 md:w-1/3">
                    <h1 class="2xl:text-5xl xl:text-5xl lg:text-4xl md:text-4xl text-3xl font-bold md:text-start text-center text-theme2">Portofolio Kami</h1>
                </div>
                <div class="w-full 2xl:w-8/12 xl:w-8/12 lg:w-8/12 md:w-8/12 flex justify-center items-center">
                    <div class="2xl:h-1.5 xl:h-1 lg:h-1 md:h-1 h-1 w-full bg-theme2 rounded-lg"></div>
                </div>
            </div>
        </div>
        <div class="lg:py-30 md:py-20 py-15">
            <div class="columns-1 sm:columns-2 lg:columns-2 gap-4">
                @forelse ($images as $image)
                    <a href="{{ route('project-detail.index', ['id' => $loop->index]) }}" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                        <div class="relative w-full h-auto mb-4 group rounded-3xl overflow-hidden">
                            <img src="{{ asset('assets/img/porto/' . $image->getFilename()) }}" alt="{{ $image->getFilename() }}" class="w-full h-full object-cover" />
    
                            <div class="p-4 absolute inset-0 bg-white bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="text-theme3">
                                    <div class="w-full h-full transform translate-y-5 group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="lg:text-2xl text-xl">Arsitektur</p>
                                        <div class="absolute inset-0 flex justify-center items-center w-full h-full">
                                            <span>
                                                <p class="mb-2 lg:text-3xl md:text-2xl text-xl font-bold">Mrs. W House</p>
                                                <div class="">
                                                    <span class="flex items-center space-x-2 mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7"/></svg>
                                                        <p class="lg:text-2xl text-xl">Azwa</p>
                                                    </span>
                                                    <span class="flex items-center space-x-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 100 100"><path fill="currentColor" d="M76.647 30.353a2 2 0 0 1-2-2v-3h-3a2 2 0 0 1 0-4h5a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2m-13.659-5h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-17.318 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-22.317 5a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h5a2 2 0 0 1 0 4h-3v3a2 2 0 0 1-2 2m0 34.635a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m0-17.318a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m5 30.977h-5a2 2 0 0 1-2-2v-5a2 2 0 0 1 4 0v3h3a2 2 0 0 1 0 4m34.635 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-17.318 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m30.977 0h-5a2 2 0 0 1 0-4h3v-3a2 2 0 0 1 4 0v5a2 2 0 0 1-2 2m0-13.659a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m0-17.318a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2"/><path fill="currentColor" d="M90.216 92.216H9.784a2 2 0 0 1-2-2V9.784a2 2 0 0 1 2-2h80.432a2 2 0 0 1 2 2v80.432a2 2 0 0 1-2 2m-78.432-4h76.432V11.784H11.784z"/></svg>
                                                        <p class="lg:text-2xl text-xl">Azwa</p>
                                                    </span>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </a>
                @empty
                    <p>No images found in the directory.</p>
                @endforelse
            </div>
        </div>
        <div class="flex justify-center pb-30">
            <button class="2xl:w-[215px] w-[200px] 2xl:text-md text-base flex justify-center items-center 2xl:py-2 py-[5px] 2xl:px-2 px-[10px] rounded-full bg-landing-brown-1 text-white hover:bg-landing-brown-3 transition duration-300 ease-in-out transform hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                <p class="font-medium ms-[5px]">Lihat Selengkapnya</p>
            </button>
        </div>
    </section>
    <section class="relative w-full 2xl:h-[700px] xl:h-[600px] h-[600px]">
        <div class="w-full h-full">
            <img src="{{ asset('assets/img/Enscape.png') }}" class="object-cover w-full h-full" />
        </div>
        <div class="absolute inset-0 bg-opacity-50 bg-landing-black-2"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div>
                <div class="flex justify-center items-center space-x-8" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-white 2xl:text-5xl xl:text-5xl lg:text-5xl md:text-4xl text-3xl">Bersama</h1>
                    <img src="{{ asset('assets/img/LogoAzwa.png') }}" alt="Brand" class="w-[30%] md:w-[20%] h-auto" />
                </div>
                <div class="lg:mt-20 mt-16 w-full flex justify-center text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="lg:w-[60%] w-[75%]">
                        <h1 class="text-white 2xl:text-5xl xl:text-5xl lg:text-5xl md:text-4xl text-3xl font-bold">Wujudkan Rumah Impian Anda Sekarang Juga !</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection