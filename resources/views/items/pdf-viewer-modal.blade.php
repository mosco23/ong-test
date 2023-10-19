<div x-data="{ modelOpen: false }" class="">
    <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-pink-500 rounded-md dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:bg-pink-700 hover:bg-pink-600 focus:outline-none focus:bg-pink-500 focus:ring focus:ring-pink-300 focus:ring-opacity-50">
        <span class="w-6 h-6">
            <x-heroicon-s-eye />
        </span>
        <span>D&eacute;tail</span>
    </button>

    <div x-show="modelOpen" class="fixed inset-x-0 md:left-10 md:right-10 inset-y-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-2 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full md:w-3/4 lg:w-2/3 md:h-auto p-2 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl "
            >
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="text-xl font-medium text-gray-800 "></h1>

                    <button @click="modelOpen = false" class="rounded-full p-2 mb-2 bg-red-600 text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>
                    <iframe src="/storage/{{$pdf}}"
                        frameborder="0"
                        class="w-full h-[80vh]"></iframe>
            </div>
        </div>
    </div>
</div>