@php
    $img_list = ['coordonnateur.webp', 'fondatrice.webp', 'dom-2.webp', 'membre.webp', 'scolarisation.webp', 'vice_president.webp'];
@endphp
<section class="bg-white">
    <div class="columns-1 md:columns-3 w-full lg:w-2/3 mx-auto h-auto md:h-full p-2">
        @foreach ($img_list as $img)
            <div class="border border-slate-200 aspect-auto my-5">
                <div class="p-1">
                    <img src={{"/img/". $img }} alt="">
                </div>
                <p class="p-4 text-slate-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga earum impedit excepturi</p>
            </div>
        @endforeach
    </div>
</section>