@php
    $colors = ['bg-pink-600', 'bg-purple-600', 'bg-teal-600', 'bg-amber-500'];
    $orgCharts = (new App\Http\Controllers\OrgChartController())->get();
    $presidence = $orgCharts["presidence"];
    $tresorier = $orgCharts["tresorier"];
    $commissaire = $orgCharts["commissaire"];
    $secretaire = $orgCharts["secretaire"];
    $coordonateurs = $orgCharts["coordonateur"] ?? [];
@endphp
{{-- @dd($teams) --}}
<section>
    @include('items.section-title', ['title' => $sect['title'], 'subTitle' => $sect['subtitle'] ])
    {{-- @foreach ($orgCharts as $key => $items)
        <div class=" md:px-5 lg:w-3/4 mx-auto my-10">
            <h3 class="text-center text-4xl font-bold text-slate-600">{{$key}}</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-10 md:gap-y-0 lg:gap-x-5">
                @foreach ($items as $key => $item)
                    @php
                        shuffle($colors);
                    @endphp
                    <div class="my-9">
                        @include('items.team-card', ['item' => $item, 'color' => $colors[0]])
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach --}}
    @include('sections.team-list', ['title' => 'Presidence', 'items' => $presidence])
    @include('sections.team-list', ['title' => 'Tr&eacute;sorerie', 'items' => $tresorier])
    @include('sections.team-list', ['title' => 'Commissariats aux comptes', 'items' => $commissaire])
    @include('sections.team-list', ['title' => 'S&eacute;cr&eacute;tariat', 'items' => $secretaire])
    @include('sections.team-list', ['title' => 'Coordonnateurs', 'items' => $coordonateurs])

</section>