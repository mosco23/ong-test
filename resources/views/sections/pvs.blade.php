{{-- <section class="py-14 bg-white">
    <div class="w-1/2 mx-auto">
       @foreach (App\Models\PV::all() as $pv)
           @include('items.pv-card')
       @endforeach
    </div>
</section> --}}
<section class="py-12 bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-3 md:mx-5 lg:mx-auto lg:w-4/5 gap-y-2 md:gap-3 lg:gap-4 lg:h-3/4">
        @foreach (App\Models\PV::all()->sortBy('date')->reverse() as $key => $pv)
            <div class="p-2 text-justify border border-slate-300 wow swing relative">
                <div class="w-max p-2 rounded-r-full absolute top-0 left-0 text-white font-bold bg-blue-950">
                    {{ $key + 1}}
                </div>
                @include('items.pv-card')
                {{-- <div class="border-b-4 border-blue-600 py-3 text-center font-semibold">{{$activity->date}}</div>
                <div>{{$activity->name}}</div> --}}
            </div>
        @endforeach
    </div>
</section>