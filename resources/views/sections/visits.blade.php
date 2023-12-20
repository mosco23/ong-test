@php
    $visits = \App\Models\Visit::siteVisits();
@endphp
<section class="py-14">
    <div class="grid grid-cols-1 px-2 lg:mx-auto lg:w-4/5">
        <h1 class="bg-white font-bold text-slate-700 text-center text-3xl py-2">{{$sect['title']}}</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2 text-center text-lg my-2">
            @foreach ($visits as $key => $value)
                @include('items.visit-card', ['isFlex' => false])
            @endforeach    
        </div>
        <div>
            {{-- @include('items.visit-card', ['key' => 'total', 'value' => $visits['total'], 'isFlex' => true]) --}}
            {{-- <div>
                <span>@svg('m-chevron-down', 'w-5 h-5')</span>
                <p>Total :</p>
            </div>
            <div>
                {{$visits['total']}}
            </div> --}}
        </div>
    </div>
</section>