<nav class=""
    x-data="{openItem:false}">
    <div class="grid grid-cols-2"
        :class=" window.innerWidth < 1105 ? 'md:grid-cols-3' : 'md:grid-cols-4' "
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
        <div class="bg-white py-7 pl-10">
            <a href="/" class="flex items-center">
                <img src="/img/logo.png" class="h-9 mr-3" alt="Flowbite Logo">
                <span class="self-center whitespace-nowrap">
                    <span class="sm:text-3xl md:text-4xl font-semibold text-green-500" >ONG</span>
                    <span class="xs:text-3xl md:text-4xl font-semibold text-blue-800">ASE2D</span>
                </span>
            </a>
        </div>
        <div class="md:col-span-2">
            <div class="h-full p-2 items-center justify-end mr-3"
                :class="window.innerWidth < 945 ? 'flex' : 'hidden'">
                <div class="max-w-max grid grid-cols-1 gap-1 border p-2 cursor-pointer" @click="openItem = !openItem">
                    <div class="w-8 h-1 rounded-lg bg-slate-400"></div>
                    <div class="w-8 h-1 rounded-lg bg-slate-400"></div>
                    <div class="w-8 h-1 rounded-lg bg-slate-400"></div>
                </div>
            </div>
            @include('items.desktop-navbar')
        </div>
        <a href="#"
            class="hidden items-center  justify-center space-x-2 font-semibold hover:text-pink-600"
            :class="window.innerWidth < 1105 ? 'hidden' : 'md:flex'; fontSize()">
            <span>
                @include('svg.heart')
            </span>
            <span>
                Faire un don
            </span>
        </a>
    </div>
    <div class="bg-white text-slate-400 mx-4"
        :class="openItem ? 'block' : 'hidden'">
        @include('items.mobile-navbar')
        {{-- <p class="text-xl">Text efmk</p> --}}
    </div>
</nav>