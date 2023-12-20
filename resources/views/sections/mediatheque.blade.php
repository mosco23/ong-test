@php
    $images = \App\Models\Image::pluck('url')
@endphp
<section class="py-14">
    <div class="columns-1 md:columns-3 gap-y-2 md:w-2/3 lg:w-3/5 md:mx-auto">
        @foreach ($images as $img)
            <img src="/storage/{{$img}}" alt="" class="h-max w-full">
        @endforeach
    </div>
</section>