<section class="py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mx-5 gap-y-2 md:gap-3 lg:gap-4 md:w-4/5 lg:h-3/4 md:mx-auto">
        @foreach (App\Models\ProgActivity::all() as $key => $activity)
            <div class="p-2 text-justify border border-slate-300 wow swing relative">
                <div class="w-max p-2 rounded-r-full absolute top-0 left-0 text-white font-bold bg-blue-950">
                    {{ $key + 1}}
                </div>
                <div class="border-b-4 border-blue-600 py-3 text-center font-semibold">{{$activity->date}}</div>
                <div>{{$activity->name}}</div>
            </div>
        @endforeach
    </div>
</section>