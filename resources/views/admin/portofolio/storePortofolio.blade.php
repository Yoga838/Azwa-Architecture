@extends('dashboard')

@section('content')
    
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
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
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Input Fields
                    </h3>
                </div>
                <div class="flex flex-col gap-5.5 p-6.5">
                    <div class="title">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Name
                        </label>
                        <input type="text" placeholder="Title Input" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                    </div>
                    <div class="price">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Type
                        </label>
                        <input type="text" placeholder="Price Input" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                    </div>
                    <div class="price">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Category
                        </label>
                        <input type="text" placeholder="Price Input" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                    </div>
                    <div class="price">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Luas
                        </label>
                        <input type="text" placeholder="Price Input" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                    </div>
                    <div class="price">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Kontraktor
                        </label>
                        <input type="text" placeholder="Price Input" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                    </div>
                    <div class="description">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Description
                        </label>
                        <textarea rows="6" placeholder="Default textarea" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"></textarea>
                    </div>
                    {{-- File Upload --}}
                    <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                        <div class="mb-4">
                            <label
                                class="block text-gray-700 text-sm font-bold mb-2"
                                for="file-upload"
                            >
                                Upload Files
                            </label>
                            <div
                                class="border-2 border-dashed border-gray-300 p-6 text-center"
                                id="drop-area"
                            >
                                <p class="text-gray-500">Drag and drop files here</p>
                                <p class="text-gray-500">Or</p>
                                <button
                                    type="button"
                                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2"
                                >
                                    Browse
                                </button>
                                <input
                                    id="file-upload"
                                    type="file"
                                    accept=".png, .jpg, .jpeg"
                                    multiple
                                    class="hidden"
                                />
                            </div>
                        </div>
                        <div id="file-preview" class="space-y-4">
                            <!-- File previews will appear here -->
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </div>

    <script>
        const fileInput = document.getElementById("file-upload");
        const dropArea = document.getElementById("drop-area");
        const previewContainer = document.getElementById("file-preview");

        // Handle drag-and-drop
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

        // Handle file input change
        fileInput.addEventListener("change", () => {
            const files = Array.from(fileInput.files);
            handleFiles(files);
        });

        // Open file dialog on button click
        dropArea.querySelector("button").addEventListener("click", () => {
            fileInput.click();
        });

        // Function to handle files
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
    </script>

@endsection