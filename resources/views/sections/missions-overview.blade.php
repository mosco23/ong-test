@php
    $img_list = ['/img/prix.webp', '/img/scolarisation.webp', '/img/vbg.webp']
@endphp
<section class="py-10 bg-white">
    @include('items.section-title', ['title' => $sect['title'], 'subTitle' => $sect['subtitle'] ])
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 lg::gap-x-5 md:w-5/6 lg:w-2/3 mx-auto">
        @if ($sect['items'])
            @foreach ($sect['items'] as $item)
                @include('items.mission-card', ['img' => '/storage/'.$item['img']])
            @endforeach
        @else
        @foreach ($img_list as $item)
            @include('items.mission-card', ['img' => $item])
        @endforeach
        @endif
    </div>
</section>