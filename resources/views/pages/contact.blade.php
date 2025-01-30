@extends("landing")

@section('subtitle', 'Kontak')

@section("content")
    <div class="w-screen h-screen flex bg-cover bg-center" style="background-image:url('{{ asset('assets/img/Kontak1.png') }}')">
        <div class=" flex flex-col justify-center items-center w-screen h-screen bg-black bg-opacity-30">
            <!-- Judul -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mt-20 md:mt-20 mb-8" data-aos="fade-up" data-aos-duration="1000" style="font-family: League Spartan, sans-serif;">Konsultasi dengan Kami</h1>
        
            <!-- Kontainer utama -->
            <div class="flex flex-col sm:mt-20 w-7/12 md:flex-row">
              
              <!-- Peta -->
              <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1500" class="relative border-8 border-white pb-[45%] pl-[50%] md:pb-[35%] md:pl-[40%]  md:-ml-10 rounded-lg overflow-hidden">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.5178726559247!2d113.6793561304058!3d-8.183867692374132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd696a789605e0b%3A0x5ab070d07540f31e!2sJl.%20Kyai%20Mojo%20No.110%2C%20Kaliwates%20Kidul%2C%20Kaliwates%2C%20Kec.%20Kaliwates%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur%2068133!5e1!3m2!1sid!2sid!4v1734878188425!5m2!1sid!2sid"
                    class="absolute top-0 left-0 w-full h-full border-0"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
        
              <!-- Informasi kontak -->
              <div data-aos="fade-left" data-aos-delay="2500" data-aos-duration="1000" class="flex-1 space-y-4 md:ml-10 mt-10" style="font-family: Poppins, sans-serif;">
                <!-- Alamat pertama -->
                <div>
                  <div class="flex items-center mb-10">
                    <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-15 md:h-15" viewBox="0 0 24 24">
                        <path fill="#e1dfd4" d="M15.19 21C14.12 19.43 13 17.36 13 15.5c0-1.83.96-3.5 2.4-4.5H15V9h2v1.23c.5-.14 1-.23 1.5-.23c.17 0 .34 0 .5.03V3H5v18h6v-3.5h2V21zM15 5h2v2h-2zM9 19H7v-2h2zm0-4H7v-2h2zm0-4H7V9h2zm0-4H7V5h2zm2-2h2v2h-2zm0 4h2v2h-2zm0 6v-2h2v2zm7.5-3c-1.9 0-3.5 1.61-3.5 3.5c0 2.61 3.5 6.5 3.5 6.5s3.5-3.89 3.5-6.5c0-1.89-1.6-3.5-3.5-3.5m0 4.81c-.7 0-1.2-.6-1.2-1.2c0-.7.6-1.2 1.2-1.2s1.2.59 1.2 1.2c.1.6-.5 1.2-1.2 1.2"/>
                      </svg>
                    </div>
                    <h2 class="text-sm md:text-xl text-theme1 ml-4"><span class="font-bold">Kantor Kami</span> <br>Jl. Kyai Mojo No.110, Kec. Kaliwates, Kab. Jember,<br>Jawa Timur 68133</h2>
                  </div>
                </div>
        
        
                <!-- Email -->
                <div class="flex items-center justify-center md:justify-normal">
                  <div class="bg-theme1 flex items-center md:w-90 px-5 py-1 rounded-full hover:bg-[#C2A178] transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-8 md:h-8" viewBox="0 0 24 24"><path fill="#251d16" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z"/></svg>
                    <p class="text-sm md:text-xl font-medium pb-1 pl-3 ">
                      <a href="mailto:azwakaryatama@gmail.com" class="text-theme3" target="_blank" rel="noopener noreferrer">azwakaryatama@gmail.com</a>
                    </p>
                  </div>
                </div>
        
                <!-- Nomor telepon -->
                <div class="flex items-center pb-20 justify-center md:justify-normal">
                  <div class="bg-theme1 flex items-center md:w-90 px-5 py-1 rounded-full hover:bg-[#C2A178] transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-8 md:h-8" viewBox="0 0 24 24"><path fill="#251d16" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                    <p class="text-sm md:text-xl font-medium pl-3">
                      <a href="https://wa.me/62895371025425" class="text-theme3" target="_blank" rel="noopener noreferrer">+62 895-3710-25425</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection