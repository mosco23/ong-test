@php
    $scolarisations = [
        [
            'year' => "2021-2022",
            'items' => [
                "Nombre de jeunes filles prises en charges" => 252,
                "coût global" => "90 000 000 F.CFA",
                "Nombre de communes couvertes" => "17 communes du grand Abidjan",
                "Taux de réussite" => "88,66% (266 élèves/300 sont passées en classe supérieure)"
            ]
        ],
        [
            'year' => "2020-2021",
            'items' => [
                "Nombre de jeunes filles prises en charges" => 252,
                "coût global" => "90 000 000 F.CFA",
                "Nombre de communes couvertes" => "17 communes du grand Abidjan",
                "Taux de réussite" => "88,66% (266 élèves/300 sont passées en classe supérieure)"
            ]
        ],
        [
            'year' => "2019-2020",
            'items' => [
                "Nombre de jeunes filles prises en charges" => 252,
                "coût global" => "90 000 000 F.CFA",
                "Nombre de communes couvertes" => "17 communes du grand Abidjan",
                "Taux de réussite" => "88,66% (266 élèves/300 sont passées en classe supérieure)"
            ]
        ],
    ];
@endphp
<section class="py-14 bg-white">
    <div class="md:w-4/5 lg:w-3/5 mx-2 md:mx-auto">
        <h1 class="text-3xl md:text-5xl font-bold my-5">Alphabétisation et scolarisation de la jeune fille</h1>
        <div class="md:mx-10">
            <img src="/img/scolarisation.webp" alt="scolarisation">
        </div>
        <div>
            <h1 class="text-2xl md:text-4xl font-bold text-center my-5">ANNÉE SCOLAIRE</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @foreach ($scolarisations as $scolarisation)
                    <div>
                        <h3 class="text-2xl font-bold">{{$scolarisation['year']}}</h3>
                        <ul class="list-disc ml-10">
                            @foreach ($scolarisation['items'] as $name => $value)
                                <li class="">{{$name}} : {{$value}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>