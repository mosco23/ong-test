<section class="py-14 bg-white">
    <div class="md:w-3/4 mx-2 md:mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 md:gap-3 lg:gap-5"
    >
        @foreach (\App\Models\Activity::all() as $key => $activity)
            @include('items.activity-card', ["key" => $key, 'activity' => $activity])
        @endforeach

    </div>
    {{-- @include('items.modal') --}}
</section>
