@extends("landing")

@section("content")
<div class="container mx-auto">
    <div class="flex flex-col lg:flex-row bg-#e1dfd4 shadow-lg overflow-hidden">
      <!-- Image Section -->
      <div class="bg-contain lg:w-5/12">
        <img src="{{ asset('assets/img/Karir1.png') }}" alt="Interior Design" class="">
      </div>
      <!-- Content Section -->
      <div class="w-full lg:w-1/2 p-8 my-auto">
        <div class="flex items-center space-x-40 mb-10 ">
            <h1 class="text-6xl font-bold text-theme2 mb-4">Karir</h1>
            <div class="h-1 w-100 bg-theme2 rounded-lg"></div>
        </div>
        <p class="text-2xl text-theme3 pt-7 mb-4">
          Jelajahi peluang karir yang menarik di <span class="font-bold">Azwa Design Studio!</span>
          Fulltime / Internship posisi Architect, Interior Designer, Drafter dapat bergabung tim kami.
        </p>
        <p class="text-theme3 mb-6">
          Kirimkan CV dan Portofolio Anda dalam format PDF, tidak lebih dari 5MB ke:
        </p>
        <div class="bg-gray-100 p-4 rounded-lg">
          <p class="text-gray-800 font-semibold">
            <a href="mailto:azwakaryatama@gmail.com" class="text-blue-500 hover:underline">azwakaryatama@gmail.com</a>
          </p>
          <p class="text-gray-600 mt-2">Subject: Posisi_Nama</p>
        </div>
      </div>
    </div>
  </div>
@endsection