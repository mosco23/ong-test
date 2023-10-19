@php
    $images = \App\Models\Image::pluck('url')
@endphp
<section class="py-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-3 md:gap-x-2 px-2 lg:w-3/5 md:px-5 lg:mx-auto">
        @foreach ($images as $img)
            <div>
                <img src="/storage/{{$img}}" alt="" class="h-72 w-full">
            </div>
        @endforeach
    </div>
</section>