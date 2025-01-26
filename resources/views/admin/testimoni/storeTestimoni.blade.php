@extends('dashboard')

@section('content')
    
    <div class="flex flex-col gap-3 mb-6 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="font-bold text-black text-title-md2 dark:text-white">
            Input Testimoni
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="index.html">Testimoni /</a>
                </li>
                <li class="font-medium text-primary">Buat Testimoni</li>
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
                <form class="flex flex-col gap-5.5 p-6.5" onsubmit="uploadTestimoni(event)" enctype="multipart/form-data">
                    <div class="w-full p-6 bg-white rounded-lg shadow-lg">
                        <div class="mb-4">
                            <label
                                class="block mb-2 text-sm font-medium text-black dark:text-white"
                                for="file-upload"
                            >
                                Upload Files
                            </label>
                            <div
                                class="p-6 text-center border-2 border-gray-300 border-dashed"
                                id="drop-area"
                            >
                                <p class="text-gray-500">Seret dan jatuhkan file di sini</p>
                                <p class="text-gray-500">atau</p>
                                <button
                                    type="button"
                                    class="px-4 py-2 mt-2 text-white bg-blue-500 rounded hover:bg-blue-600"
                                >
                                    Jelajahi
                                </button>
                                <p class="text-red-400 mt-2">"File yang diunggah harus berformat PNG, JPG, atau JPEG dengan ukuran maksimal 2 MB."</p>
                                <input
                                    id="file-upload"
                                    type="file"
                                    accept=".png, .jpg, .jpeg"
                                    class="hidden"
                                />
                            </div>
                        </div>
                        <div id="file-preview" class="space-y-4">
                            <!-- File previews will appear here -->
                        </div>
                    </div>
                    <button type="submit"  class="w-full p-4 transition-all ease-linear bg-theme3 hover:bg-theme2 dark:bg-white dark:hover:bg-gray-400">
                        <h1 class="text-white dark:text-[#000] font-bold text-xl">Upload Testimoni</h1>
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

        function uploadTestimoni(event) {
            event.preventDefault();
            const fileInput = document.getElementById('file-upload');

            console.log(fileInput);

            if (!fileInput.files || fileInput.files.length === 0) {
                console.error('No file selected!');
                return;
            }

            const file = fileInput.files[0]; // Ambil file pertama dari input

            console.log('Selected File:', file);

            console.log('File:', file);
            
            const data = {
                file: file,
            }

            console.log("Response :", data);

            axios.post('/api/testimoni', data, {
                headers: {
                    "Content-Type" : "multipart/form-data"
                }
            })
            .then((response) => {
                Swal.fire({
                    title: response.data.message,
                    icon: "success",
                    draggable: true
                }).then(() => {
                    window.location.href = '/daftartestimoni'
                });
            }).catch((err) => {
                // console.log(err);
                // Swal.fire({
                //     title: "Gagal menambahkan promo",
                //     text: "Silakan periksa data Anda dan coba lagi.",
                //     icon: "error",
                //     confirmButtonText: "OK"
                // });
            });
        }

    </script>

@endsection