<div class="relative h-full"
    x-data='{
        index: 0,
        images: @json($img_list),
        max: {{count($img_list)}},
        next(){
            if(this.index >= this.max - 1) return;
            this.index += 1;
        },
        back(){
            if(this.index <= 0) return;
            this.index -= 1;
        },
        carousel(){
            setInterval(() => {
                if(this.index === this.max - 1){
                    // clearInterval;
                    this.index = 0;
                }else{
                    this.index += 1;
                }
            }, 3000)
        },
    }'
    x-init="carousel()">
    <div class="absolute inset-0 z-0">
        <template x-for="(image, i) in images">
            <div class=" "
                x-show="index === i">
                <img :src=`storage/${image}` alt=""
                    class="w-full h-56"
                    />
            </div>
            {{-- <img src="/img/{{$img}}" alt="" 
                x-show="index === {{$key}}"
                class="h-56 w-full" /> --}}
        </template>
    </div>
    <div class="absolute inset-0 z-10 flex items-center justify-between text-white font-bold">
        <span @click="back();"
            class="rounded-full backdrop-blur-xl cursor-pointer w-7 h-7">
            @include('svg.chevron-left')
        </span>
        <span @click="next();"
                class="rounded-full backdrop-blur-xl cursor-pointer w-7 h-7">
            @include('svg.chevron-right')
        </span>
    </div>
</div>