@extends("landing")

@section("content")
    <div class="w-screen h-screen flex   bg-cover bg-center" style="background-image:url('{{ asset('assets/img/Kontak1.png') }}')">
        <div class=" flex flex-col justify-center items-center w-screen h-screen bg-black bg-opacity-30">
            <!-- Judul -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl  font-bold text-white pt-10 pb-8">Konsultasi dengan Kami</h1>
        
            <!-- Kontainer utama -->
            <div class="flex flex-col sm:mt-20 w-7/12 bg-black md:flex-row">
              
              <!-- Peta -->
              <div class="relative pb-[45%] pl-[50%] md:pb-[35%] md:pl-[40%]  md:-ml-10 rounded-lg overflow-hidden">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.5178726559247!2d113.6793561304058!3d-8.183867692374132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd696a789605e0b%3A0x5ab070d07540f31e!2sJl.%20Kyai%20Mojo%20No.110%2C%20Kaliwates%20Kidul%2C%20Kaliwates%2C%20Kec.%20Kaliwates%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur%2068133!5e1!3m2!1sid!2sid!4v1734878188425!5m2!1sid!2sid"
                    class="absolute top-0 left-0 w-full h-full border-0"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
        
              <!-- Informasi kontak -->
              <div class="flex-1 space-y-4">
                <!-- Alamat pertama -->
                <div>
                  <div class="flex items-center mb-2">
                    <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                        <path fill="#e1dfd4" d="M15.19 21C14.12 19.43 13 17.36 13 15.5c0-1.83.96-3.5 2.4-4.5H15V9h2v1.23c.5-.14 1-.23 1.5-.23c.17 0 .34 0 .5.03V3H5v18h6v-3.5h2V21zM15 5h2v2h-2zM9 19H7v-2h2zm0-4H7v-2h2zm0-4H7V9h2zm0-4H7V5h2zm2-2h2v2h-2zm0 4h2v2h-2zm0 6v-2h2v2zm7.5-3c-1.9 0-3.5 1.61-3.5 3.5c0 2.61 3.5 6.5 3.5 6.5s3.5-3.89 3.5-6.5c0-1.89-1.6-3.5-3.5-3.5m0 4.81c-.7 0-1.2-.6-1.2-1.2c0-.7.6-1.2 1.2-1.2s1.2.59 1.2 1.2c.1.6-.5 1.2-1.2 1.2"/>
                      </svg>
                    </div>
                    <h2 class=" text-theme1 ml-4"><span class="font-bold">Kantor Kami</span> <br>Jl. Kyai Mojo No.110, Kec. Kaliwates, Kab. Jember, Jawa Timur 68133</h2>
                  </div>
                </div>
        
        
                <!-- Email -->
                <div class="flex items-center">
                  <div class="bg-gray-800 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0H8m8 0H8m4 8v4m0 0H8m4 0h4m2-4v4m0 0H8m4 0h4" />
                    </svg>
                  </div>
                  <p class="ml-4 text-theme1">azwakaryatama@gmail.com</p>
                </div>
        
                <!-- Nomor telepon -->
                <div class="flex items-center">
                  <div class="bg-gray-800 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11a4 4 0 010 8H3v4h12.5a7.5 7.5 0 00.5-15H3z" />
                    </svg>
                  </div>
                  <p class="ml-4 text-theme1">+62 895-3710-25425</p>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection