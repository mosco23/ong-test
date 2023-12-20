<div class="flex justify-center items-center">
    @foreach (range(1, 2) as $item)
        @include('items.orgchart.orgchart-horizontal-line')
    @endforeach
    <div>
        @foreach (range(1, 2) as $item)
            <div class="w-1 h-10 mx-auto"></div>
        @endforeach
        @include('items.orgchart.orgchart-horizontal-line')
        @foreach (range(1, 2) as $item)
            @include('items.orgchart.orgchart-vertical-line')
        @endforeach
    </div>
    @foreach (range(1, 2) as $item)
        @include('items.orgchart.orgchart-horizontal-line')
    @endforeach
</div>