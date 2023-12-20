<div class="w-full h-full p-2 ">
    <div class=" flex justify-center"  id="president">
        @include('items.orgchart.orgchart-item-mobile', ['org' => $presidence[0]])
    </div>
    <div class="flex justify-center items-center">
        <div id="vice_president_1">
            @include('items.orgchart.orgchart-item-mobile', ['org' => $presidence[1]])
        </div>
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        <div>
            @foreach (range(1, 7) as $item)
                @include('items.orgchart.orgchart-vertical-line')
            @endforeach
        </div>
        @foreach (range(1, 2) as $item)
            @include('items.orgchart.orgchart-horizontal-line')
        @endforeach
        <div id="vice_president_2">
            @include('items.orgchart.orgchart-item-mobile', ['org' => $presidence[2]])
        </div>
    </div>
    <div class="flex justify-center items-center">
        @include('items.orgchart.arrow-right-down')
        @foreach (range(1, 2) as $item)
            @include('items.orgchart.orgchart-horizontal-line')
        @endforeach
        @include('items.orgchart.arrow-left-right-down')
        @include('items.orgchart.arrow')
        @include('items.orgchart.arrow-left-right-down')
        @foreach (range(1, 2) as $item)
            @include('items.orgchart.orgchart-horizontal-line')
        @endforeach
        @include('items.orgchart.arrow-left-down')
    </div>
    <div class="flex justify-center">
        <div id="commissaire">
            @foreach ($commissaire as $c)
                <div class="flex items-center justify-center flex-col">
                    @include('items.orgchart.orgchart-item-mobile', ['org' => $c])
                    @if (!$loop->last)
                        @include('items.orgchart.orgchart-vertical-line')
                    @endif
                </div>
            @endforeach
        </div>
        <div class="flex">
            <div class="mx-[38px]">
                @foreach (range(1, 10) as $item)
                    @include('items.orgchart.orgchart-vertical-line')
                @endforeach
            </div>
        </div>
        <div id="secretaire">
            @foreach ($secretaire as $s)
                @include('items.orgchart.orgchart-item-mobile', ['org' => $s])
                @if (!$loop->last)
                    @include('items.orgchart.orgchart-vertical-line')
                @endif
            @endforeach
        </div>
        <div class="flex">
            <div class="mx-[38px]">
                @foreach (range(1, 10) as $item)
                    @include('items.orgchart.orgchart-vertical-line')
                @endforeach
            </div>
        </div>
        <div id="tresorier">
            @foreach ($tresorier as $t)
                @include('items.orgchart.orgchart-item-mobile', ['org' => $t])
                @if (!$loop->last)
                    @include('items.orgchart.orgchart-vertical-line')
                @endif
            @endforeach
        </div>
    </div>
    <div class="flex justify-center">
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
    </div>
    <div class="flex justify-center" id="coordonnateur">
        @foreach ($coordonateurs as $coordonateur)
            @php
                $marginLeft = $forloop->first ? '' : 'ml-10'
            @endphp
            <div class="{{$marginLeft}}">
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-item-mobile', ['org' => $coordonateur])
            </div>
        @endforeach
    </div>
</div>