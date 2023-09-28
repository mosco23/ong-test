@php
    $img_list = ['dom-2.webp', 'membre.webp', 'scolarisation.webp', 'vice_president.webp'];
@endphp
<section class="bg-white py-14">
    <div class="mx-2 md:w-3/5 md:mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 py-10">
            <div class="font-bold py-4 md:py-0">
                <span class="text-red-600">04 ANS D'EXPÉRIENCE</span>
                <h1 class="text-5xl md:text-7xl font-bold py-3">Présentation de l’ONG ASE2D</h1>
            </div>
            <div class="relative h-64"
                x-data="{
                    index: 0,
                    {{-- img_list: @json($img_list), --}}
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
                }"
                x-init="carousel()">
                <div class="absolute inset-0 z-0">
                    @foreach ($img_list as $key => $img)
                        <div class="w-full max-h-max "
                            x-show="index === {{$key}}">
                            <img src="/img/{{$img}}" alt="{{$img}}"
                                class="w-full h-72"
                                />
                        </div>
                        {{-- <img src="/img/{{$img}}" alt="" 
                            x-show="index === {{$key}}"
                            class="h-56 w-full" /> --}}
                    @endforeach
                </div>
                <div class="absolute inset-0 z-10 flex items-center justify-between text-white font-bold">
                    <span @click="back();"
                        class="rounded-full bg-opacity-40 cursor-pointer w-7 h-7">
                        @include('svg.chevron-left')
                    </span>
                    <span @click="next();"
                            class="rounded-full backdrop-blur-xl cursor-pointer w-7 h-7">
                        @include('svg.chevron-right')
                    </span>
                </div>
            </div>
        </div>
        <p class="text-xl">
            BLOOM est un mot anglais qui signifie « floraison ». BLOOM représente une fleur. Le logo est une fleur
             avec des pétales détachées dont une qui s’élève toute seule vers le haut. BLOOM, pour dire que la femme est une fleur qui rajeunie, 
             qui renaît, qui éclot, qui s’épanouit. A travers L’ONG BLOOM, nous voulons dire à la femme qu’il y a encore de l’espoir pour elle. <br /> <br>
             En dépit des coups de la vie, elle peut encore refleurir, s’épanouir, se relever, et garder espoir. L’ONG BLOOM est apolitique et 
             aconfessionnelle et dirigée par Madame Danielle Lidégoué, épouse Cissé, une fervente militante 
             pour la défense des droits des femmes, leur autonomisation et de la scolarisation de la jeune fille.
        </p>
    </div>
</section>