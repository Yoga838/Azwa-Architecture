@extends('dashboard')

@section('content')
    
    <div class="flex flex-col gap-3 mb-6 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="font-bold text-black text-title-md2 dark:text-white">
            Update Promo
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
            <div class="bg-white border rounded-sm border-stroke shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Input Fields
                    </h3>
                </div>
                <form class="flex flex-col gap-5.5 p-6.5" onsubmit="updateTestimoni(event, {{$testimoni->id}})">
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
                                <p class="text-gray-500">Drag and drop files here</p>
                                <p class="text-gray-500">Or</p>
                                <button
                                    type="button"
                                    class="px-4 py-2 mt-2 text-white bg-blue-500 rounded hover:bg-blue-600"
                                >
                                    Browse
                                </button>
                                <input
                                    id="file-upload"
                                    type="file"
                                    accept=".png, .jpg, .jpeg"
                                    class="hidden"
                                />
                            </div>
                        </div>
                        <div id="file-preview" class="space-y-4">
                            <!-- Menampilkan satu gambar saja berdasarkan testimoni yang dipilih -->
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

        function updateTestimoni(event, id) {
            event.preventDefault();
            
            const fileInput = document.getElementById('file-upload');
            
            if (!fileInput.files || fileInput.files.length === 0) {
                Swal.fire({
                    title: "No file selected",
                    icon: "error",
                    text: "Please select a file to upload.",
                    confirmButtonText: "OK"
                });
                return;
            }
            
            const file = fileInput.files[0]; // Ambil file pertama
            const formData = new FormData();
            formData.append('file', file);  // Append file to form data

            // Mengirim PUT request untuk melakukan update
            axios.post(`/api/testimoni/${id}`, formData, {
                headers: {
                    "Content-Type": "multipart/form-data"
                }
            })
            .then((response) => {
                Swal.fire({
                    title: response.data.message,
                    icon: "success",
                    draggable: true
                }).then(() => {
                    window.location.href = '/daftartestimoni'; // Redirect setelah berhasil
                });
            })
            .catch((err) => {
                console.error(err);
                Swal.fire({
                    title: "Gagal mengupdate testimoni",
                    text: "Silakan periksa data Anda dan coba lagi.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            });
        }
    </script>

@endsection