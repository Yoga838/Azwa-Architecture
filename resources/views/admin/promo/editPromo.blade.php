@extends('dashboard')

@section('content')

    <style>
        button.remove-tag {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
        }

        button.remove-tag svg {
            pointer-events: none; /* Mencegah SVG menangkap event klik */
        }
    </style>
    
    <div class="flex flex-col gap-3 mb-6 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="font-bold text-black text-title-md2 dark:text-white">
            Edit Promo
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="index.html">Promo /</a>
                </li>
                <li class="font-medium text-primary">Edit Promo</li>
            </ol>
        </nav>
    </div>

    <div class="grid grid-cols-1 gap-9">
        <div class="flex flex-col gap-9">
            <div class="bg-white border rounded-sm border-stroke shadow-default dark:border-theme2 dark:bg-theme3">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-theme2">
                    <h3 class="font-medium text-black dark:text-white">
                        Input Fields
                    </h3>
                </div>
                <form class="flex flex-col gap-5.5 p-6.5" onsubmit="updatePromo(event, {{$promo->id}})">
                    <input type="hidden" id="deskripsiList" name="deskripsiList" value="{{ json_encode($promodesc) }}">
                    
                    <!-- Judul Promo -->
                    <div class="title">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">
                            Judul Promo
                        </label>
                        <input type="text" placeholder="Masukkan judul promo" value="{{$promo->title}}" id="title" name="title" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary"/>
                        <p id="titleError" class="hidden mt-1 text-sm text-red-500">Judul promo wajib diisi.</p>
                    </div>
                
                    <!-- Harga -->
                    <div class="price">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">
                            Harga
                        </label>
                        <input type="text" placeholder="Masukkan harga" value="{{$promo->price}}" id="price" name="price" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary"/>
                        <p id="priceError" class="hidden mt-1 text-sm text-red-500">Harga wajib diisi dan harus berupa angka.</p>
                    </div>
                
                    <!-- Harga Asli -->
                    <div class="actual-price">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">
                            Harga Asli
                        </label>
                        <input type="text" placeholder="Masukkan harga asli" value="{{$promo->actual_price}}" id="actual_price" name="actual_price" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary"/>
                        <p id="actualPriceError" class="hidden mt-1 text-sm text-red-500">Harga asli wajib diisi dan harus berupa angka.</p>
                    </div>
                
                    <!-- Deskripsi -->
                    <div class="description">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">
                            Deskripsi
                        </label>
                        <div class="flex gap-3">
                            <input type="text" id="deskripsi" name="description" placeholder="Masukkan deskripsi" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary"/>
                            <button class="px-2" id="addDeskripsi">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-10 h-full text-landing-black-1 dark:text-theme1" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12m11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                        <div class="mt-3" id="tagList">
                            @foreach ($promodesc as $index => $desc)
                                <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm text-white rounded bg-theme3" data-index="{{ $index }}">
                                    {{$desc}}
                                    <button type="button" class="ml-2 text-red-500 hover:text-red-700 remove-tag" data-index="{{ $index }}">x</button>
                                </span>
                            @endforeach
                        </div>
                    </div>
                
                    <!-- Status Display -->
                    <div class="ondisplay">
                        <div class="flex items-center gap-5">
                            <label class="block text-sm font-medium text-black dark:text-white">
                                Status Display
                            </label>
                            <input type="checkbox" class="w-6 h-6" name="ondisplay" id="statusCheckbox" onchange="updateDisplayStatus()" {{ $promo->ondisplay ? 'checked' : '' }}/>
                            <button 
                                id="displayButton" 
                                class="px-4 py-2 text-white rounded disabled:opacity-50 
                                    {{ $promo->ondisplay ? 'bg-green-500' : 'bg-red-500' }}" 
                                {{ $promo->ondisplay ? '' : 'disabled' }}>
                                {{ $promo->ondisplay ? 'ondisplay' : 'offdisplay' }}
                            </button>
                        </div>
                    </div>
                
                    <!-- Submit Button -->
                    <button type="submit" class="w-full p-4 transition-all ease-linear bg-theme3 hover:bg-theme2 dark:bg-theme1 dark:hover:bg-gray-400">
                        <h1 class="text-white dark:text-[#000] font-bold text-xl">Perbarui Promo</h1>
                    </button>
                </form>                              
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function updateDisplayStatus() {
            const checkbox = document.getElementById('statusCheckbox');
            const button = document.getElementById('displayButton');

            if (checkbox.checked) {
                button.textContent = "ondisplay";
                button.classList.remove("bg-red-500");
                button.classList.add("bg-green-500");
                button.disabled = false;
            } else {
                button.textContent = "offdisplay";
                button.classList.remove("bg-green-500");
                button.classList.add("bg-red-500");
                button.disabled = true;
            }
        }

        const deskripsiList = @json($promodesc);

        function renderTags() {
            const tagList = document.getElementById('tagList');
            tagList.innerHTML = '';

            deskripsiList.forEach((desc, index) => {
                const tag = document.createElement('span');
                tag.className = 'inline-flex items-center px-3 py-1 rounded bg-theme3 text-white text-sm mr-2 mb-2';
                tag.dataset.index = index;

                tag.innerHTML = `${desc} <button type="button" class="ml-2 remove-tag" data-index="${index}"><svg fill="#ffffff" class="w-4 h-4" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" style="pointer-events: none;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12 3c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zM12.707 12l2.646-2.646c.194-.194.194-.512 0-.707-.195-.194-.513-.194-.707 0l-2.646 2.646-2.646-2.647c-.195-.194-.513-.194-.707 0-.195.195-.195.513 0 .707l2.646 2.647-2.646 2.646c-.195.195-.195.513 0 .707.097.098.225.147.353.147s.256-.049.354-.146l2.646-2.647 2.646 2.646c.098.098.226.147.354.147s.256-.049.354-.146c.194-.194.194-.512 0-.707l-2.647-2.647z"></path></g></svg></button>`;
                tagList.appendChild(tag);
            });

            document.getElementById('deskripsiList').value = JSON.stringify(deskripsiList);
        }

        document.getElementById('addDeskripsi').addEventListener('click', function(event) {
            event.preventDefault();
            const input = document.getElementById('deskripsi');
            const description = input.value.trim();
            if (description) {
                deskripsiList.push(description);
                renderTags();
                input.value = '';
            }
        });

        document.getElementById('tagList').addEventListener('click', function(event) {
            const button = event.target.closest('.remove-tag');
            if (button) {
                const index = button.dataset.index;
                deskripsiList.splice(index, 1); 
                renderTags(); 
            }
        });

        renderTags();

        function updatePromo(event, id) {
            event.preventDefault();

            // Ambil nilai dari input form
            const title = document.getElementById('title').value.trim();
            const price = document.getElementById('price').value.trim();
            const actualPrice = document.getElementById('actual_price').value.trim();
            const deskripsiList = JSON.parse(document.getElementById("deskripsiList").value.trim());
            const ondisplay = document.getElementById('statusCheckbox').checked;

            // Validasi input form
            let isValid = true;

            // Reset pesan error
            document.getElementById("titleError")?.classList.add("hidden");
            document.getElementById("priceError")?.classList.add("hidden");
            document.getElementById("actualPriceError")?.classList.add("hidden");

            if (!title) {
                document.getElementById("titleError").classList.remove("hidden");
                isValid = false;
            }

            if (!price || isNaN(price)) {
                document.getElementById("priceError").classList.remove("hidden");
                isValid = false;
            }

            if (!actualPrice || isNaN(actualPrice)) {
                document.getElementById("actualPriceError").classList.remove("hidden");
                isValid = false;
            }

            // Jika ada input yang tidak valid, hentikan proses
            if (!isValid) {
                Swal.fire({
                    title: "Form Tidak Lengkap",
                    text: "Pastikan semua kolom sudah diisi dengan benar.",
                    icon: "warning",
                    confirmButtonText: "OK"
                });
                return;
            }

            // Data yang akan dikirim ke server
            const data = {
                title: title,
                price: parseFloat(price),
                actual_price: parseFloat(actualPrice),
                description: deskripsiList,
                ondisplay: ondisplay,
            };

            console.log("Mengirim data ke server:", data);

            // Kirim data menggunakan Axios
            axios.put(`/api/promo/${id}`, data, {
                headers: {
                    "Content-Type": "application/json",
                },
            })
                .then((response) => {
                    console.log("Response berhasil:", response);

                    Swal.fire({
                        title: response.data.message || "Sukses",
                        text: "Data pada database telah diperbarui!",
                        icon: "success",
                        confirmButtonText: "OK",
                    }).then(() => {
                        window.location.href = '/daftarpromo';
                    });
                })
                .catch((error) => {
                    console.error("Error saat mengupdate promo:", error);

                    let errorMessage = "Terjadi kesalahan saat memperbarui promo.";
                    if (error.response && error.response.data && error.response.data.message) {
                        errorMessage = error.response.data.message;
                    }

                    Swal.fire({
                        title: "Gagal Memperbarui Promo",
                        text: errorMessage,
                        icon: "error",
                        confirmButtonText: "OK",
                    });
                });
        }


    </script>

@endsection