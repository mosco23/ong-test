@php
    $img_list = ['/img/prix.webp', '/img/scolarisation.webp', '/img/vbg.webp']
@endphp
<section class="py-10 bg-white">
    @include('items.section-title', ['title' => 'missions', 'subTitle' => 'Nos missions' ])
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 lg::gap-x-5 md:w-5/6 lg:w-2/3 mx-auto">
        @foreach ($img_list as $item)
            @include('items.mission-card', ['img' => $item])
        @endforeach
    </div>
</section>