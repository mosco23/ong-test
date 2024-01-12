@php
    $colors = ['bg-pink-600', 'bg-purple-600', 'bg-teal-600', 'bg-amber-500'];
    $orgCharts = (new App\Http\Controllers\OrgChartController())->get();
    $presidence = $orgCharts["presidence"];
    $presidence_range = [
            $presidence[1],
            $presidence[0],
            $presidence[2]
        ];
    $presidence = $presidence_range;
    $tresorier = $orgCharts["tresorier"];
    $commissaire = $orgCharts["commissaire"];
    $secretaire = $orgCharts["secretaire"];
    $coordonnateurs = $orgCharts["coordonnateur"] ?? [];
@endphp
<section>
    @include('items.section-title', ['title' => $sect['title'], 'subTitle' => $sect['subtitle'] ])
    @if ($presidence)
        @include('sections.team-list', ['title' => 'Presidence', 'items' => $presidence])
    @endif
    @if ($tresorier)
        @include('sections.team-list', ['title' => 'Tr&eacute;sorerie', 'items' => $tresorier])
    @endif
    @if ($commissaire)
        @include('sections.team-list', ['title' => 'Commissariat aux comptes', 'items' => $commissaire])
    @endif
    @if ($secretaire)
        @include('sections.team-list', ['title' => 'S&eacute;cr&eacute;tariat', 'items' => $secretaire])
    @endif
    @if ($coordonnateurs)
        @include('sections.team-list', ['title' => 'Coordonnateurs', 'items' => $coordonnateurs])
    @endif

</section>