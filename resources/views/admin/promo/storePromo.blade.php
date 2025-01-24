@extends('dashboard')

@section('content')
    
    <div class="flex flex-col gap-3 mb-6 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="font-bold text-black text-title-md2 dark:text-white">
            Input Promo
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="index.html">Promo /</a>
                </li>
                <li class="font-medium text-primary">Buat Promo</li>
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
                <form class="flex flex-col gap-5.5 p-6.5" onsubmit="uploadPromo(event)">
                    <div class="title">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">
                            Judul Promo
                        </label>
                        <input type="text" placeholder="Masukkan judul promo" id="title" name="title" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary" 
                            required/>
                        <p id="titleError" class="hidden mt-1 text-sm text-red-500">Judul promo wajib diisi.</p>
                    </div>
                    <div class="price">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">
                            Harga
                        </label>
                        <input type="text" placeholder="Masukkan harga" id="price" name="price" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary" 
                            required/>
                        <p id="priceError" class="hidden mt-1 text-sm text-red-500">Harga wajib diisi dan harus berupa angka.</p>
                    </div>
                    <div class="actual-price">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">
                            Harga Asli
                        </label>
                        <input type="text" placeholder="Masukkan harga asli" id="actual_price" name="actual_price" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary" 
                            required/>
                        <p id="actualPriceError" class="hidden mt-1 text-sm text-red-500">Harga asli wajib diisi dan harus berupa angka.</p>
                    </div>
                    <div class="description">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">
                            Deskripsi
                        </label>
                        <input type="text" id="deskripsi" name="description" placeholder="Masukkan deskripsi" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary"/>
                        <p id="descriptionError" class="hidden mt-1 text-sm text-red-500">Deskripsi tidak boleh kosong.</p>
                    </div>
                    <button type="submit" class="w-full p-4 transition-all ease-linear bg-theme3 hover:bg-theme2 dark:bg-theme1 dark:hover:bg-gray-400">
                        <h1 class="text-white dark:text-[#000] font-bold text-xl">Tambah Promo</h1>
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

        const deskripsiList = [];

        document.getElementById('addDeskripsi').addEventListener('click', function(event) {
            event.preventDefault();
            const input = document.getElementById('deskripsi');
            const tagList = document.getElementById('tagList');
            const description = input.value.trim();

            if (description) {
                deskripsiList.push(description);

                const tag = document.createElement('div');
                tag.className = 'inline-flex items-center px-3 py-1 rounded bg-theme3 text-white text-sm mr-2 mb-2';

                const tagText = document.createElement('span');
                tagText.textContent = description;
                tagText.className = 'mr-2';

                const removeButton = document.createElement('button');
                removeButton.innerHTML = '<svg fill="#ffffff" class="w-4 h-4" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12 3c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm0 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zM12.707 12l2.646-2.646c.194-.194.194-.512 0-.707-.195-.194-.513-.194-.707 0l-2.646 2.646-2.646-2.647c-.195-.194-.513-.194-.707 0-.195.195-.195.513 0 .707l2.646 2.647-2.646 2.646c-.195.195-.195.513 0 .707.097.098.225.147.353.147s.256-.049.354-.146l2.646-2.647 2.646 2.646c.098.098.226.147.354.147s.256-.049.354-.146c.194-.194.194-.512 0-.707l-2.647-2.647z"></path></g></svg>';
                
                removeButton.addEventListener('click', function() {
                    const index = deskripsiList.indexOf(description);
                    if (index !== -1) {
                        deskripsiList.splice(index, 1);
                        tagList.removeChild(tag);
                        console.log('Updated deskripsiList:', deskripsiList);
                    }
                });

                tag.appendChild(tagText);
                tag.appendChild(removeButton);
                tagList.appendChild(tag);

                input.value = '';
                console.log('Updated deskripsiList:', deskripsiList);
            }
        });

        function uploadPromo(event) {
            event.preventDefault();

            // Ambil nilai dari form
            const title = document.getElementById('title').value.trim();
            const price = document.getElementById('price').value.trim();
            const actual_price = document.getElementById('actual_price').value.trim();
            const description = document.getElementById('deskripsi').value.trim();

            // Ambil elemen untuk pesan error
            const titleError = document.getElementById('titleError');
            const priceError = document.getElementById('priceError');
            const actualPriceError = document.getElementById('actualPriceError');
            const descriptionError = document.getElementById('descriptionError');

            // Reset pesan error (hidden)
            titleError.classList.add('hidden');
            priceError.classList.add('hidden');
            actualPriceError.classList.add('hidden');
            descriptionError.classList.add('hidden');

            // Validasi input
            let isValid = true;

            // Validasi title
            if (!title) {
                titleError.textContent = "Judul promo wajib diisi.";
                titleError.classList.remove('hidden');
                isValid = false;
            }

            // Validasi price
            if (!price || isNaN(price)) {
                priceError.textContent = "Harga wajib diisi dan harus berupa angka.";
                priceError.classList.remove('hidden');
                isValid = false;
            }

            // Validasi actual_price
            if (!actual_price || isNaN(actual_price)) {
                actualPriceError.textContent = "Harga asli wajib diisi dan harus berupa angka.";
                actualPriceError.classList.remove('hidden');
                isValid = false;
            }

            // Validasi description (opsional jika diperlukan)
            if (!description) {
                descriptionError.textContent = "Deskripsi tidak boleh kosong.";
                descriptionError.classList.remove('hidden');
                isValid = false;
            }

            // Jika ada validasi yang gagal, hentikan proses
            if (!isValid) {
                return;
            }

            // Data deskripsi list
            const deskripsiList = description.split(',').map(item => item.trim());

            // Data untuk dikirim ke server
            const data = {
                title: title,
                price: price,
                actual_price: actual_price,
                ondisplay: document.getElementById('statusCheckbox')?.checked || false,
                description: deskripsiList
            };

            // Kirim data menggunakan Axios
            axios.post('/api/promo', data, {
                headers: {
                    "Content-Type": "application/json"
                }
            })
            .then((response) => {
                Swal.fire({
                    title: response.data.message,
                    text: "Data telah masuk ke database!",
                    icon: "success",
                    draggable: true
                }).then(() => {
                    window.location.href = '/daftarpromo';
                });
            })
            .catch((err) => {
                console.error(err);
                Swal.fire({
                    title: "Gagal menambahkan promo",
                    text: "Silakan periksa data Anda dan coba lagi.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            });
        }
    </script>

@endsection