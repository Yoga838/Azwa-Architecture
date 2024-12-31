@extends("landing")

@section("content")
<div class="container">
    <div class="flex flex-col lg:flex-row bg-#e1dfd4 overflow-hidden">
      <!-- Image Section -->
      <div class="w-screen h-screen lg:w-5/12">
        <img src="{{ asset('assets/img/Karir1.png') }}" alt="Interior Design" class="">
      </div>
      <!-- Content Section -->
      <div class="w-full lg:w-7/12 my-auto lg:ml-5">
        <div class="flex items-center space-x-60 pl-8 mb-10 lg:mt-20">
            <h1 class="text-6xl font-bold text-theme2 mb-4">Karir</h1>
            <div class="h-1 w-100 bg-theme2 rounded-lg"></div>
        </div>
        <div class="px-5 pb-10">
          <p class="text-xl text-theme3 font-medium pt-7 mb-4 ">
            Jelajahi peluang karir yang menarik di <span class="font-extrabold">Azwa Design Studio! </span> <br>
            Fulltime / Internship posisi Architect, Interior Designer, Drafter <br> dapat bergabung tim kami.
          </p>
          <p class="text-xl text-theme3 font-medium mt-5 mb-5 lg:mb-20 pt-3">
            Kirimkan CV dan Portofolio Anda dalam format PDF, <br> lebih dari 5MB ke:
          </p>
          <div class="bg-theme2 flex items-center w-fit px-5 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#e1dfd4" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z"/></svg>
            <p class="text-xl font-medium pb-1 pl-3">
              <a href="mailto:azwakaryatama@gmail.com" class="text-theme1 hover:underline">azwakaryatama@gmail.com</a>
            </p>
          </div>
          <p class="text-xl text-theme3 font-medium mt-2">Subject: Posisi_Nama</p>
        </div>
      </div>
    </div>
  </div>
@endsection