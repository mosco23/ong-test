<div class=" md:px-5 lg:w-3/4 mx-auto my-10">
    <h3 class="text-center text-4xl font-bold text-slate-600 flex items-center">
        <div class="rounded-l-full h-5 w-5 bg-slate-800"></div>
        <div class="h-1 w-full bg-slate-800"></div>
        <div class="p-2 rounded bg-slate-300 w-max">{!! $title !!}</div>
        <div class="h-1 w-full bg-slate-800"></div>
        <div class="rounded-r-full h-5 w-5 bg-slate-800"></div>
    </h3>
    <div class="grid grid-cols-1 md:flex md:items-center md:justify-evenly">
        @foreach ($items as $key => $item)
            @php
                shuffle($colors);
            @endphp
            {{-- @dd($item) --}}
            <div class="my-9 w-full">
                @include('items.team-card', ['item' => $item, 'color' => $colors[0]])
            </div>
        @endforeach
    </div>
</div>
