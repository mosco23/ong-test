@php
    $img_list = ['logo.png', 'scolarisation.webp', 'vbg.webp'];
    $img = 'logo.png';
@endphp

<section>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-x-1 gap-y-4 md:w-1/2 mx-auto p-5">
        @foreach (range(0, 13) as $c)
            <div class="bg-contain bg-no-repeat bg-center h-52" style="background-image: url('/img/{{$img}}')">
                {{-- <img src="/img/{{$img}}" alt="" class="w-fit"> --}}
            </div>
        @endforeach
    </div>
</section>