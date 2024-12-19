@extends("landing")

@section("content")
<main class="container mx-auto">
    <div class="flex flex-col lg:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
      <!-- Image Section -->
      <div class="w-full lg:w-1/2">
        <img src="{{ asset('assets/img/Karir1.png') }}" alt="Interior Design" class="w-full h-full object-cover">
      </div>
      <!-- Content Section -->
      <div class="w-full lg:w-1/2 p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Karir</h1>
        <p class="text-gray-600 mb-4">
          Jelajahi peluang karir yang menarik di <span class="font-bold">Azwa Design Studio!</span>
          Fulltime / Internship posisi Architect, Interior Designer, Drafter dapat bergabung tim kami.
        </p>
        <p class="text-gray-600 mb-6">
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
  </main>
@endsection