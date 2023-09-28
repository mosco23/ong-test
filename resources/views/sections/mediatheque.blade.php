@php
    $images = ['fondatrice.webp', 'scolarisation.webp', 'scolarisation-2.webp', 'prix.webp']
@endphp
<section class="py-14">
    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-x-2 mx-2 md:w-3/5 md:mx-auto">
        @foreach ($images as $img)
            <div>
                <img src="/img/{{$img}}" alt="" class="h-72 w-full">
            </div>
        @endforeach
    </div>
</section>