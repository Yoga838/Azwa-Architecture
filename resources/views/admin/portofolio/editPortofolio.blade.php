@extends('dashboard')

@section('content')

<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        Edit Portofolio
    </h2>
    <nav>
        <ol class="flex items-center gap-2">
            <li>
                <a class="font-medium" href="index.html">Portofolio /</a>
            </li>
            <li class="font-medium text-primary">Edit Portofolio</li>
        </ol>
    </nav>
</div>

<div class="grid grid-cols-1 gap-9">
    <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-theme2 dark:bg-theme3">
            <div class="border-b border-stroke px-6.5 py-4 dark:border-theme2">
                <h3 class="font-medium text-black dark:text-white">
                    Input Fields
                </h3>
            </div>
            <form class="flex flex-col gap-5.5 p-6.5" id="portofolioForm" enctype="multipart/form-data" onsubmit="editPorto(event, {{$portofolio->id}})">
                <input type="hidden" id="portofolioId" name="id">
                <input type="hidden" id="deletedFiles" name="hapus_foto[]">
                <div class="nama">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Nama
                    </label>
                    <input type="text" placeholder="Masukkan nama" id="nama" name="name" value="{{$portofolio->name}}" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                </div>
                <div class="tipe">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Tipe
                    </label>
                    <select id="tipe" name="type" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        <option value="">Pilih dan sesuaikan tipe...</option>
                        <option value="Arsitektur" {{ $portofolio->type == 'Arsitektur' ? 'selected' : '' }}>Arsitektur</option>
                        <option value="Interior" {{ $portofolio->type == 'Interior' ? 'selected' : '' }}>Interior</option>
                    </select>
                </div>
                <div class="date">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Tanggal
                    </label>
                    <input type="date" id="date" name="date" value="{{$portofolio->date}}" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                </div>
                <div class="kategori">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Kategori
                    </label>
                    <select id="kategori" name="category" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        <option value="">Pilih kategori</option>
                        <option value="Arsitektur" {{ $portofolio->category == 'Arsitektur' ? 'selected' : '' }}>Arsitektur</option>
                        <option value="Interior" {{ $portofolio->category == 'Interior' ? 'selected' : '' }}>Interior</option>
                    </select>
                </div>
                <div class="luas">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Luas
                    </label>
                    <input type="number" placeholder="Masukkan luas" id="luas" name="luas" value="{{$portofolio->luas}}" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                </div>
                <div class="kontraktor">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Kontraktor
                    </label>
                    <input type="text" placeholder="Masukkan kontraktor" id="kontraktor" name="kontraktor" value="{{$portofolio->kontraktor}}" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                </div>
                <div class="deskripsi">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Deskripsi
                    </label>
                    <textarea rows="6" placeholder="Masukkan deskripsi portofolio" id="deskripsi" name="deskripsi" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{$portofolio->deskripsi}}</textarea>
                </div>
                {{-- File Upload --}}
                <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                    <div class="mb-4">
                        <label
                            class="block text-black dark:text-white text-sm font-medium mb-2"
                            for="file-upload"
                        >
                            Upload Files
                        </label>
                        <div
                            class="border-2 border-dashed border-gray-300 p-6 text-center"
                            id="drop-area"
                        >
                            <p class="text-gray-500">Seret dan jatuhkan file di sini</p>
                            <p class="text-gray-500">atau</p>
                            <button
                                type="button"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2"
                            >
                                Jelajahi
                            </button>
                            <p class="text-red-400 mt-2">"File yang diunggah harus berformat PNG, JPG, atau JPEG dengan ukuran maksimal 2 MB."</p>
                            <input
                                id="file-upload"
                                name="foto"
                                type="file"
                                accept=".png, .jpg, .jpeg"
                                multiple
                                class="hidden"
                            />
                        </div>
                    </div>
                    <div id="file-preview" class="space-y-4">
                        <!-- File previews will appear here -->
                        @foreach ($portofolio->fotos as $foto)
                            <div class="flex items-center justify-between border p-2 rounded bg-gray-50">
                                <img
                                    src="{{ asset('storage/' . $foto->path) }}"
                                    alt="Portofolio Image"
                                    class="w-12 h-12 object-cover rounded"
                                />
                                <div class="flex-1 ml-4">
                                    <p class="text-sm font-medium">{{ basename($foto->path) }}</p>
                                    <p class="text-xs text-gray-500">Existing File</p>
                                </div>
                                <button
                                    type="button"
                                    class="text-red-500 hover:text-red-700"
                                    onclick="removeFile(this, {{$foto->id}})"
                                >
                                    ✕
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="w-full p-4 bg-theme3 hover:bg-theme2 transition-all ease-linear dark:bg-white dark:hover:bg-gray-400">
                    <h1 class="text-white dark:text-[#000] font-bold text-xl">Edit Portofolio</h1>
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
                        <img src="${reader.result}" alt="${file.name}" class="w-12 h-12 object-cover rounded">
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

    var hapus_foto = []

    function removeFile(button, fotoId) {
        const fotoElement = button.parentElement;
        hapus_foto.push(fotoId);
        fotoElement.remove();
    }
    
    function editPorto(event, id){
        event.preventDefault();
        const nama = document.getElementById('nama').value.trim();
        const tipe = document.getElementById('tipe').value.trim();
        const date = document.getElementById('date').value.trim();
        const kategori = document.getElementById('kategori').value.trim();
        const luas = document.getElementById('luas').value.trim();
        const kontraktor = document.getElementById('kontraktor').value.trim();
        const deskripsi = document.getElementById('deskripsi').value.trim();
        const fileInput = document.getElementById("file-upload");

        if (!nama || !tipe || !date || !kategori || !luas || !kontraktor || !deskripsi) {
            Swal.fire({
                title: "Form Tidak Lengkap",
                text: "Semua kolom wajib diisi.",
                icon: "warning",
                confirmButtonText: "OK"
            });
            return;
        }

        const formData = new FormData();
        formData.append("id", id);
        formData.append("name", nama);
        formData.append("type", tipe);
        formData.append("date", date);
        formData.append("category", kategori);
        formData.append("luas", luas);
        formData.append("kontraktor", kontraktor);
        formData.append("deskripsi", deskripsi);

        Array.from(fileInput.files).forEach((file) => {
            formData.append("foto[]", file); // Foto dalam bentuk array
        });
        Array.from(hapus_foto).forEach((file) => {
            formData.append("hapus_foto[]", file); // Foto dalam bentuk array
        });

        axios.post(`/api/edit-porto/${id}`, formData, {
            headers: {
                "Content-Type" : "multipart/form-data"
            }
        })
        .then((response) => {
            Swal.fire({
                title: response.data.success,
                icon: "success",
                draggable: true
            }).then(() => {
                window.location.href = '/daftarportofolio';
            });
        })
        .catch((err) => {
            Swal.fire({
                title: "Gagal mengedit protofolio",
                text: "Silakan periksa data Anda dan coba lagi.",
                icon: "error",
                confirmButtonText: "OK"
            });
        });
    }

</script>

@endsection