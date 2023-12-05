@php
    // $img_list = ['bg-pink-600' => '/img/fondatrice.webp', 'bg-purple-600' => '/img/coordonnateur.webp', 'bg-teal-600' => '/img/vice_president.webp']
    $colors = ['bg-pink-600', 'bg-purple-600', 'bg-teal-600']
@endphp
<section>
    @include('items.section-title', ['title' => $sect['title'], 'subTitle' => $sect['subtitle'] ])
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-10 md:gap-y-0 lg:gap-x-5 md:px-5 lg:w-3/4 mx-auto">
        @foreach ($sect['items'] as $key => $item)
            {{-- @dd($item) --}}
            <div>
                @include('items.team-card', ['item' => $item, 'color' => $colors[$key]])
            </div>
        @endforeach
    </div>
</section>