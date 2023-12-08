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
    <div class="hidden lg:block">
        @include('items.orgchart.orgchart')
    </div>
    <div class="block lg:hidden">
        @include('items.orgchart.orgchart-mobile')
    </div>
</section>