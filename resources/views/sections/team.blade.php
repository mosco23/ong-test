@php
    $img_list = ['bg-pink-600' => '/img/fondatrice.webp', 'bg-purple-600' => '/img/coordonnateur.webp', 'bg-teal-600' => '/img/vice_president.webp']
@endphp
<section>
    @include('items.section-title', ['title' => 'Equipe', 'subTitle' => 'Notre Equipe' ])
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-5 md:gap-x-5 md:w-3/4 mx-auto">
        @foreach ($img_list as $key => $item)
            <div>
                @include('items.team-card', ['img' => $item, 'color' => $key])
            </div>
        @endforeach
    </div>
</section>