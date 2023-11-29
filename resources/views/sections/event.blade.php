<section class="py-14" x-data='{
    images: @json(App\Models\Image::pluck('url')),
    index: 0,
    step: 6,
    next(){
        MAX = (this.images.length - 1);
        if(this.step >= MAX) return;
        
        s = this.step + 6;
        var i = s - 6;

        if(i < MAX){
            this.index = i;
        }else{
            this.index = MAX - 6;
        }

        if(s <= MAX){
            this.step = s;
        }else{
            this.step = s - MAX;
        }
    },
    back(){
        MIN = 0;
        if(this.step == MIN) return;
        
        s = this.step - 6;
        var i = s - 6;

        if(i >= MIN){
            this.index = i;
        }else{
            this.index = 0;
        }

        if(s >= MIN){
            this.step = s;
        }else{
            this.step = 6;
        }
    },

    getImages(){
        return this.images;
        {{-- return this.images.slice(this.index, this.step); --}}
    }
}'>
    <div class="mx-auto">
        @include('items.section-title', ['textSize' => 'text-7xl', 'title' => "ENSEMBLE SAUVONS NÔTRE HUMANITE !", 'subTitle' => 'Vitrine des événements' ])
    </div>
    <div class="columns-1 md:columns-2 gap-y-2 md:w-5/6 lg:w-3/5 md:mx-auto">
    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:w-5/6 lg:w-3/5 md:mx-auto"> --}}
        @foreach (App\Models\Image::all() as $img)
            {{-- @include('items.event-card', ['img' => $img]) --}}
            <img src="{{asset('/storage/'.$img->url)}}" alt="" class="h-full w-full">
        @endforeach

        {{-- <template x-for="img in getImages()">
            @include('items.event-card')
        </template> --}}
    </div>
</section>
