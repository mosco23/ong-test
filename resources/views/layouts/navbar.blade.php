<nav class="grid grid-cols-4">
    <div class="bg-white py-7 pl-10">
        <a href="#" class="flex items-center">
            <img src="/img/logo.png" class="h-9 mr-3" alt="Flowbite Logo">
            <div>
                <p class="text-xs">Actions du Sud pour l'Environnement et le Développement Durable</p>
                <span class="self-center whitespace-nowrap">
                    <span class="text-4xl font-semibold text-green-500">OING</span>
                    <span class="text-4xl font-semibold text-blue-800">ASE2D</span>
                </span>
            </div>
        </a>
    </div>
    <ul class="col-span-2 flex items-center justify-evenly md:p-0  font-medium border rounded-lg md:flex-row md:mt-0 md:border-0">
        @foreach ($navItems as $item)
            <li class=" relative group/item" x-data="{open: false}">
                <a href="#" class="block py-7 pl-3 pr-4 font-bold capitalize" aria-current="page">
                    Actualit&eacute;
                </a>
                @if ($item->subItems->isNotEmpty())
                    <div class="absolute top-[80%] hidden group-hover/item:grid grid-cols-1 divide-y-2 bg-white text-slate-600 font-semibold  w-56 uppercase"
                        x-transition.duration.500ms>
                        @foreach ($item->subItems as $sub)
                            <a href="/{{$sub->link}}" class="h-fit w-full p-3 hover:text-blue-700">{{$sub->name}}</a>
                        @endforeach
                        {{-- <a href="/activity" class="h-fit w-full p-3 hover:text-blue-700">Activité</a>
                        <a href="/distinction" class="h-fit w-full p-3 hover:text-blue-700">nos distinctions</a> --}}
                    </div>
                @endif
            </li>
        @endforeach
        <li>
            <a href="#" class="block py-7 pl-3 pr-4 font-bold capitalize">Qui sommes-nous ?</a>
        </li>
        <li>
            <a href="#" class="block py-7 pl-3 pr-4 font-bold capitalize">Nos Missions</a>
        </li>
        <li>
            <a href="#" class="block py-7 pl-3 pr-4 font-bold capitalize">M&eacute;diateque</a>
        </li>
        <li>
            <a href="#" class="block py-7 pl-3 pr-4 font-bold capitalize">Th&eacute;matiques</a>
        </li>
        <li>
            <a href="#" class="block py-7 pl-3 pr-4 font-bold capitalize">Contact</a>
        </li>
    </ul>
    <a href="#"
        class=" flex items-center  justify-center space-x-2 text-2xl font-semibold">
        <span>
            @include('svg.heart')
        </span>
        <span>
            Faire un don
        </span>
    </a>
</nav>