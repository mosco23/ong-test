<!-- component -->

<div class="place-content-center w-full relative mx-auto rounded-md" 
    x-data='{
      currentIndex: 1,
      images: {{count($img_list)}},
      previous() {
        if (this.currentIndex > 1) {
          this.currentIndex = this.currentIndex - 1;
        }
      },
      forward() {
        if (this.currentIndex < this.images) {
          this.currentIndex = this.currentIndex + 1;
        }
      },
    }'>
        <div class="absolute right-5 top-5 z-10 rounded-full bg-gray-600 px-2 text-center text-sm text-white">
            <span x-text="currentIndex"></span>/<span x-text="images"></span>
        </div>

        <button @click="previous()" class="absolute left-2 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
            <div class="text-2xl font-bold w-max">
                <x-heroicon-o-chevron-left />
            </div>
        </button>

        <button @click="forward()" class="absolute right-2 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
            <div class="text-2xl font-bold w-max">
                <x-heroicon-o-chevron-right />
            </div>
        </button>

        <div class="relative h-96 md:h-[40rem] w-full">
            @foreach ($images as $key => $image)
              <div x-show="currentIndex == {{$key + 1}}" 
                x-transition:enter="transition transform duration-300" 
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100" 
                x-transition:leave="transition transform duration-300" 
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" 
                class="absolute inset-0" 
                {{-- :style="`background-image: url('storage/${image}')`" --}}
                >
                  <img src="{{$image->getImageResized('md')}}" alt="image" class="rounded-sm mx-auto h-full" />
              </div>
            @endforeach
        </div>
</div>