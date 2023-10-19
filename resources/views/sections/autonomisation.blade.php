@php
    $collections = [
        [
            "name" => "RELOGEMENT",
            "items" => [
                "10 familles relogées dans le Grand Abidjan",
                "2.235 000 FCFA ont été investis dans le relogement.",
            ]
        ],
        [
            "name" => "HOME SERVICE ET BABY BOOM",
            "items" => [
                "Emploi de Nounou;",
                "Cuisinière",
                "Gouvernantes",
                "Formation réénumérée au SMIG."
            ]
        ],
        [
            "name" => "INSERTION PROFESSIONNEELLE:",
            "items" => [
                "Insertion de plus de 50 femmes et jeunes filles avec le partenariat de l’emploi jeune",
                "Tontine Bloom : 228 participantes.",
                "37 millions FCFA d’investissement.",
            ]
        ],
    ];
@endphp

<section class="py-14 bg-white">
    <div class="px-2 lg:w-3/5 md:mx-auto grid grid-cols-1 gap-y-10">
        <h1 class="text-3xl md:text-5xl font-bold my-5">Autonomisation des femmes</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-10 lg:gap-y-0 lg:gap-x-10">
            <img src="/img/membre.webp" alt="" class="w-full max-h-96 lg:col-span-2">
            <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-y-5">
                @foreach ($collections as $collection)
                    <div class="grid grid-cols-1 gap-y-2">
                        <h3 class="font-semibold">{{$collection['name']}}</h3>
                        <ul class="list-disc ml-14 grid grid-cols-1 gap-y-2">
                            @foreach ($collection['items'] as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>