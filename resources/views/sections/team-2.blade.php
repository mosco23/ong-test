@php
    $orgCharts = (new App\Http\Controllers\OrgChartController())->get();
    // $orgCharts = json_encode((new App\Http\Controllers\OrgChartController())->get());
    $presidence = $orgCharts["presidence"];
    $tresorier = $orgCharts["tresorier"];
    $commissaire = $orgCharts["commissaire"];
    $secretaire = $orgCharts["secretaire"];
    $coordonateurs = $orgCharts["coordonateur"] ?? [];

    $org = $presidence[1];
    // dd($org)

@endphp
{{-- @dd($orgCharts) --}}
<section class="bg-white py-14">
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
                @include('items.orgchart.orgchart-item', ['org' => $commissaire[0]])
                {{-- @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-item', ['org' => $commissaire[1]]) --}}
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
                @include('items.orgchart.orgchart-item', ['org' => $secretaire[0]])
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-item', ['org' => $secretaire[1]])
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
                @include('items.orgchart.orgchart-item', ['org' => $tresorier[0]])
                {{-- @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-item', ['org' => $tresorier[1]]) --}}
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
            {{-- <div class="ml-10">
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-item')
            </div>
            <div class="ml-10">
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-item')
            </div>
            <div class="ml-10">
                @include('items.orgchart.orgchart-vertical-line')
                @include('items.orgchart.orgchart-item')
            </div> --}}
            
        </div>
    </div>
</section>