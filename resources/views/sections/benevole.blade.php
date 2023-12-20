<section class="grid grid-cols-1 md:grid-cols-2 py-12 md:py-0 md:gap-x-3 lg:gap-x-5">
    <div class="mx-3 flex items-center">
        <div class="grid grid-cols-1 gap-5 py-10">
            <h1>
                <span class="bg-green-400 text-white text-xs text-center capitalize py-2 px-3 min-w-min">{{$sect['subtitle']}}</span>
            </h1>
            <h2 class="lg:w-2/3 text-blue-600 text-3xl md:text-4xl lg:text-5xl font-bold uppercase">{{$sect['title']}}</h2>
            <p class="text-justify">
                {!! $sect['description'] !!}
            </p>
            <div>
                <a href="/contact" class="flex space-x-2 max-w-max p-3 text-white text-lg font-bold bg-pink-600">
                    <span>
                        @svg('heroicon-o-user-group', 'w-5 h-5')
                    </span>
                    <span>
                        Postulez ici
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class=" md:px-0 px-2">
        <img src="/img/membre.webp" alt="logo" class="w-full h-72 md:h-[40rem]">
    </div>
</section>