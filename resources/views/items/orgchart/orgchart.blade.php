<div class="w-full h-full p-2 ">
    <div class=" flex justify-center"  id="president">
        @include('items.orgchart.orgchart-item', ['org' => $presidence[0]])
    </div>
    <div class="flex justify-center items-center">
        <div id="vice_president_1">
            @include('items.orgchart.orgchart-item', ['org' => $presidence[1]])
        </div>
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        <div>
            @include('items.orgchart.orgchart-vertical-line')
            @include('items.orgchart.orgchart-vertical-line')
            @include('items.orgchart.orgchart-horizontal-line')
            @include('items.orgchart.orgchart-vertical-line')
            @include('items.orgchart.orgchart-vertical-line')
        </div>
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.orgchart-horizontal-line')
        <div id="vice_president_2">
            @include('items.orgchart.orgchart-item', ['org' => $presidence[2]])
        </div>
    </div>
    <div class="flex justify-center items-center">
        @include('items.orgchart.arrow-right-down')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.arrow-left-right-down')
        @include('items.orgchart.arrow')
        @include('items.orgchart.arrow-left-right-down')
        @include('items.orgchart.orgchart-horizontal-line')
        @include('items.orgchart.arrow-left-down')
    </div>
    <div class="flex justify-center">
        <div id="commissaire">
            @foreach ($commissaire as $c)
                @include('items.orgchart.orgchart-item', ['org' => $c])
                @if (!$loop->last)
                    @include('items.orgchart.orgchart-vertical-line')
                @endif
            @endforeach
        </div>
        <div class="flex">
            <div class="mx-[86px]">
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
            </div>
        </div>
        <div id="secretaire">
            @foreach ($secretaire as $s)
                @include('items.orgchart.orgchart-item', ['org' => $s])
                @if (!$loop->last)
                    @include('items.orgchart.orgchart-vertical-line')
                @endif
            @endforeach
        </div>
        <div class="flex">
            <div class="mx-[86px]">
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-vertical-line')
            </div>
        </div>
        <div id="tresorier">
            @foreach ($tresorier as $t)
                @include('items.orgchart.orgchart-item', ['org' => $t])
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
                @include('items.orgchart.orgchart-item', ['org' => $coordonateur])
            </div>
        @endforeach
    </div>
</div>