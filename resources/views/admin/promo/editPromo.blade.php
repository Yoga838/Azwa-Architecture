@extends('dashboard')

@section('content')
    
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
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
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Input Fields
                    </h3>
                </div>
                <form class="flex flex-col gap-5.5 p-6.5" onsubmit="uploadPromo(event)">
                    <div class="title">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Judul Promo
                        </label>
                        <input type="text" placeholder="Masukkan judul promo" value="{{$promo->title}}" id="title" name="title" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" required/>
                    </div>
                    <div class="price">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Harga
                        </label>
                        <input type="text" placeholder="Masukkan harga" value="{{$promo->price}}" id="price" name="price" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" required/>
                    </div>
                    <div class="actual-price">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Harga Asli
                        </label>
                        <input type="text" placeholder="Masukkan harga asli" value="{{$promo->actual_price}}" id="actual_price" name="actual_price" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" required/>
                    </div>
                    <div class="description">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Deskripsi
                        </label>
                        <div class="flex gap-3">
                            <input type="text" id="deskripsi" name="description" placeholder="Masukkan deskripsi" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"/>
                            <button class="px-2" id="addDeskripsi" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-10 h-full" class="text-landing-black-1" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12m11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                        {{-- menampilkan deskripsi tagar --}}
                        <div class="mt-3" id="tagList">
                            @foreach ($promodesc as $desc)
                                <span class="inline-block px-3 py-1 rounded bg-theme3 text-white text-sm mr-2 mb-2">
                                    {{$desc}}
                                </span>
                            @endforeach
                        </div>
                    </div>
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
                    <button type="submit" class="w-full p-4 bg-theme3 hover:bg-theme2 transition-all ease-linear dark:bg-white dark:hover:bg-gray-400">
                        <h1 class="text-white dark:text-[#000] font-bold text-xl">Tambah Promo</h1>
                    </button>
                </form>
          </div>
        </div>
    </div>

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

        const deskripsiList = []
        document.getElementById('addDeskripsi').addEventListener('click', function(event) {
            event.preventDefault();
            const input = document.getElementById('deskripsi');
            const tagList = document.getElementById('tagList');
            const description = input.value.trim();
            if (description) {
                deskripsiList.push(description);
                const tag = document.createElement('span');
                tag.className = 'inline-block px-3 py-1 rounded bg-theme3 text-white text-sm mr-2 mb-2';
                tag.textContent = description;
                tagList.appendChild(tag);
                input.value = '';
                console.log('Updated deskripsiList:', deskripsiList);
            }
        });

    </script>

@endsection