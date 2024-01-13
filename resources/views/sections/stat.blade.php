@php
    // $list = ['border-amber-500' => 'star', 'border-pink-500' => 'book', 'border-purple-500' => 'building', 'border-green-500' => 'hand'];
    $stats = \App\Models\Stat::all();
@endphp

<section class="py-14">
    @include('items.section-title', ['title' => $sect['title'], 'subTitle' => $sect['subtitle'] ])
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-5 md:gap-x-5 md:w-5/6 lg:w-2/3 mx-auto y-10">
        @foreach ($stats as $stat)
            @include('items.stat-card' , ['stat' => $stat])
        @endforeach
    </div>
</section>