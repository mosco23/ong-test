@php
    $activities = \App\Models\Activity::all()->sortByDesc('end_at')->sortByDesc('start_at')->sortByDesc('date');
@endphp

<section class="py-14 bg-white">
    <div class="md:w-3/4 mx-2 md:mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-3 lg:gap-5"
    >
        @foreach ($activities as $key => $activity)
            @include('items.activity-card', ["key" => $key, 'activity' => $activity])
        @endforeach

    </div>
    {{-- @include('items.modal') --}}
</section>
