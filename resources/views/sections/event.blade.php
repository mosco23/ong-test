@php
    $images = App\Models\Image::all()->chunk(9)[0];
@endphp
<section class="py-14">
    <div class="mx-auto">
        @include('items.section-title', ['textSize' => 'text-7xl', 'title' => $sect['title'], 'subTitle' => $sect['subtitle'] ])
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-3 md:gap-x-2 px-2 lg:w-3/5 md:px-5 lg:mx-auto">
        @foreach ($images as $img)
            <div>
                <img src="{{asset('/storage/'.$img->url)}}" alt="" class="h-full w-full">
            </div>
        @endforeach
    </div>
    <div class="flex items-center justify-center py-5">
        <a 
            class="px-5 py-2 bg-blue-500 text-white font-semibold rounded"
            href="/mediatheque"
            >
            Voir plus
        </a>
    </div>
</section>
