@php
    // $img_list = ['dom-2.webp', 'membre.webp', 'scolarisation.webp', 'vice_president.webp'];
    $img_list = array_map(fn($item) => $item['image'], $sect['items']);
@endphp
<section class="bg-white py-14">
    <div class="mx-2 md:w-4/5 lg:w-3/4 md:mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 py-10 md:gap-x-5">
            <div class="font-bold py-4 md:py-0">
                <span class="text-red-600">{{$sect['subtitle']}}</span>
                <h1 class="text-5xl lg:text-7xl font-bold py-3 text-wrap">{{$sect['title']}}</h1>
            </div>
            <div class="h-max">
                @include('items.slider-3', ['images' => $img_list])
            </div>
        </div>
        <p class="text-xl text-justify">
            {!! $sect['description'] !!}
        </p>
    </div>
</section>