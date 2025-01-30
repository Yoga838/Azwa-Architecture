@extends("landing")

@section('subtitle', 'Layanan Kontraktor')

@section("content")
    <style>
        .swiper-wrapper {
            width: 100%;
            height: max-content !important;
            padding-bottom: 64px !important;
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
            position: relative;
        }
        .swiper-pagination-bullet {
            background: #5d4e40;
        }
        .swiper-pagination-bullet-active {
            background: #5d4e40 !important;
        }
    </style>
    <div class="relative flex justify-center w-full h-full">
        <div class="absolute z-[-1] w-full 2xl:h-[500px] xl:h-[450px] lg:h-[400px] md:h-[400px] h-[400px] overflow-hidden">
            <div class="absolute inset-0 bg-theme3 opacity-60"></div>
            <img src="{{asset('assets/img/service/kontraktor/bg1-servicekontraktor.jpg')}}" alt="" class="object-cover w-screen h-full">
        </div>
        <div class="py-32" style="font-family: League Spartan, sans-serif;">
            {{-- <h1 class="font-bold text-[100px] text-landing-black-2">Services Kontraktor</h1> --}}
            <div data-aos="fade-up" data-aos-duration="1000" class="mx-10">
                <p class="mt-20 text-2xl font-bold text-center 2xl:mt-30 xl:mt-20 lg:mt-20 md:mt-20 2xl:text-6xl xl:text-5xl lg:text-4xl md:text-4xl text-theme1 drop-shadow-2">
                    Membangun bersama Azwa Contractor,</br>Konstruksi Berkualitas, Solusi Tanpa Batas !
                </p>
            </div>
        </div>
    </div>
    <h1 class="mt-10 font-bold text-center text-theme2 2xl:text-4xl xl:text-4xl lg:text-3xl md:text-2xl text-md 2xl:mt-20 xl:mt-10 lg:mt-10 md:mt-10" style="font-family: Poppins, sans-serif;">KENAPA HARUS AZWA CONTRACTOR ?</h1>
    {{-- CardTag Free Design --}}
    <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center px-10 mt-5 2xl:mt-10 xl:mt-5 lg:mt-5 md:mt-5 2xl:px-50 xl:px-30 lg:px-30 md:px-30" style="font-family: Poppins, sans-serif;">
        <div class="w-full px-5 py-4 border 2xl:px-8 xl:px-5 lg:px-5 md:px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 bg-landing-brownLight-1/50 rounded-3xl">
            <div class="flex items-center">
                <div class="p-5 mx-2 border-0 rounded-full bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 lg:mx-5">
                    <svg fill="#c29844" class="w-12 h-full 2xl:w-14 xl:w-12 lg:w-12 md:w-12" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.002 512.002" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M505.327,498.2L18.104,10.977c-2.311-2.311-5.791-3.003-8.81-1.752c-3.021,1.25-4.991,4.2-4.991,7.469v487.223 c0,4.466,3.62,8.085,8.084,8.085h64.676h64.676h64.676h64.676h64.676h64.676h99.169c3.27,0,6.217-1.969,7.469-4.991 C508.331,503.989,507.639,500.513,505.327,498.2z M408.526,495.833v-0.001v-26.409c0-4.466-3.62-8.084-8.084-8.084 c-4.465,0-8.084,3.619-8.084,8.084v26.409H343.85v-26.409c0-4.466-3.62-8.084-8.084-8.084c-4.465,0-8.084,3.619-8.084,8.084 v26.409h-48.507v-26.409c0-4.466-3.62-8.084-8.084-8.084c-4.465,0-8.084,3.619-8.084,8.084v26.409h-48.507v-26.409 c0-4.466-3.62-8.084-8.084-8.084s-8.084,3.619-8.084,8.084v26.409h-48.507v-26.409c0-4.466-3.62-8.084-8.084-8.084 s-8.084,3.619-8.084,8.084v26.409H85.148v-26.409c0-4.466-3.62-8.084-8.084-8.084s-8.084,3.619-8.084,8.084v26.409H20.472V36.211 l459.621,459.621H408.526z"></path> </g> </g> <g> <g> <path d="M350.096,433.514L82.77,167.107c-2.313-2.306-5.79-2.993-8.807-1.74c-3.017,1.253-4.984,4.2-4.984,7.467v266.407 c0,4.466,3.62,8.084,8.084,8.084h267.326c3.273,0,6.222-1.973,7.472-4.997C353.111,439.304,352.414,435.824,350.096,433.514z M85.148,431.156V192.304l239.676,238.852H85.148z"></path> </g> </g> <g> <g> <path d="M181.949,217.939L61.221,97.211c-3.157-3.156-8.276-3.156-11.432,0c-3.157,3.158-3.157,8.276,0,11.434l120.728,120.728 c1.578,1.578,3.648,2.367,5.716,2.367c2.068,0,4.138-0.789,5.716-2.367C185.106,226.214,185.106,221.096,181.949,217.939z"></path> </g> </g> <g> <g> <path d="M225.066,265.368l-21.559-21.559c-3.157-3.156-8.276-3.156-11.432,0c-3.157,3.158-3.157,8.276,0,11.434l21.559,21.559 c1.578,1.578,3.648,2.367,5.716,2.367s4.138-0.789,5.716-2.367C228.223,273.643,228.223,268.525,225.066,265.368z"></path> </g> </g> <g> <g> <path d="M505.33,275.584l-60.979-60.974L257.784,28.043c-0.004-0.004-0.01-0.009-0.014-0.014l-0.023-0.023 c-0.038-0.038-0.079-0.068-0.116-0.105c-0.153-0.147-0.308-0.292-0.472-0.427c-0.072-0.06-0.15-0.112-0.224-0.169 c-0.136-0.103-0.271-0.208-0.414-0.304c-0.1-0.067-0.205-0.125-0.307-0.188c-0.122-0.074-0.243-0.151-0.37-0.219 c-0.126-0.068-0.255-0.125-0.384-0.184c-0.11-0.052-0.217-0.107-0.33-0.153c-0.156-0.065-0.316-0.119-0.475-0.172 c-0.092-0.031-0.18-0.067-0.273-0.096c-0.196-0.059-0.396-0.107-0.596-0.151c-0.058-0.013-0.113-0.031-0.172-0.043l-0.036-0.008 c-0.003-0.001-0.006-0.001-0.01-0.002L147.01,4.475c-0.298-0.064-0.6-0.111-0.907-0.14c-0.043-0.004-0.085-0.004-0.127-0.008 c-0.069-0.005-0.139-0.006-0.208-0.011c-0.148-0.008-0.294-0.021-0.443-0.019c-0.099,0-0.197,0.008-0.296,0.011 c-0.08,0.003-0.16,0.008-0.239,0.013c-0.042,0.003-0.084,0.003-0.125,0.006c-0.039,0.003-0.078,0.002-0.117,0.006 c-0.166,0.016-0.329,0.043-0.493,0.069c-0.059,0.01-0.12,0.017-0.179,0.028c-0.617,0.112-1.214,0.293-1.78,0.54 c-0.047,0.02-0.094,0.045-0.141,0.067c-0.163,0.074-0.326,0.149-0.483,0.234c-0.067,0.037-0.129,0.079-0.195,0.116 c-0.068,0.039-0.135,0.081-0.202,0.122c-0.089,0.055-0.182,0.107-0.269,0.166c-0.095,0.064-0.183,0.135-0.275,0.203 c-0.019,0.014-0.038,0.028-0.056,0.042c-0.053,0.04-0.108,0.077-0.16,0.117c-0.046,0.037-0.094,0.07-0.138,0.108 c-0.076,0.061-0.143,0.129-0.217,0.194c-0.124,0.11-0.25,0.22-0.368,0.337c-0.048,0.048-0.092,0.101-0.138,0.15 c-0.134,0.141-0.266,0.285-0.39,0.435c-0.025,0.03-0.045,0.063-0.07,0.093c-0.001,0.001-0.001,0.002-0.002,0.003 c-0.043,0.055-0.084,0.111-0.126,0.167c-0.092,0.121-0.183,0.24-0.268,0.368c-0.01,0.014-0.017,0.029-0.027,0.044 C138.53,8,138.493,8.067,138.453,8.13c-0.04,0.065-0.08,0.128-0.117,0.193c-0.045,0.079-0.094,0.155-0.137,0.236 c-0.013,0.024-0.023,0.049-0.034,0.072c-0.064,0.122-0.123,0.248-0.18,0.374c-0.023,0.049-0.049,0.096-0.07,0.144 c-0.015,0.036-0.033,0.07-0.049,0.106c-0.107,0.253-0.198,0.512-0.279,0.776c-0.003,0.012-0.005,0.025-0.01,0.037 c-0.083,0.277-0.149,0.562-0.202,0.848c-0.014,0.074-0.023,0.151-0.034,0.225c-0.023,0.15-0.05,0.298-0.064,0.45 c-0.008,0.082-0.008,0.162-0.013,0.244c-0.006,0.088-0.011,0.176-0.014,0.264c-0.003,0.094-0.011,0.187-0.011,0.281 c0,0.144,0.012,0.287,0.019,0.43c0.004,0.077,0.005,0.152,0.012,0.229c0.003,0.043,0.004,0.086,0.008,0.129 c0.029,0.294,0.072,0.584,0.133,0.871l21.316,106.582c0.002,0.01,0.004,0.019,0.005,0.029l0.005,0.025 c0.03,0.153,0.072,0.301,0.111,0.451c0.044,0.17,0.094,0.338,0.149,0.505c0.051,0.154,0.101,0.309,0.161,0.458 c0.036,0.088,0.078,0.174,0.116,0.261c0.064,0.144,0.127,0.288,0.198,0.427c0.043,0.085,0.093,0.167,0.139,0.251 c0.078,0.14,0.157,0.278,0.244,0.412c0.05,0.078,0.102,0.154,0.155,0.231c0.095,0.138,0.194,0.273,0.297,0.404 c0.054,0.069,0.108,0.137,0.164,0.204c0.117,0.14,0.24,0.275,0.368,0.406c0.039,0.04,0.071,0.083,0.11,0.122l186.603,186.602 l60.977,60.976c1.578,1.578,3.648,2.367,5.716,2.367s4.138-0.789,5.716-2.367l85.367-85.366c1.517-1.517,2.368-3.573,2.368-5.717 S506.847,277.102,505.33,275.584z M252.031,45.157l175.169,175.169l-16.006,16.006L236.025,61.163L252.031,45.157z M399.761,247.766l-19.055,19.055L205.536,91.651l9.517-9.517c0.003-0.003,0.008-0.006,0.011-0.01l9.528-9.528L399.761,247.766z M159.433,41.716l-3.806-19.029l5.32,1.064l13.71,2.742L159.433,41.716z M163.245,60.772l30.468-30.468l41.921,8.384 L203.631,70.69c-0.003,0.003-0.006,0.008-0.01,0.011l-15.224,15.224c-0.003,0.003-0.008,0.006-0.011,0.01l-16.758,16.758 L163.245,60.772z M178.097,119.092l16.006-16.006l175.17,175.168l-16.006,16.006L178.097,119.092z M414.243,355.238 l-49.544-49.544l21.722-21.722l52.211-52.211l49.544,49.544L414.243,355.238z"></path> </g> </g> <g> <g> <path d="M462.21,278.303l-21.558-21.559c-3.156-3.156-8.275-3.156-11.433,0c-3.157,3.158-3.157,8.276,0,11.434l21.559,21.559 c1.578,1.578,3.648,2.367,5.716,2.367s4.138-0.789,5.716-2.367C465.367,286.578,465.367,281.46,462.21,278.303z"></path> </g> </g> <g> <g> <path d="M505.326,100.133L444.35,39.157l-30.488-30.49c-11.557-11.556-30.363-11.555-41.922,0l-27.44,27.44 c-11.558,11.559-11.558,30.364,0,41.923l30.489,30.488l60.976,60.977c1.516,1.516,3.572,2.367,5.716,2.367 c2.144,0,4.201-0.852,5.716-2.367l57.928-57.928C508.483,108.409,508.483,103.291,505.326,100.133z M355.935,66.595 c-5.254-5.253-5.254-13.801,0-19.053l27.439-27.44c5.254-5.254,13.802-5.254,19.056,0l24.772,24.772l-46.494,46.494 L355.935,66.595z M441.683,152.345L392.14,102.8l46.494-46.493l49.544,49.543L441.683,152.345z"></path> </g> </g> <g> <g> <path d="M468.741,100.133l-24.39-24.391c-3.157-3.156-8.276-3.156-11.432,0c-3.157,3.158-3.157,8.276,0,11.434l24.39,24.391 c1.578,1.578,3.648,2.367,5.716,2.367s4.138-0.789,5.716-2.367C471.898,108.409,471.898,103.291,468.741,100.133z"></path> </g> </g> </g></svg>
                </div>
                <div class="">
                    <h1 class="text-xs font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md">FREE DESIGN & FREE SURVEY</h1>
                    <p class="pr-2 text-xs font-normal tracking-tight 2xl:text-2xl xl:text-xl lg:text-lg md:text-md lg:pr-50 md:pr-10 md:tracking-wider">Dapatkan desain dan survei gratis untuk memastikan proyek Anda berjalan lancar dan tepat sasaran.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag Transparan --}}
    <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center px-10 mt-5 2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 2xl:px-50 xl:px-30 lg:px-30 md:px-30" style="font-family: Poppins, sans-serif;">
        <div class="w-full px-5 py-4 border 2xl:px-8 xl:px-5 lg:px-5 md:px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 bg-landing-brownLight-2/60 rounded-3xl">
            <div class="flex items-center">
                <div class="p-5 mx-2 border-0 rounded-full bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 lg:mx-5">
                    <svg viewBox="0 0 48 48" class="w-12 h-full 2xl:w-14 xl:w-12 lg:w-12 md:w-12" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M4 11.9143L24 19L44 11.9143L24 5L4 11.9143Z" fill="#251D16" stroke="#c29844" stroke-width="4" stroke-linejoin="round"></path> <path d="M4 20L24 27L44 20" stroke="#c29844" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 27.9999L24 34.9999L44 27.9999" stroke="#c29844" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 36L24 43L44 36" stroke="#c29844" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="">
                    <h1 class="text-xs font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md">TRANSPARAN</h1>
                    <p class="pr-2 text-xs font-normal tracking-tight 2xl:text-2xl xl:text-xl lg:text-lg md:text-md lg:pr-50 md:pr-10 md:tracking-wider">Memastikan proses yang jelas, terbuka, dan memberi Anda kepercayaan penuh sepanjang proyek.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag Rekanan Terpercaya --}}
    <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center px-10 mt-5 2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 2xl:px-50 xl:px-30 lg:px-30 md:px-30" style="font-family: Poppins, sans-serif;">
        <div class="w-full px-5 py-4 border 2xl:px-8 xl:px-5 lg:px-5 md:px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 bg-landing-brownLight-1/50 rounded-3xl">
            <div class="flex items-center">
                <div class="p-5 mx-2 border-0 rounded-full bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 lg:mx-5">
                    <svg viewBox="0 0 48 48" class="w-12 h-full 2xl:w-14 xl:w-12 lg:w-12 md:w-12" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 9.25564L24.0086 4L42 9.25564V20.0337C42 31.3622 34.7502 40.4194 24.0026 44.0005C13.2521 40.4195 6 31.36 6 20.0287V9.25564Z" stroke="#c29844" stroke-width="4" stroke-linejoin="round"></path> <circle cx="24" cy="18" r="5" fill="#251d16" stroke="#c29844" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></circle> <path d="M32 31C32 26.5817 28.4183 23 24 23C19.5817 23 16 26.5817 16 31" stroke="#c29844" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="">
                    <h1 class="text-xs font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md">REKANAN TERPERCAYA (SUPERVISI OLEH ARSITEK DAN TEKNIK SIPIL)</h1>
                    <p class="pr-2 text-xs font-normal tracking-tight 2xl:text-2xl xl:text-xl lg:text-lg md:text-md lg:pr-50 md:pr-10 md:tracking-wider">Bekerjasama dengan rekanan terpercaya untuk memastikan setiap tahap pengerjaan bangunan memenuhi standar kualitas dan keamanan tertinggi.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag Proses Mudah dan Aman --}}
    <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center px-10 mt-5 2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 2xl:px-50 xl:px-30 lg:px-30 md:px-30" style="font-family: Poppins, sans-serif;">
        <div class="w-full px-5 py-4 border 2xl:px-8 xl:px-5 lg:px-5 md:px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 bg-landing-brownLight-2/60 rounded-3xl">
            <div class="flex items-center">
                <div class="p-5 mx-2 border-0 rounded-full bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 lg:mx-5">
                    <svg fill="#c29844" class="w-12 h-full 2xl:w-14 xl:w-12 lg:w-12 md:w-12" height="200px" width="200px" version="1.1" id="XMLID_215_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="validation"> <g> <path d="M12,24c-1.2,0-2.1-1-2.8-1.8c-0.4-0.4-0.8-0.9-1-1c-0.3-0.1-1-0.1-1.5-0.1c-1.1,0.1-2.3,0.1-3.1-0.7s-0.8-2.1-0.7-3.1 c0-0.6,0.1-1.2-0.1-1.5c-0.1-0.3-0.6-0.7-1-1C1,14.1,0,13.2,0,12s1-2.1,1.8-2.8c0.4-0.4,0.9-0.8,1-1c0.1-0.3,0.1-1,0.1-1.5 C2.8,5.6,2.8,4.4,3.6,3.6c0.8-0.8,2.1-0.8,3.1-0.7c0.6,0,1.2,0.1,1.5-0.1c0.3-0.1,0.7-0.6,1-1C9.9,1,10.8,0,12,0s2.1,1,2.8,1.8 c0.4,0.4,0.8,0.9,1,1c0.3,0.1,1,0.1,1.5,0.1c1.1-0.1,2.3-0.1,3.1,0.7c0.8,0.8,0.8,2.1,0.7,3.1c0,0.6-0.1,1.2,0.1,1.5 c0.1,0.3,0.6,0.7,1,1C23,9.9,24,10.8,24,12s-1,2.1-1.8,2.8c-0.4,0.4-0.9,0.8-1,1c-0.1,0.3-0.1,1-0.1,1.5c0.1,1.1,0.1,2.3-0.7,3.1 c-0.8,0.8-2.1,0.8-3.1,0.7c-0.6,0-1.2-0.1-1.5,0.1c-0.3,0.1-0.7,0.6-1,1C14.1,23,13.2,24,12,24z M7.5,19.1c0.5,0,1,0.1,1.5,0.2 c0.7,0.3,1.3,0.9,1.8,1.5c0.4,0.5,1,1.1,1.3,1.1s0.9-0.6,1.3-1.1c0.5-0.6,1.1-1.2,1.8-1.5c0.7-0.3,1.6-0.3,2.4-0.2 c0.6,0,1.4,0.1,1.6-0.1s0.1-1,0.1-1.6c-0.1-0.8-0.1-1.7,0.2-2.4c0.3-0.7,0.9-1.3,1.5-1.8c0.4-0.3,1-0.9,1-1.2s-0.6-0.9-1.1-1.3 c-0.6-0.5-1.2-1.1-1.5-1.8c-0.3-0.7-0.3-1.6-0.2-2.4c0-0.6,0.1-1.4-0.1-1.6c-0.2-0.2-1-0.1-1.6-0.1c-0.8,0.1-1.7,0.1-2.4-0.2 c-0.7-0.3-1.3-0.9-1.8-1.5C12.9,2.6,12.3,2,12,2s-0.9,0.6-1.3,1.1c-0.5,0.6-1.1,1.2-1.8,1.5S7.3,4.9,6.5,4.8 c-0.6,0-1.4-0.1-1.6,0.1c-0.2,0.2-0.1,1-0.1,1.6c0.1,0.8,0.1,1.7-0.2,2.4c-0.3,0.7-0.9,1.3-1.5,1.8C2.6,11.1,2,11.7,2,12 s0.6,0.9,1.1,1.3c0.6,0.5,1.2,1.1,1.5,1.8s0.3,1.6,0.2,2.4c0,0.6-0.1,1.4,0.1,1.6c0.2,0.2,1,0.1,1.6,0.1 C6.8,19.2,7.1,19.1,7.5,19.1z M11,16.4l-3.7-3.7l1.4-1.4l2.3,2.3l5.3-5.3l1.4,1.4L11,16.4z"></path> </g> </g> </g></svg>
                </div>
                <div class="">
                    <h1 class="text-xs font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md">PROSES MUDAH DAN AMAN</h1>
                    <p class="pr-2 text-xs font-normal tracking-tight 2xl:text-2xl xl:text-xl lg:text-lg md:text-md lg:pr-50 md:pr-10 md:tracking-wider">Proses kami mudah, aman, dan terjamin dalam memastikan setiap tahap berjalan lancar dengan hasil sesuai harapan.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag dOKUMENTASI PROYEK --}}
    <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center px-10 mt-5 2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 2xl:px-50 xl:px-30 lg:px-30 md:px-30" style="font-family: Poppins, sans-serif;">
        <div class="w-full px-5 py-4 border 2xl:px-8 xl:px-5 lg:px-5 md:px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 bg-landing-brownLight-1/50 rounded-3xl">
            <div class="flex items-center">
                <div class="p-5 mx-2 border-0 rounded-full bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 lg:mx-5">
                    <svg fill="#c29844" class="w-12 h-full 2xl:w-14 xl:w-12 lg:w-12 md:w-12" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 296.999 296.999" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M169.197,43.09H18.808c-7.176,0-13.014,5.838-13.014,13.014v227.444c0,7.176,5.838,13.014,13.014,13.014h150.389 c7.176,0,13.014-5.838,13.014-13.014V56.105C182.211,48.928,176.373,43.09,169.197,43.09z M151.794,274.258H36.21 c-4.479,0-8.111-3.632-8.111-8.111s3.632-8.111,8.111-8.111h115.584c4.479,0,8.111,3.632,8.111,8.111 S156.273,274.258,151.794,274.258z M151.794,235.73H36.21c-4.479,0-8.111-3.632-8.111-8.111s3.632-8.111,8.111-8.111h115.584 c4.479,0,8.111,3.632,8.111,8.111C159.905,232.098,156.273,235.73,151.794,235.73z M151.794,197.202H36.21 c-4.479,0-8.111-3.632-8.111-8.111s3.632-8.111,8.111-8.111h115.584c4.479,0,8.111,3.632,8.111,8.111 S156.273,197.202,151.794,197.202z M151.794,158.674H36.21c-4.479,0-8.111-3.632-8.111-8.111s3.632-8.111,8.111-8.111h115.584 c4.479,0,8.111,3.632,8.111,8.111S156.273,158.674,151.794,158.674z M151.794,120.146H36.21c-4.479,0-8.111-3.632-8.111-8.111 s3.632-8.111,8.111-8.111h115.584c4.479,0,8.111,3.632,8.111,8.111S156.273,120.146,151.794,120.146z M151.794,81.618H36.21 c-4.479,0-8.111-3.632-8.111-8.111c0-4.479,3.632-8.111,8.111-8.111h115.584c4.479,0,8.111,3.632,8.111,8.111 C159.905,77.986,156.273,81.618,151.794,81.618z"></path> <path d="M213.642,0H57.336c-7.177,0-13.014,5.838-13.014,13.014v13.854h124.875c16.121,0,29.237,13.115,29.237,29.237v201.931 h15.208c7.176,0,13.014-5.838,13.014-13.014V13.014C226.656,5.838,220.818,0,213.642,0z"></path> <path d="M291.205,23.324C291.204,10.464,281.88,0,270.42,0c-11.461,0-20.785,10.464-20.785,23.324v13.584h41.57V23.324z"></path> <path d="M249.635,53.13v214.537h0c0,1.2,0.342,2.373,0.983,3.371l14.921,23.249c1.087,1.694,2.919,2.712,4.881,2.712 c1.961,0,3.794-1.018,4.881-2.712l14.921-23.249c0.641-0.998,0.983-2.171,0.983-3.371V53.13H249.635z"></path> </g> </g> </g> </g></svg>
                </div>
                <div class="">
                    <h1 class="text-xs font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md">DOKUMENTASI PROYEK DAN PENDAMPINGAN</h1>
                    <p class="pr-2 text-xs font-normal tracking-tight 2xl:text-2xl xl:text-xl lg:text-lg md:text-md lg:pr-50 md:pr-10 md:tracking-wider">Memastikan setiap tahap tercatat dengan jelas dan berjalan sesuai rencana.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- CardTag BERGARANSI --}}
    <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center px-10 mt-5 2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 2xl:px-50 xl:px-30 lg:px-30 md:px-30" style="font-family: Poppins, sans-serif;">
        <div class="w-full px-5 py-4 border 2xl:px-8 xl:px-5 lg:px-5 md:px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 bg-landing-brownLight-2/60 rounded-3xl">
            <div class="flex items-center">
                <div class="p-5 mx-2 border-0 rounded-full bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 lg:mx-5">
                    <svg viewBox="0 0 1024 1024" class="w-12 h-full 2xl:w-14 xl:w-12 lg:w-12 md:w-12" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M182.87 146.29h585.14v292.57h73.14V73.14H109.72v877.72h402.29v-73.15H182.87z" fill="#c29844"></path><path d="M713.14 481.52L512 582.1v88.24c0 110.29 62.31 211.11 160.95 260.43l40.19 20.09 40.19-20.09c98.64-49.32 160.95-150.14 160.95-260.43V582.1L713.14 481.52z m128 188.81c0 83.12-46.18 157.84-120.52 195.01l-7.48 3.74-7.48-3.74c-74.34-37.17-120.52-111.9-120.52-195.01V627.3l128-64 128 64v43.03z" fill="#c29844"></path><path d="M657.87 683.21l-36.33 41.11 93.25 82.43 113.93-131.09-41.39-36L709.69 729zM256 256h438.86v73.14H256zM256 438.86h292.57V512H256zM256 621.71h146.29v73.14H256z" fill="#c29844"></path></g></svg>
                </div>
                <div class="">
                    <h1 class="text-xs font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md">BERGARANSI</h1>
                    <p class="pr-2 text-xs font-normal tracking-tight 2xl:text-2xl xl:text-xl lg:text-lg md:text-md lg:pr-50 md:pr-10 md:tracking-wider">Jasa kami dilengkapi garansi anti bocor dan retak struktur, memberikan jaminan ketahanan dan kualitas bangunan yang tahan lama.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="relative flex items-center w-full h-full 2xl:mt-70 xl:mt-50 lg:mt-50 md:mt-50 mt-50">
        <div class="absolute z-[-1] w-full 2xl:h-[500px] xl:h-[450px] lg:h-[400px] md:h-[400px] h-[400px] overflow-hidden">
            <div class="absolute inset-0 bg-theme3 opacity-60"></div>
            <img src="{{asset('assets/img/service/kontraktor/bg2-servicekontraktor.jpg')}}" alt="" class="object-cover w-screen h-full">
        </div>
        <div data-aos="fade-right" data-aos-duration="1000" class="py-10 mt-30" style="font-family: League Spartan, sans-serif;">
            <h1 class="ml-10 text-5xl font-bold 2xl:text-6xl xl:text-5xl lg:text-5xl md:text-5xl text-theme1 drop-shadow-2">Konstruksi Arsitektural</h1>
        </div>
    </div>
    {{-- Card Konstruksi Arsitektural --}}
    <div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000" class="flex items-center justify-center" style="font-family: Poppins, sans-serif;">
        <div class="relative">
            <div class="border-0 2xl:w-[850px] xl:w-[600px] lg:w-[600px] md:w-[500px] sm:w-[350px] w-[350px] 2xl:h-[600px] xl:h-[550px] lg:h-[550px] md:h-[550px] h-[550px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 text-lg font-bold 2xl:text-4xl xl:text-3xl lg:text-3xl md:text-3xl text-landing-gold">MULAI 3,5 JUTA / M2</h1>
                    <p class="text-xs font-normal tracking-tight 2xl:text-md xl:text-sm lg:text-sm md:text-md text-landing-gold md:tracking-wider">*non-metropolitan (bukan kota besar)</p>
                </div>
                <div class="mx-10 mt-3 2xl:mx-20 xl:mx-20 lg:mx-20 md:mx-20 2xl:mt-6 xl:mt-3 lg:mt-3 md:mt-3">
                    <h3 class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">FASILITAS :</h3>
                    <ul class="">
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">FREE DESIGN DAN RANCANGAN ANGGARAN BIAYA (RAB)</p>
                        </li>
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEKERJAAN PONDASI</p>
                        </li>
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEKERJAAN STRUKTUR BAJA / BETON (SLOOF, KOLOM, BALOK, ATAP)</p>
                        </li>
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEKERJAAN ARSITEKTURAL (DINDING DAN ORNAMEN FASAD, LANTAI)</p>
                        </li>
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEKERJAAN MEP</p>
                        </li>
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEKERJAAN FINISHING (CAT, BATU ALAM, DLL)</p>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <h3 class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">LAYANAN LAIN :</h3>
                        <ul class="">
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEMBUATAN KANOPI</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEMBUATAN LANSKAP (TAMAN, KOLAM IKAN)</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEMBUATAN PAGAR BESI</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEKERJAAN PAVING</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEMBUATAN KOLAM RENANG</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="https://wa.me/62895371025425">
                <button class="absolute bottom-0 w-full px-5 py-5 text-white transition-transform duration-150 transform border-0 rounded-full bg-theme2 hover:scale-105 hover:shadow-lg hover:-translate-y-1 hover:bg-landing-body hover:border-4 hover:border-theme2 hover:text-theme3">
                    <h1 class="text-xs font-bold text-center 2xl:text-xl xl:text-base lg:text-base md:text-xs">PILIH PAKET</h1>
                </button>
            </a>
        </div>
    </div>

    <div class="relative flex items-center w-full h-full 2xl:mt-70 xl:mt-50 lg:mt-50 md:mt-50 mt-50">
        <div class="absolute z-[-1] w-full 2xl:h-[500px] xl:h-[450px] lg:h-[400px] md:h-[400px] h-[400px] overflow-hidden">
            <div class="absolute inset-0 bg-theme3 opacity-60"></div>
            <img src="{{asset('assets/img/service/kontraktor/bg3-servicekontraktor.jpg')}}" alt="" class="object-cover w-screen h-full">
        </div>
        <div data-aos="fade-right" data-aos-duration="1000" class="py-10 mt-30" style="font-family: League Spartan, sans-serif;">
            <h1 class="ml-10 text-5xl font-bold 2xl:text-6xl xl:text-5xl lg:text-5xl md:text-5xl text-theme1 drop-shadow-2">Konstruksi Interior</h1>
        </div>
    </div>

    {{-- Card Konstruksi Interior --}}
    <div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000" class="flex items-center justify-center" style="font-family: Poppins, sans-serif;">
        <div class="relative">
            <div class="border-0 2xl:w-[850px] xl:w-[600px] lg:w-[600px] md:w-[500px] sm:w-[350px] w-[350px] 2xl:h-[600px] xl:h-[550px] lg:h-[550px] md:h-[550px] h-[550px] bg-theme3 rounded-[2rem] pt-5">
                <div class="text-center">
                    <h1 class="mt-5 text-lg font-bold 2xl:text-4xl xl:text-3xl lg:text-3xl md:text-3xl text-landing-gold">MULAI 2 JUTA / M2</h1>
                    <p class="text-xs font-normal tracking-tight 2xl:text-md xl:text-sm lg:text-sm md:text-md text-landing-gold md:tracking-wider">*non-metropolitan (bukan kota besar)</p>
                </div>
                <div class="mx-10 mt-3 2xl:mx-20 xl:mx-20 lg:mx-20 md:mx-20 2xl:mt-6 xl:mt-3 lg:mt-3 md:mt-3">
                    <h3 class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">FASILITAS :</h3>
                    <ul class="">
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">FREE DESIGN DAN RANCANGAN ANGGARAN BIAYA (RAB) SUPERVISI</p>
                        </li>
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">PEKERJAAN FURNITUR 1 RUANGAN</p>
                        </li>
                        <li class="ml-8 text-white list-disc">
                            <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">FREE PENGIRIMAN *S&K BERLAKU</p>
                        </li>
                    </ul>
                    <div class="mt-3 mb-5">
                        <h3 class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">LAYANAN LAIN :</h3>
                        <ul class="">
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">KITCHEN SET & MINI BAR</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">WALK IN CLOSET</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">LEMARI (LEMARI BAJU, ETALASE / DISPLAY)</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">BUFFET & CABINET</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">SOFA</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">DIVAN KASUR / TEMPAT TIDUR (SPRING BOX)</p>
                            </li>
                            <li class="ml-8 text-white list-disc">
                                <p class="text-xs text-white 2xl:text-xl xl:text-base lg:text-base md:text-xs">MEJA CUSTOM (MEJA KANTOR, MEJA MEETING, MEJA KOMPUTER, MEJA RESEPSIONIS, MEJA MAKAN)</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="https://wa.me/62895371025425">
                <button class="absolute bottom-0 w-full px-5 py-5 text-white transition-transform duration-150 transform border-0 rounded-full bg-theme2 hover:scale-105 hover:shadow-lg hover:-translate-y-1 hover:bg-landing-body hover:border-4 hover:border-theme2 hover:text-theme3">
                    <h1 class="text-xs font-bold text-center 2xl:text-xl xl:text-base lg:text-base md:text-xs">PILIH PAKET</h1>
                </button>
            </a>
        </div>
    </div>

     {{-- Carousel Slider --}}
    <div class="relative w-full my-5 2xl:my-60 xl:my-40 lg:my-40 md:my-20 sm:my-10">
    <div class="relative swiper centered-slide-carousel swiper-container ">
    <div class="flex justify-center invisible mb-10 2xl:visible xl:visible lg:invisible md:invisible sm:invisible">
        <div class="flex items-center gap-2 mr-3">
            <div class="flex relative p-5 border rounded-full bg-black-2 2xl:p-5 xl:p-4 lg:p-5 md:p-5">
                <div class="w-[20px] h-[20px] flex justify-center">
                    <img src="{{asset('assets/img/HeadLogo_Azwa.png')}}" alt="" class="w-[15px] h-[20px]">
                </div>
            </div>
            <h1 class="text-xs font-semibold text-landing-brown-3 2xl:text-lg xl:text-sm lg:text-base md:text-xs" style="font-family: Garet, sans-serif;">azwadesignstudio</h1>
        </div>
    </div>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-64 md:h-64">
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp3.jpg')}}" alt="Slide 1" class="object-cover w-1/2 h-full lg:w-full md:w-3/4 sm:w-1/2 rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-64 md:h-64">
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp4.jpg')}}" alt="Slide 1" class="object-cover w-1/2 h-full lg:w-full md:w-3/4 sm:w-1/2 rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-64 md:h-64">
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp5.jpg')}}" alt="Slide 1" class="object-cover w-1/2 h-full lg:w-full md:w-3/4 sm:w-1/2 rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-64 md:h-64">
                <img src="{{asset('assets/img/Enscape.png')}}" alt="Slide 1" class="object-cover w-1/2 h-full lg:w-full md:w-1/2 sm:w-1/2 rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-64 md:h-64">
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp1.jpg')}}" alt="Slide 1" class="object-cover w-1/2 h-full lg:w-full md:w-3/4 sm:w-1/2 rounded-2xl">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="flex items-center justify-center h-64 overflow-hidden rounded-2xl 2xl:h-75 xl:h-64 lg:h-64 md:h-64">
                <img src="{{asset('assets/img/service/kontraktor/slide-framehp2.jpg')}}" alt="Slide 1" class="object-cover w-1/2 h-full lg:w-full md:w-3/4 sm:w-1/2 rounded-2xl">
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    </div>
    <div class="relative flex justify-center invisible mt-2 z-9 2xl:visible xl:visible lg:invisible md:invisible sm:invisible" style="font-family: Garet, sans-serif;">
            <a href="https://www.instagram.com/azwadesignstudio?igsh=MTVmM3B6cXlzaDhybg==" class="px-8 py-2 transition duration-300 ease-in-out transform border rounded-full bg-landing-brown-1 hover:bg-landing-brown-3 hover:scale-105 2xl:px-9 xl:px-8 2xl:py-3 xl:py-2">
                <div class="flex items-center gap-2 text-xs 2xl:text-xl xl:text-base lg:text-base md:text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                        <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                    </svg>
                    <h1>Follow us!</h1>
                </div>
            </a>
    </div>
    <div class="absolute top-[50%] left-[50.5%] transform -translate-x-1/2 -translate-y-1/2 lg:visible md:invisible sm:invisible invisible z-0">
        <img src="{{asset('assets/img/service/kontraktor/bg-framehp.png')}}" alt="Frame" class="w-[100%] h-auto">
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
            autoplay: {
                delay: 1200,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".centered-slide-carousel .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // Extra large screens (1920px and above)
                1920: {
                    slidesPerView: 5,
                    spaceBetween: 40,
                },
                // Large screens (desktop, 1440px and above)
                1536: {
                    slidesPerView: 5,
                    spaceBetween: 35,
                },
                // Medium screens (desktop, 1366px and above)
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
                // Small screens (large tablets and small desktops, 1024px and above)
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                // Small tablets (768px and above)
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                // Extra small screens (mobile phones, 576px and above)
                576: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                }
            },
        });
    </script>
        
@endsection