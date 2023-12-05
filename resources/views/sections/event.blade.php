<section class="py-14">
    <div class="mx-auto">
        @include('items.section-title', ['textSize' => 'text-7xl', 'title' => $sect['title'], 'subTitle' => $sect['subtitle'] ])
    </div>
    <div class="columns-1 md:columns-2 gap-y-2 md:w-5/6 lg:w-3/5 md:mx-auto">
        @foreach (App\Models\Image::all() as $img)
            <img src="{{asset('/storage/'.$img->url)}}" alt="" class="h-full w-full">
        @endforeach
    </div>
</section>
