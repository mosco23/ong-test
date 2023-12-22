@php
    // $img_list = ['bg-pink-600' => '/img/fondatrice.webp', 'bg-purple-600' => '/img/coordonnateur.webp', 'bg-teal-600' => '/img/vice_president.webp']
    $colors = ['bg-pink-600', 'bg-purple-600', 'bg-teal-600', 'bg-amber-500'];
    $team = App\Models\OrgChart::with('user')
    ->select('org_charts.img as image', 'org_charts.title', 'users.name as description')
    ->join('users', 'org_charts.user_id', '=', 'users.id') // Assurez-vous d'ajuster 'user_id' en fonction de votre relation
    ->get();
@endphp
{{-- @dd($team) --}}
<section>
    @include('items.section-title', ['title' => $sect['title'], 'subTitle' => $sect['subtitle'] ])
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-10 md:gap-y-0 lg:gap-x-5 md:px-5 lg:w-3/4 mx-auto">
        @foreach ($team as $key => $item)
            @php
                shuffle($colors);
            @endphp
            <div class="my-9">
                @include('items.team-card', ['item' => $item, 'color' => $colors[0]])
            </div>
        @endforeach
    </div>
</section>