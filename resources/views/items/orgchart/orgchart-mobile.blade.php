<div class="grid grid-cols-1 gap-y-3 px-2">
    @include('items.orgchart.orgchart-block', ['title' => "Présidence", 'bg_color' => 'bg-slate-200', 'items' => $presidence])
    @include('items.orgchart.orgchart-block', ['title' => "Commissaires aux comptes", 'bg_color' => 'bg-slate-200', 'items' => $commissaire])
    @include('items.orgchart.orgchart-block', ['title' => "Secrétaires", 'bg_color' => 'bg-slate-200', 'items' => $secretaire])
    @include('items.orgchart.orgchart-block', ['title' => "Trésoriers", 'bg_color' => 'bg-slate-200', 'items' => $tresorier])
    @include('items.orgchart.orgchart-block', ['title' => "Coordonnateurs", 'bg_color' => 'bg-slate-200', 'items' => $commissaire])
</div>