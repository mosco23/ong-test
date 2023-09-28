<section class="py-14">
    <div class="max-w-min mx-auto">
        @include('items.section-title', ['title' => 'Pour le bien-être de la femme', 'subTitle' => 'Vitrine des événements' ])
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:w-3/5 md:mx-auto">
        @foreach ([1,2,3, 4, 5, 6, 9, 5] as $item)
            @include('items.event-card', ['img' => '/img/scolarisation-2.webp'])
        @endforeach
    </div>
</section>