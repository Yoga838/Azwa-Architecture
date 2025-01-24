@extends('dashboard')

@section('content')
    
    <div class="flex flex-col gap-3 mb-6 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="font-bold text-black text-title-md2 dark:text-white">
            Input Portofolio
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="index.html">Portofolio /</a>
                </li>
                <li class="font-medium text-primary">Buat Portofolio</li>
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
                <form class="flex flex-col gap-5.5 p-6.5" id="portofolioForm" enctype="multipart/form-data" onsubmit="uploadPorto(event)">
                    <input type="hidden" id="portofolioId" name="id">
                
                    <!-- Nama -->
                    <div class="nama">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">Nama</label>
                        <input type="text" placeholder="Masukkan nama" id="nama" name="name" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary" />
                        <span class="text-sm text-red-500" id="error-nama"></span>
                    </div>
                
                    <!-- Tipe -->
                    <div class="tipe">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">Tipe</label>
                        <select id="tipe" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary">
                            <option value="" disabled selected>Pilih dan sesuaikan tipe...</option>
                            <option value="Arsitektur">Arsitektur</option>
                            <option value="Interior">Interior</option>
                        </select>
                        <span class="text-sm text-red-500" id="error-tipe"></span>
                    </div>
                
                    <!-- Tanggal -->
                    <div class="date">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">Tanggal</label>
                        <input type="date" id="date" name="date" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary" />
                        <span class="text-sm text-red-500" id="error-date"></span>
                    </div>
                
                    <!-- Kategori -->
                    <div class="kategori">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">Kategori</label>
                        <select id="kategori" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary">
                            <option value="" disabled selected>Pilih kategori</option>
                            <option value="Arsitektur">Arsitektur</option>
                            <option value="Interior">Interior</option>
                        </select>
                        <span class="text-sm text-red-500" id="error-kategori"></span>
                    </div>
                
                    <!-- Luas -->
                    <div class="luas">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">Luas</label>
                        <input type="number" placeholder="Masukkan luas" id="luas" name="luas" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary" />
                        <span class="text-sm text-red-500" id="error-luas"></span>
                    </div>
                
                    <!-- Kontraktor -->
                    <div class="kontraktor">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">Kontraktor</label>
                        <input type="text" placeholder="Masukkan kontraktor" id="kontraktor" name="kontraktor" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary" />
                        <span class="text-sm text-red-500" id="error-kontraktor"></span>
                    </div>
                
                    <!-- Deskripsi -->
                    <div class="deskripsi">
                        <label class="block mb-3 text-sm font-medium text-black dark:text-white">Deskripsi</label>
                        <textarea rows="6" placeholder="Masukkan deskripsi portofolio" id="deskripsi" name="deskripsi" 
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-theme1 dark:focus:border-primary"></textarea>
                    </div>
                
                    <!-- Upload File -->
                    <div class="w-full p-6 rounded-lg shadow-lg bg-theme1">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-medium text-black dark:text-theme3" for="file-upload">
                                Upload File
                            </label>
                            <div class="p-6 text-center border-2 border-gray-300 border-dashed" id="drop-area">
                                <p class="text-gray-500">Seret dan jatuhkan file di sini</p>
                                <p class="text-gray-500">atau</p>
                                <button type="button" class="px-4 py-2 mt-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                                    Jelajahi
                                </button>
                                <p class="mt-2 text-red-400">
                                    "File yang diunggah harus berformat PNG, JPG, atau JPEG dengan ukuran maksimal 2 MB."
                                </p>
                                <input id="file-upload" type="file" accept=".png, .jpg, .jpeg" multiple class="hidden" />
                            </div>
                        </div>
                        <div id="file-preview" class="space-y-4">
                            <!-- File previews will appear here -->
                        </div>
                        <span class="text-sm text-red-500" id="error-file"></span>
                    </div>
                
                    <!-- Submit Button -->
                    <button type="submit" class="w-full p-4 transition-all ease-linear bg-theme3 hover:bg-theme2 dark:bg-theme1 dark:hover:bg-gray-400">
                        <h1 class="text-white dark:text-[#000] font-bold text-xl">Tambah Portofolio</h1>
                    </button>
                </form>                
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        const fileInput = document.getElementById("file-upload");
        const dropArea = document.getElementById("drop-area");
        const previewContainer = document.getElementById("file-preview");
        dropArea.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropArea.classList.add("border-blue-500");
        });

        dropArea.addEventListener("dragleave", () => {
            dropArea.classList.remove("border-blue-500");
        });

        dropArea.addEventListener("drop", (e) => {
            e.preventDefault();
            dropArea.classList.remove("border-blue-500");
            const files = Array.from(e.dataTransfer.files);
            handleFiles(files);
        });

        fileInput.addEventListener("change", () => {
            const files = Array.from(fileInput.files);
            handleFiles(files);
        });

        dropArea.querySelector("button").addEventListener("click", () => {
            fileInput.click();
        });

        function handleFiles(files) {
            files.forEach((file) => {
                if (file.type.startsWith("image/")) {
                    const reader = new FileReader();
                    reader.onload = () => {
                        const preview = document.createElement("div");
                        preview.className =
                            "flex items-center justify-between border p-2 rounded bg-gray-50";
                        preview.innerHTML = `
                            <img src="${reader.result}" alt="${file.name}" class="object-cover w-12 h-12 rounded">
                            <div class="flex-1 ml-4">
                                <p class="text-sm font-medium">${file.name}</p>
                                <p class="text-xs text-gray-500">${(
                                    file.size / 1024
                                ).toFixed(1)} KB</p>
                            </div>
                            <button
                                type="button"
                                class="text-red-500 hover:text-red-700"
                                onclick="this.parentElement.remove()"
                            >
                                ✕
                            </button>
                        `;
                        previewContainer.appendChild(preview);
                    };
                    reader.readAsDataURL(file);
                } else {
                    alert("Only image files are allowed!");
                }
            });
        }

        function uploadPorto(event) {
            event.preventDefault();

            const nama = document.getElementById('nama').value.trim();
            const tipe = document.getElementById('tipe').value;
            const date = document.getElementById('date').value;
            const kategori = document.getElementById('kategori').value;
            const luas = document.getElementById('luas').value.trim();
            const kontraktor = document.getElementById('kontraktor').value.trim();
            const deskripsi = document.getElementById('deskripsi').value.trim();
            const fileInput = document.getElementById('file-upload');

            // Clear error messages
            document.querySelectorAll('span[id^="error-"]').forEach(el => el.textContent = '');

            let isValid = true;

            if (!nama) {
                document.getElementById('error-nama').textContent = 'Nama tidak boleh kosong!';
                isValid = false;
            }

            if (!tipe) {
                document.getElementById('error-tipe').textContent = 'Tipe harus dipilih!';
                isValid = false;
            }

            if (!date) {
                document.getElementById('error-date').textContent = 'Tanggal tidak boleh kosong!';
                isValid = false;
            }

            if (!kategori) {
                document.getElementById('error-kategori').textContent = 'Kategori harus dipilih!';
                isValid = false;
            }

            if (!luas) {
                document.getElementById('error-luas').textContent = 'Luas tidak boleh kosong!';
                isValid = false;
            }

            if (!kontraktor) {
                document.getElementById('error-kontraktor').textContent = 'Kontraktor tidak boleh kosong!';
                isValid = false;
            }

            if (fileInput.files.length === 0) {
                document.getElementById('error-file').textContent = 'Anda harus mengunggah minimal satu file!';
                isValid = false;
            }

            if (!isValid) return;

            const formData = new FormData();
            formData.append('name', nama);
            formData.append('type', tipe);
            formData.append('date', date);
            formData.append('category', kategori);
            formData.append('luas', luas);
            formData.append('kontraktor', kontraktor);
            formData.append('deskripsi', deskripsi);

            Array.from(fileInput.files).forEach(file => {
                formData.append('foto[]', file);
            });

            axios.post('/api/upload-porto', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            })
                .then(response => {
                    Swal.fire({
                        title: response.data.success,
                        icon: 'success',
                        confirmButtonText: 'OK',
                    }).then(() => {
                        window.location.href = '/daftarportofolio';
                    });
                })
                .catch(err => {
                    Swal.fire({
                        title: 'Gagal Menambahkan Portofolio',
                        text: err.response?.data?.message || 'Terjadi kesalahan. Silakan coba lagi.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                    });
                });
        }


    </script>

@endsection