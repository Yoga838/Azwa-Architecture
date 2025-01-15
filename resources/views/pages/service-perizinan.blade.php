@extends("landing")

@section('subtitle', 'Layanan Perizinan')

@section("content")
<div class="w-full h-full flex justify-center relative">
    <div class="absolute z-[-1] w-full 2xl:h-[500px] xl:h-[450px] lg:h-[400px] md:h-[400px] h-[400px] overflow-hidden">
        <div class="absolute inset-0 bg-theme3 opacity-60"></div>
        <img src="{{asset('assets/img/service/perizinan/perizinan5.jpeg')}}" alt="" class="w-screen object-cover h-full">
    </div>
    <div data-aos="fade-left" data-aos-duration="1000" class="py-32">
        <div class="mx-10">
            <p class="2xl:mt-30 xl:mt-20 lg:mt-20 md:mt-20 mt-20 text-start 2xl:text-6xl xl:text-5xl lg:text-4xl md:text-4xl text-2xl font-bold text-theme1 drop-shadow-2">
                Bersama Kami, <br> Perizinan Bangunan Lebih Mudah dan Aman!
            </p>
        </div>
    </div>
</div>

<h1 class="text-landing-gold 2xl:text-4xl xl:text-4xl lg:text-3xl md:text-2xl text-md font-bold text-center 2xl:mt-20 xl:mt-10 lg:mt-10 md:mt-10 mt-10">KENAPA HARUS KAMI ?</h1>
{{-- CardTag --}}
<div data-aos="fade-up" data-aos-duration="1000" class="2xl:mt-10 xl:mt-5 lg:mt-5 md:mt-5 mt-5 flex justify-center items-center 2xl:px-50 xl:px-30 lg:px-30 md:px-30 px-10">
    <div class="border w-full 2xl:px-8 xl:px-5 lg:px-5 md:px-5 px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 py-4 bg-landing-brownLight-1/50 rounded-3xl">
        <div class="flex items-center">
            <div class="border-0 bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 p-5 rounded-full lg:mx-5 mx-2">
                <svg fill="#c29844" class="2xl:w-14 xl:w-12 lg:w-12 md:w-12 w-12 h-full" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.48"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M31.634,37.989c1.041-0.081,1.99-0.612,2.606-1.459l9.363-12.944c0.287-0.397,0.244-0.945-0.104-1.293 c-0.348-0.347-0.896-0.39-1.293-0.104L29.26,31.555c-0.844,0.614-1.375,1.563-1.456,2.604s0.296,2.06,1.033,2.797 C29.508,37.628,30.413,38,31.354,38C31.447,38,31.54,37.996,31.634,37.989z M29.798,34.315c0.035-0.457,0.269-0.874,0.637-1.142 l7.897-5.713l-5.711,7.895c-0.27,0.371-0.687,0.604-1.144,0.64c-0.455,0.03-0.902-0.128-1.227-0.453 C29.928,35.219,29.762,34.771,29.798,34.315z"></path> <path d="M54.034,19.564c-0.01-0.021-0.01-0.043-0.021-0.064c-0.012-0.02-0.031-0.031-0.044-0.05 c-1.011-1.734-2.207-3.347-3.565-4.809l2.148-2.147l1.414,1.414l4.242-4.243l-4.242-4.242l-4.243,4.242l1.415,1.415l-2.148,2.147 c-1.462-1.358-3.074-2.555-4.809-3.566c-0.019-0.013-0.03-0.032-0.05-0.044c-0.021-0.012-0.043-0.011-0.064-0.022 c-3.093-1.782-6.568-2.969-10.273-3.404V5h1.5c1.379,0,2.5-1.121,2.5-2.5S36.672,0,35.293,0h-9c-1.379,0-2.5,1.121-2.5,2.5 s1.121,2.5,2.5,2.5h1.5v1.156c-1.08,0.115-2.158,0.291-3.224,0.535c-0.538,0.123-0.875,0.66-0.751,1.198 c0.123,0.538,0.66,0.876,1.198,0.751c0.92-0.211,1.849-0.37,2.78-0.477l1.073-0.083c0.328-0.025,0.63-0.043,0.924-0.057V10 c0,0.553,0.447,1,1,1s1-0.447,1-1V8.03c3.761,0.173,7.305,1.183,10.456,2.845l-0.986,1.707c-0.276,0.479-0.112,1.09,0.366,1.366 c0.157,0.091,0.329,0.134,0.499,0.134c0.346,0,0.682-0.179,0.867-0.5l0.983-1.703c3.129,1.985,5.787,4.643,7.772,7.772 l-1.703,0.983C49.57,20.91,49.406,21.521,49.683,22c0.186,0.321,0.521,0.5,0.867,0.5c0.17,0,0.342-0.043,0.499-0.134l1.707-0.986 c1.685,3.196,2.698,6.798,2.849,10.619H53.63c-0.553,0-1,0.447-1,1s0.447,1,1,1h1.975c-0.151,3.821-1.164,7.423-2.849,10.619 l-1.707-0.986c-0.478-0.276-1.09-0.114-1.366,0.366c-0.276,0.479-0.112,1.09,0.366,1.366l1.703,0.983 c-1.985,3.129-4.643,5.787-7.772,7.772l-0.983-1.703c-0.277-0.48-0.89-0.643-1.366-0.366c-0.479,0.276-0.643,0.888-0.366,1.366 l0.986,1.707c-3.151,1.662-6.695,2.672-10.456,2.845V56c0-0.553-0.447-1-1-1s-1,0.447-1,1v1.976 c-1.597-0.055-3.199-0.255-4.776-0.617c-0.538-0.129-1.075,0.213-1.198,0.751c-0.124,0.538,0.213,1.075,0.751,1.198 C26.568,59.768,28.607,60,30.63,60c0.049,0,0.096-0.003,0.145-0.004c0.007,0,0.012,0.004,0.018,0.004 c0.008,0,0.015-0.005,0.023-0.005c4.807-0.033,9.317-1.331,13.219-3.573c0.031-0.014,0.064-0.021,0.094-0.039 c0.02-0.012,0.031-0.031,0.05-0.044c4.039-2.354,7.414-5.725,9.773-9.761c0.019-0.027,0.043-0.048,0.06-0.078 c0.012-0.021,0.011-0.043,0.021-0.064C56.317,42.476,57.63,37.89,57.63,33S56.317,23.524,54.034,19.564z M53.965,8.251l1.414,1.414 l-1.414,1.415L52.55,9.665L53.965,8.251z M29.793,6.021V3h-3.5c-0.275,0-0.5-0.225-0.5-0.5s0.225-0.5,0.5-0.5h9 c0.275,0,0.5,0.225,0.5,0.5S35.568,3,35.293,3h-3.5v3.021C31.445,6.007,31.113,6,30.793,6c-0.028,0-0.06,0.002-0.088,0.002 C30.68,6.002,30.655,6,30.63,6c-0.164,0-0.328,0.011-0.492,0.014C30.022,6.017,29.913,6.016,29.793,6.021z"></path> <path d="M21.793,14h-5c-0.553,0-1,0.447-1,1s0.447,1,1,1h5c0.553,0,1-0.447,1-1S22.346,14,21.793,14z"></path> <path d="M21.793,21h-10c-0.553,0-1,0.447-1,1s0.447,1,1,1h10c0.553,0,1-0.447,1-1S22.346,21,21.793,21z"></path> <path d="M21.793,28h-15c-0.553,0-1,0.447-1,1s0.447,1,1,1h15c0.553,0,1-0.447,1-1S22.346,28,21.793,28z"></path> <path d="M21.793,35h-19c-0.553,0-1,0.447-1,1s0.447,1,1,1h19c0.553,0,1-0.447,1-1S22.346,35,21.793,35z"></path> <path d="M21.793,42h-13c-0.553,0-1,0.447-1,1s0.447,1,1,1h13c0.553,0,1-0.447,1-1S22.346,42,21.793,42z"></path> <path d="M21.793,49h-7c-0.553,0-1,0.447-1,1s0.447,1,1,1h7c0.553,0,1-0.447,1-1S22.346,49,21.793,49z"></path> </g> </g></svg>
            </div>
            <div class="">
                <h1 class="font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs">PROSES CEPAT, MUDAH, DAN AMAN</h1>
                <p class="font-normal 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Perizinan cepat, mudah, dan aman untuk kelancaran proyek Anda.</p>
            </div>
        </div>
    </div>
</div>
{{-- CardTag --}}
<div data-aos="fade-up" data-aos-duration="1000" class="2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 mt-5 flex justify-center items-center 2xl:px-50 xl:px-30 lg:px-30 md:px-30 px-10">
    <div class="border w-full 2xl:px-8 xl:px-5 lg:px-5 md:px-5 px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 py-4 bg-landing-brownLight-2/60 rounded-3xl">
        <div class="flex items-center">
            <div class="border-0 bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 p-5 rounded-full lg:mx-5 mx-2">
                <svg viewBox="0 0 20 20" class="2xl:w-14 xl:w-12 lg:w-12 md:w-12 w-12 h-full" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#c29844" fill-rule="evenodd" d="M3 10a7 7 0 019.307-6.611 1 1 0 00.658-1.889 9 9 0 105.98 7.501 1 1 0 00-1.988.22A7 7 0 113 10zm14.75-5.338a1 1 0 00-1.5-1.324l-6.435 7.28-3.183-2.593a1 1 0 00-1.264 1.55l3.929 3.2a1 1 0 001.38-.113l7.072-8z"></path> </g></svg>
            </div>
            <div class="">
                <h1 class="font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs">SSK LENGKAP</h1>
                <p class="font-normal 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Kami menyediakan layanan dengan langkah SKK (Surat Keterangan Kelayakan) lengkap.</p>
            </div>
        </div>
    </div>
</div>
{{-- CardTag --}}
<div data-aos="fade-up" data-aos-duration="1000" class="2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 mt-5 flex justify-center items-center 2xl:px-50 xl:px-30 lg:px-30 md:px-30 px-10">
    <div class="border w-full 2xl:px-8 xl:px-5 lg:px-5 md:px-5 px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 py-4 bg-landing-brownLight-1/50 rounded-3xl">
        <div class="flex items-center">
            <div class="border-0 bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 p-5 rounded-full lg:mx-5 mx-2">
                <svg fill="#c29844" viewBox="50 50 400 400" class="2xl:w-14 xl:w-12 lg:w-12 md:w-12 w-12 h-full" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="hand-charity-love-heart-valentine"> <path d="M225.04,283.04c17.12,17.28,44.8,17.28,61.92,0l75.84-76.64c27.6-28,32.4-72.88,8.4-104.08 c-28.96-37.68-82.88-40.24-115.2-7.6c-32.32-32.64-86.24-30.08-115.2,7.6c-24,31.2-19.2,76.08,8.4,104.08L225.04,283.04z M310.32,96c16.4,0,31.6,7.6,41.84,20.96c16,20.8,13.2,52.72-6.48,72.56c-1.52,1.6-3.6,2.4-5.68,2.4c-2,0-4-0.8-5.6-2.32 c-3.12-3.12-3.2-8.16-0.08-11.36c14.16-14.24,16.4-36.96,5.2-51.6c-7.2-9.28-17.84-14.64-29.2-14.64c-4.4,0-8-3.6-8-8 S305.92,96,310.32,96z M258.48,254.96l36.16-36.56c3.12-3.2,8.16-3.2,11.36-0.08c3.12,3.12,3.12,8.16,0,11.28l-36.16,36.56 c-1.52,1.6-3.6,2.4-5.68,2.4c-2,0-4-0.8-5.6-2.32C255.44,263.12,255.36,258.08,258.48,254.96z M160,424h96c0,8.836-7.163,16-16,16 h-64C167.164,440,160,432.836,160,424z M440,224v74.32c0,8.72-3.52,17.12-9.84,23.12c-37.111,35.635-21.548,20.709-68.32,65.52 c-5.84,5.52-9.28,13.12-9.76,21.04H256h-96.08c-0.48-7.92-3.92-15.52-9.76-21.04c-46.771-44.811-31.209-29.885-68.32-65.52 c-6.32-6-9.84-14.4-9.84-23.12V224c0-8.855,7.28-16,16-16h8c8.8,0,16,7.2,16,16v77.04c0,8.48,3.36,16.64,9.36,22.64 c0.197,0.197,22.391,22.435,22.64,22.56c6.173,6.01,16.118,5.642,22.16-0.4l-30.88-30.88c-6.24-6.24-6.24-16.32,0-22.56l5.68-5.68 c6.32-6.32,16.4-6.32,22.64,0l20.56,20.56c5.483,5.483,10.869,4.72,18.56,4.72c8.48,0,16.64,3.36,22.64,9.36l21.28,21.28 c6,6,9.36,14.16,9.36,22.64c0-8.48,3.36-16.64,9.36-22.64l21.28-21.28c6-6,14.16-9.36,22.64-9.36c7.692,0,13.077,0.763,18.56-4.72 l20.56-20.56c6.24-6.32,16.32-6.32,22.64,0l5.68,5.68c6.24,6.24,6.24,16.32,0,22.56l-30.88,30.88 c6.042,6.042,15.987,6.411,22.16,0.4c0.249-0.125,22.443-22.363,22.64-22.56c6-6,9.36-14.16,9.36-22.64V224c0-8.8,7.2-16,16-16h8 C432.72,208,440,215.145,440,224z M256,424h96c0,8.836-7.164,16-16,16h-64C263.163,440,256,432.836,256,424z"></path> </g> <g id="Layer_1"></g> </g></svg>
            </div>
            <div class="">
                <h1 class="font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs">TRANSPARAN</h1>
                <p class="font-normal 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Pelayanan terbuka dalam memberikan informasi akurat dan terpercaya.</p>
            </div>
        </div>
    </div>
</div>
{{-- CardTag --}}
<div data-aos="fade-up" data-aos-duration="1000" class="2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 mt-5 flex justify-center items-center 2xl:px-50 xl:px-30 lg:px-30 md:px-30 px-10">
    <div class="border w-full 2xl:px-8 xl:px-5 lg:px-5 md:px-5 px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 py-4 bg-landing-brownLight-2/60 rounded-3xl">
        <div class="flex items-center">
            <div class="border-0 bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 p-5 rounded-full lg:mx-5 mx-2">
                <svg fill="#c29844" viewBox="0 0 32 32" class="2xl:w-14 xl:w-12 lg:w-12 md:w-12 w-12 h-full" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>hand-holding-hand</title> <path d="M29.064 19.701c-0.421-0.177-0.91-0.28-1.423-0.28-0.577 0-1.123 0.13-1.611 0.362l0.023-0.010-5.778 2.595c0.003-0.047 0.026-0.087 0.026-0.134-0.015-1.371-1.129-2.476-2.502-2.476-0.069 0-0.137 0.003-0.204 0.008l0.009-0.001h-3.783l-4.76-1.395c-0.062-0.020-0.133-0.031-0.207-0.031-0.001 0-0.003 0-0.004 0h-2.169v-0.757c-0-0.414-0.336-0.75-0.75-0.75h-3.883c-0.414 0-0.75 0.336-0.75 0.75v0 12.208c0 0.414 0.336 0.75 0.75 0.75h3.883c0.414-0 0.75-0.336 0.75-0.75v0-1.005c1.818 0.284 3.445 0.742 4.987 1.367l-0.149-0.054c1.15 0.416 2.478 0.656 3.862 0.656 0.007 0 0.014 0 0.021-0h-0.001c0.005 0 0.011 0 0.017 0 1.604 0 3.133-0.319 4.528-0.898l-0.078 0.029c1.243-0.553 2.298-1.136 3.297-1.799l-0.082 0.051c0.338-0.209 0.674-0.418 1.014-0.619 1.633-0.967 2.945-1.816 4.129-2.672 0.579-0.412 1.083-0.819 1.563-1.253l-0.014 0.013c0.373-0.302 0.671-0.682 0.871-1.116l0.008-0.019c0.031-0.079 0.048-0.17 0.048-0.266 0-0.057-0.006-0.112-0.018-0.165l0.001 0.005c-0.146-1.017-0.755-1.866-1.603-2.337l-0.016-0.008zM5.181 29.041h-2.383v-10.709h2.383zM28.719 22.541c-0.412 0.37-0.86 0.729-1.328 1.062l-0.047 0.032c-1.143 0.826-2.418 1.65-4.014 2.596-0.348 0.205-0.691 0.418-1.037 0.631-0.854 0.573-1.837 1.12-2.864 1.586l-0.13 0.053c-1.152 0.474-2.49 0.748-3.892 0.748-1.203 0-2.359-0.203-3.436-0.575l0.074 0.022c-1.555-0.648-3.363-1.145-5.248-1.407l-0.117-0.013v-7.436h2.062l4.76 1.395c0.062 0.020 0.133 0.031 0.207 0.031 0.001 0 0.003 0 0.004 0h3.89c0.883 0 1.197 0.521 1.197 0.969s-0.314 0.969-1.197 0.969h-6.809c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h7.781c0.001 0 0.003 0 0.004 0 0.11 0 0.214-0.024 0.307-0.068l-0.004 0.002 7.795-3.5c0.288-0.132 0.625-0.209 0.98-0.209 0.265 0 0.52 0.043 0.758 0.122l-0.017-0.005c0.383 0.23 0.658 0.604 0.752 1.046l0.002 0.011c-0.136 0.159-0.278 0.302-0.429 0.435l-0.005 0.004zM29.951 1.506h-3.883c-0.414 0-0.75 0.336-0.75 0.75v0 1.011c-1.814-0.279-3.443-0.74-4.981-1.374l0.143 0.052c-1.159-0.415-2.496-0.654-3.89-0.654-1.606 0-3.138 0.319-4.536 0.896l0.079-0.029c-1.242 0.552-2.297 1.136-3.295 1.8l0.081-0.051c-0.337 0.208-0.674 0.417-1.014 0.618-1.646 0.975-2.958 1.823-4.127 2.671-0.576 0.408-1.078 0.812-1.555 1.244l0.014-0.012c-0.377 0.304-0.678 0.686-0.882 1.123l-0.008 0.019c-0.032 0.081-0.051 0.175-0.051 0.273 0 0.056 0.006 0.11 0.017 0.162l-0.001-0.005c0.147 1.016 0.756 1.864 1.604 2.336l0.016 0.008c0.377 0.186 0.82 0.295 1.289 0.295 0.013 0 0.026-0 0.039-0l-0.002 0c0.612-0.008 1.191-0.142 1.715-0.377l-0.027 0.011 5.778-2.597c-0.003 0.047-0.026 0.088-0.026 0.135 0.014 1.371 1.129 2.477 2.502 2.477 0.069 0 0.136-0.003 0.204-0.008l-0.009 0.001h3.783l4.76 1.395c0.062 0.019 0.134 0.030 0.208 0.030 0.001 0 0.002 0 0.003 0h2.168v0.757c0 0.414 0.336 0.75 0.75 0.75h3.883c0.414-0 0.75-0.336 0.75-0.75v0-12.207c-0-0.414-0.336-0.75-0.75-0.75v0zM23.258 12.206l-4.76-1.394c-0.062-0.019-0.134-0.030-0.208-0.030-0.001 0-0.002 0-0.003 0h-3.89c-0.883 0-1.196-0.522-1.196-0.97s0.313-0.97 1.196-0.97h6.809c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-7.782c-0.111 0-0.217 0.024-0.312 0.067l0.005-0.002-7.793 3.503c-0.287 0.132-0.624 0.21-0.978 0.21-0.266 0-0.522-0.043-0.76-0.124l0.017 0.005c-0.382-0.229-0.657-0.604-0.751-1.045l-0.002-0.011c0.136-0.159 0.278-0.303 0.431-0.435l0.005-0.004c0.413-0.373 0.861-0.732 1.33-1.063l0.045-0.030c1.132-0.821 2.407-1.646 4.013-2.596 0.348-0.207 0.693-0.421 1.038-0.634 0.854-0.573 1.836-1.119 2.864-1.583l0.129-0.052c1.153-0.474 2.491-0.75 3.894-0.75 1.202 0 2.357 0.202 3.433 0.575l-0.074-0.022c1.554 0.647 3.362 1.145 5.245 1.409l0.118 0.014v7.434zM29.201 13.713h-2.383v-10.707h2.383z"></path> </g></svg>
            </div>
            <div class="">
                <h1 class="font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs">PENDAMPINGAN</h1>
                <p class="font-normal 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Pendampingan penuh dalam proses perizinan bangunan, memastikan setiap langkah berjalan lancar dan sesuai regulasi.</p>
            </div>
        </div>
    </div>
</div>
{{-- CardTag --}}
<div data-aos="fade-up" data-aos-duration="1000" class="2xl:mt-5 xl:mt-5 lg:mt-5 md:mt-5 mt-5 flex justify-center items-center 2xl:px-50 xl:px-30 lg:px-30 md:px-30 px-10">
    <div class="border w-full 2xl:px-8 xl:px-5 lg:px-5 md:px-5 px-5 2xl:py-6 xl:py-4 lg:py-4 md:py-4 py-4 bg-landing-brownLight-1/50 rounded-3xl">
        <div class="flex items-center">
            <div class="border-0 bg-theme3 2xl:p-6 xl:p-5 lg:p-5 md:p-5 p-5 rounded-full lg:mx-5 mx-2">
                <svg fill="#c29844" class="2xl:w-14 xl:w-12 lg:w-12 md:w-12 w-12 h-full" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425.47 425.47" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M423.492,233.259c-2.578-2.496-6.693-2.432-9.191,0.147l-48.898,50.49c-1.229-4.144-3.502-7.925-6.692-11.013 c-4.887-4.733-11.337-7.289-18.126-7.17c-5.288,0.084-10.3,1.773-14.495,4.813c-1.196-4.315-3.519-8.253-6.82-11.45 c-0.27-0.262-0.547-0.514-0.826-0.762v-54.417c11.645,11.021,27.343,17.801,44.604,17.801c3.59,0,6.5-2.91,6.5-6.5 s-2.91-6.5-6.5-6.5c-28.649,0-51.957-23.308-51.957-51.957v-22.095c0-3.59-2.91-6.5-6.5-6.5h-47.52 c-8.944,0-16.221-7.277-16.221-16.221s7.277-16.221,16.221-16.221h44.959c17.692,0,35.342,4.313,51.04,12.471 c25.914,13.467,45.164,36.177,54.205,63.946l1.754,5.386c1.112,3.414,4.782,5.282,8.193,4.168c3.414-1.112,5.279-4.78,4.168-8.193 l-1.754-5.385c-10.103-31.031-31.614-56.408-60.571-71.457c-17.542-9.117-37.265-13.936-57.035-13.936h-44.959 c-15.918,0-28.894,12.795-29.206,28.639H6.5c-3.59,0-6.5,2.91-6.5,6.5v147.74c0,3.59,2.91,6.5,6.5,6.5h165.691 c-0.204,1.376-0.304,2.778-0.281,4.197c0.109,6.802,2.86,13.155,7.748,17.888v0c4.786,4.636,11.06,7.174,17.707,7.174 c0.14,0,0.28-0.001,0.419-0.003c5.294-0.085,10.312-1.777,14.51-4.824c1.169,4.223,3.436,8.199,6.805,11.461 c4.787,4.636,11.06,7.174,17.708,7.174c0.139,0,0.28-0.001,0.419-0.003c5.294-0.085,10.313-1.777,14.511-4.824 c1.169,4.223,3.435,8.199,6.804,11.461c4.787,4.636,11.06,7.174,17.708,7.174c0.139,0,0.28-0.001,0.419-0.003 c5.294-0.085,10.313-1.777,14.51-4.824c1.169,4.223,3.436,8.199,6.805,11.462c4.786,4.635,11.06,7.173,17.707,7.173 c0.14,0,0.28-0.001,0.419-0.003c6.802-0.109,13.155-2.861,17.888-7.748l89.645-92.564 C426.137,239.872,426.071,235.757,423.492,233.259z M305.444,186.707v65.5c-1.41-0.216-2.846-0.322-4.3-0.301 c-5.294,0.085-10.312,1.777-14.51,4.824c-0.501-1.809-1.201-3.573-2.106-5.254h3.327c3.59,0,6.5-2.91,6.5-6.5V141.147h3.737v15.595 C298.091,167.547,300.757,177.735,305.444,186.707z M198.138,238.476H37.091v-93.523h244.263v93.523h-35.853 c-1.256-2.548-2.958-4.929-5.113-7.016c-10.089-9.77-26.244-9.51-36.015,0.578L198.138,238.476z M13,259.084v-134.74h217.628 c1.325,2.81,3.086,5.374,5.193,7.608H30.591c-3.59,0-6.5,2.91-6.5,6.5v106.523c0,3.59,2.91,6.5,6.5,6.5h154.957l-6.469,6.679 c-0.294,0.304-0.58,0.614-0.857,0.929H13z M197.575,288.341c-3.325,0.052-6.481-1.194-8.874-3.51v0 c-2.393-2.317-3.74-5.427-3.793-8.757c-0.054-3.33,1.193-6.481,3.51-8.874l25.293-26.117c2.442-2.521,5.699-3.789,8.959-3.789 c3.125,0,6.255,1.165,8.672,3.506c4.938,4.784,5.065,12.693,0.283,17.632l-25.294,26.118 C204.016,286.94,200.906,288.287,197.575,288.341z M237.017,302.148c-3.301,0.059-6.482-1.193-8.875-3.511 c-4.939-4.783-5.065-12.692-0.283-17.631l25.294-26.118c2.442-2.521,5.698-3.789,8.959-3.789c3.126,0,6.255,1.165,8.673,3.506 c4.939,4.783,5.065,12.692,0.283,17.631l-25.294,26.118C243.457,300.748,240.347,302.095,237.017,302.148z M276.458,315.956 c-3.32,0.064-6.482-1.193-8.875-3.511c-4.939-4.783-5.065-12.692-0.283-17.631l25.294-26.118c2.317-2.393,5.427-3.74,8.757-3.793 c0.069-0.001,0.137-0.002,0.206-0.002c3.254,0,6.326,1.243,8.669,3.513c2.393,2.317,3.74,5.427,3.793,8.757 c0.054,3.33-1.193,6.481-3.51,8.874l-25.294,26.118C282.898,314.556,279.788,315.903,276.458,315.956z M324.656,325.971 c-2.317,2.393-5.427,3.74-8.757,3.793c-3.329,0.063-6.481-1.193-8.874-3.51c-2.393-2.317-3.74-5.427-3.793-8.757 s1.193-6.481,3.51-8.874l25.294-26.118c2.317-2.393,5.427-3.739,8.757-3.793c3.314-0.048,6.481,1.193,8.874,3.511 c2.393,2.317,3.74,5.427,3.793,8.757c0.053,3.331-1.193,6.482-3.511,8.875L324.656,325.971z"></path> <path d="M159.223,149.54c-20.443,0-37.074,18.922-37.074,42.18s16.631,42.18,37.074,42.18s37.074-18.922,37.074-42.18 S179.666,149.54,159.223,149.54z M159.223,220.9c-13.274,0-24.074-13.09-24.074-29.18s10.8-29.18,24.074-29.18 s24.074,13.09,24.074,29.18S172.498,220.9,159.223,220.9z"></path> </g> </g></svg>
            </div>
            <div class="">
                <h1 class="font-bold 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs">PELUNASAN SETELAH JADI</h1>
                <p class="font-normal 2xl:text-2xl xl:text-xl lg:text-lg md:text-md text-xs lg:pr-50 md:pr-10 pr-2 md:tracking-wider tracking-tight">Menggunakan sistem pelunasan setelah proses selesai, memberikan kepercayaan penuh pada Anda.</p>
            </div>
        </div>
    </div>
</div>

{{-- BG Gambar --}}
<div class="2xl:mt-60 xl:mt-50 lg:mt-50 md:mt-50 mt-50 w-full h-full flex items-center relative">
    <div class="absolute z-[-1] w-full 2xl:h-[500px] xl:h-[450px] lg:h-[400px] md:h-[400px] h-[400px] overflow-hidden">
        <div class="absolute inset-0 bg-theme3 opacity-60"></div>
        <img src="{{asset('assets/img/service/perizinan/perizinan4.jpeg')}}" alt="" class="w-screen object-cover h-full">
    </div>
    <div data-aos="fade-right" data-aos-duration="1000" class="py-20 mt-30">
        <h1 class="font-bold text-2xl 2xl:text-6xl xl:text-5xl lg:text-5xl md:text-4xl text-theme1 drop-shadow-2 md:ml-21">PBG (Persetujuan Bangunan Gedung) / <br>SLF ( Sertifikasi Layak Fungsi)</h1>
    </div>
</div>
{{-- Card --}}
<div data-aos="fade-up" data-aos-duration="1000" class="flex justify-center items-center">
    <div class="relative">
        <div class="border-0 2xl:w-[700px] xl:w-[600px] lg:w-[600px] md:w-[500px] sm:w-[350px] w-[350px] 2xl:h-[300px] xl:h-[250px] lg:h-[250px] md:h-[250px] h-[250px] bg-theme3 rounded-[2rem] pt-5">
            <div class="text-center">
                <h1 class="mt-5 mb-10 font-bold 2xl:text-4xl xl:text-3xl lg:text-3xl md:text-3xl text-lg text-landing-gold">MULAI 2 JUTA / 100 M2</h1>
            </div>
            <div class="2xl:mx-20 xl:mx-20 lg:mx-20 md:mx-20 mx-10 2xl:mt-6 xl:mt-3 lg:mt-3 md:mt-3 mt-3">
                <ul class="">
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-xs 2xl:text-xl xl:text-base lg:text-base md:text-xs">TIDAK TERMASUK BIAYA GAMBAR TEKNIS</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-xs 2xl:text-xl xl:text-base lg:text-base md:text-xs">PENDAMPINGAN SELAMA PENGURUSAN</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="absolute bottom-0 border-0 px-5 py-5 w-full rounded-full bg-theme2">
            <h1 class="text-white font-bold text-center text-xs 2xl:text-xl xl:text-base lg:text-base md:text-xs">PILIH PAKET</h1>
        </div>
    </div>
</div>

{{-- BG Gambar --}}
<div class="2xl:mt-60 xl:mt-50 lg:mt-50 md:mt-50 mt-50 w-full h-full flex items-center relative">
    <div class="absolute z-[-1] w-full  2xl:h-[500px] xl:h-[450px] lg:h-[400px] md:h-[400px] h-[400px] overflow-hidden">
        <div class="absolute inset-0 bg-theme3 opacity-60"></div>
        <img src="{{asset('assets/img/service/perizinan/perizinan3.jpeg')}}" alt="" class="w-screen object-cover h-full">
    </div>
    <div data-aos="fade-right" data-aos-duration="1000" class="py-20 mt-30">
        <h1 class="font-bold text-2xl 2xl:text-6xl xl:text-5xl lg:text-5xl md:text-4xl text-theme1 drop-shadow-2 md:ml-21">PAKET LENGKAP PBG & SLF</h1>
    </div>
</div>
{{-- Card --}}
<div data-aos="fade-up" data-aos-duration="1000" class="flex justify-center items-center">
    <div class="relative">
        <div class="border-0 2xl:w-[700px] xl:w-[600px] lg:w-[600px] md:w-[500px] sm:w-[350px] w-[350px] 2xl:h-[350px] xl:h-[300px] lg:h-[300px] md:h-[300px] h-[300px] bg-theme3 rounded-[2rem] pt-5">
            <div class="text-center">
                <h1 class="mt-5 mb-10 font-bold 2xl:text-4xl xl:text-3xl lg:text-3xl md:text-3xl text-lg text-landing-gold">MULAI 5 JUTA / 100 M2</h1>
            </div>
            <div class="2xl:mx-20 xl:mx-20 lg:mx-20 md:mx-20 mx-10 2xl:mt-6 xl:mt-3 lg:mt-3 md:mt-3 mt-3">
                <ul class="">
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-xs 2xl:text-xl xl:text-base lg:text-base md:text-xs">PROSES PERIZINAN</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-xs 2xl:text-xl xl:text-base lg:text-base md:text-xs">SEMUA DOKUMEN LENGKAP (GAMBAR TEKNIK, LAPORAN TEKNIS STRUKTUR)</p>
                    </li>
                    <li class="list-disc text-white ml-8">
                        <p class="text-white text-xs 2xl:text-xl xl:text-base lg:text-base md:text-xs">PENDAMPINGAN SELAMA PENGURUSAN</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="absolute bottom-0 border-0 px-5 py-5 w-full rounded-full bg-theme2">
            <h1 class="text-white font-bold text-center text-xs 2xl:text-xl xl:text-base lg:text-base md:text-xs">PILIH PAKET</h1>
        </div>
    </div>
</div>


<div class="flex justify-center my-20">
    <a href="https://wa.me/62895371025425">
        <button class="bg-theme2 hover:bg-landing-black-1 transition duration-300 ease-in-out transform hover:scale-105 flex items-center w-fill 2xl:px-6 xl:px-3 lg:px-3 md:px-3 px-3 2xl:py-2 xl:py-1 lg:py-1 md:py-1 py-1 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-8 md:h-8" viewBox="0 0 24 24"><path fill="#e1dfd4" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
            <p class="text-sm 2xl:text-2xl xl:text-xl md:text-xl font-medium pb-1 pl-3 text-theme1">
                Konsultasi Sekarang
            </p>
        </button>
    </a>
</div>
@endsection