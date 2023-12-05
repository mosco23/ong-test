<!-- component -->

<div class="place-content-center mb-5 w-full">
    <div x-data='{
      currentIndex: 1,
      images: @json($img_list),
      previous() {
        if (this.currentIndex > 1) {
          this.currentIndex = this.currentIndex - 1;
        }
      },
      forward() {
        if (this.currentIndex < this.images.length) {
          this.currentIndex = this.currentIndex + 1;
        }
      },
    }' class="relative mx-auto w-full overflow-hidden rounded-md">
        <div class="absolute right-5 top-5 z-10 rounded-full bg-gray-600 px-2 text-center text-sm text-white">
            <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
        </div>

        <button @click="previous()" class="absolute left-2 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
            <span class="text-2xl font-bold text-slate-600">
                <x-heroicon-o-chevron-left />
            </span>
        </button>

        <button @click="forward()" class="absolute right-2 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
            <span class="text-2xl font-bold text-slate-600">
                <x-heroicon-o-chevron-right />
            </span>
        </button>

        <div class="h-96 w-full">
            <template x-for="(image, index) in images">
                <div x-show="currentIndex == index + 1" 
                  x-transition:enter="transition transform duration-300" 
                  x-transition:enter-start="opacity-0" 
                  x-transition:enter-end="opacity-100" 
                  x-transition:leave="transition transform duration-300" 
                  x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" 
                  class="" 
                  {{-- :style="`background-image: url('storage/${image}')`" --}}
                  >
                    <img :src=`storage/${image}` alt="image" class="rounded-sm object-contain h-96 w-full" />
                </div>
            </template>
        </div>
    </div>
</div>