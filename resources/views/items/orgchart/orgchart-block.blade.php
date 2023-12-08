@php
    $itemCount = count($items);
    $gridCols = $itemCount > 3 ? 'md:grid-cols-3' : 'md:grid-cols-'.$itemCount;
@endphp

<div class="{{$bg_color}} p-5 rounded-lg">
    <h1 class="bg-slate-100 p-2 rounded text-slate-600 font-bold text-lg mb-2">{{$title}}</h1>
    <div class="grid grid-cols-1 {{$gridCols}} gap-3">
        @foreach ($items as $item)
            @include('items.orgchart.orgchart-item-mobile', ['org' => $item])
        @endforeach
    </div>
</div>