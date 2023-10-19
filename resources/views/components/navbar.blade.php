<nav class=""
    x-data="{openItem:false}">
    <div class="grid grid-cols-3 lg:flex lg:items-center lg:justify-center"
        x-data="{
            fontSize(){
                width = window.innerWidth;
                console.log(width);
                if(width < 800){
                    return 'text-sm';
                }else if(width < 1105){
                    return 'text-sm';
                }
                else if(width < 1241){
                    return 'text-sm';
                }
                else{
                    return 'text-xl';
                }
            }
        }"
        >
        <div class="col-span-2 lg:flex-none lg:w-[20.7rem] bg-white py-5 pl-5">
            <a href="/" class="flex items-center">
                <img src="/img/logo.png" class="h-16 md:h-24 mr-3" alt="Flowbite Logo">
                <div class="grid grid-cols-1 divide-y gap-y-2">
                    <span class="self-center whitespace-nowrap">
                        <span class="md:text-4xl font-semibold text-green-500">OING</span>
                        <span class="md:text-4xl font-semibold text-blue-800">ASE2D</span>
                    </span>
                    <p class="text-xs text-black text-wrap">Actions du Sud pour l'Environnement et le Développement Durable</p>
                </div>
            </a>
        </div>
        <div class="lg:grow">
            <div class="h-full p-2 items-center justify-end mr-3 flex lg:hidden"
                {{-- :class="window.innerWidth < 945 ? 'flex' : 'hidden'" --}}
                >
                <div class="max-w-max grid grid-cols-1 gap-1 border p-2 cursor-pointer" @click="openItem = !openItem">
                    <div class="w-8 h-1 rounded-lg bg-slate-400"></div>
                    <div class="w-8 h-1 rounded-lg bg-slate-400"></div>
                    <div class="w-8 h-1 rounded-lg bg-slate-400"></div>
                </div>
            </div>
            @include('items.desktop-navbar')
        </div>
        <div class="flex-none w-36 lg:px-1">
            <div class="flex items-center justify-center"
                :class="window.innerWidth < 1105 ? 'hidden' : 'md:flex'; fontSize()">
                <a href="#"
                    class="flex items-center justify-center space-x-2 font-semibold hover:text-pink-600">
                    <span>
                        @include('svg.heart')
                    </span>
                    <span>
                        Faire un don
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-white text-slate-400 mx-4"
        :class="openItem ? 'block' : 'hidden'">
        @include('items.mobile-navbar')
        {{-- <p class="text-xl">Text efmk</p> --}}
    </div>
</nav>