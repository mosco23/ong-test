<section class="bg-white py-14 px-3 md:px-5 grid grid-cols-1 gap-y-11 text-justify">
    <p class="text-center text-2xl text-green-500">LES ACTIVITES DE L'OING ASE2D SONT CENTREES AUTOUR DES 17 ODD !</p>
    <div class="lg:w-2/3 mx-auto grid grid-cols-1 gap-y-3 wow slideInLeft">
        @include('items.section-title-2', ['title' => 'DES OMD AUX ODD' ])
        <p class="md:border-l-8 border-blue-600 md:px-2 shadow-md py-5"> 
            En l’an 2000, les pays du monde entier ont lancé les Objectifs du Millénaire pour le Développement (OMD) qui avaient pour but de réduire la pauvreté et les inégalités dans le monde, 
            en particulier dans les pays en développement. Huit objectifs étaient concernés, avec comme échéance l’année 2015. 
 
            A partir de 2013, les pays membres de l’ONU ont commencé à mener des consultations pour décider de ce qui remplacerait les OMD, afin de capitaliser sur les progrès déjà accomplis et de les moderniser.  
             
            Le 25 septembre 2015, le sommet de l’Assemblée Générale de l’ONU a validé une liste de 17 objectifs dits « Objectifs de Développement Durable (ODD) » représentant la feuille de route pour un monde meilleur d'ici à 2030. 
        </p>
    </div>
    <div class="lg:w-2/3 mx-auto grid grid-cols-1 gap-y-3 wow slideInLeft">
        @include('items.section-title-2', ['title' => 'Que sont les ODD ?' ])
         <p class="md:border-l-8 border-blue-600 md:px-2 shadow-md py-5"> 
            Ce nouveau programme a pour but principal de réduire la pauvreté, de lutter contre les inégalités et de faire face au changement climatique d’ici à 2030. 
 
            Il comprend 17 objectifs et 169 cibles avec une portée beaucoup plus large que les 8 OMD et leurs 21 cibles. Contrairement aux OMD qui étaient centrés principalement sur des thématiques sociales, 
            les ODD couvrent l’ensemble des dimensions du développement durable, à savoir la croissance économique, l’intégration sociale et la protection de l’environnement. 
            Les Etats se sont engagés à les atteindre au cours des 15 prochaines années (2016-2030).  
             
            Une liste d'indicateurs (environ 230) est en cours d'adoption. Chaque pays sera invité par la suite à les adapter en fonction de ses spécificités. 
        </p>
    </div>
    <div class="lg:w-2/3 mx-auto grid grid-cols-1 gap-y-3 wow slideInLeft">
        @include('items.section-title-2', ['title' => 'Qui est concerné par les ODD ?' ])
         <p class="md:border-l-8 border-blue-600 md:px-2 shadow-md py-5"> 
            Si les OMD ciblaient essentiellement les pays en développement, en particulier les plus pauvres, les ODD quant à eux, sont conçus aussi bien pour les pays riches que pour les pays pauvres. 
 
            Les ODD font partie du nouveau programme dénommé « le Programme de développement durable à l’horizon 2030 ». </p>
    </div>
    <div class="lg:w-2/3 mx-auto grid grid-cols-1 gap-y-3 wow slideInLeft">
        @include('items.section-title-2', ['title' => 'Quels sont les ODD ?' ])
        <div class="md:border-l-8 border-blue-600 md:px-2 shadow-md py-5"> 
            <p>Les 17 ODD se présentent comme suit :</p>
            <div class="grid grid-cols-1 gap-y-3 py-5">
                @foreach (App\Models\Odd::all() as $odd)
                <div class="flex items-center space-x-2 w-full">
                    <div class="flex-none h-12 w-12">
                        <img src="/storage/{{$odd->icon}}" alt="">
                    </div>
                    <div class="text-slate-600">
                        <span class="text-slate-900 font-semibold">{{$odd->name}} : </span>
                        {{$odd->description}}
                    </div>
                </div>
            @endforeach
            </div>
            <p>
                Au total, les ODD portent sur une multitude de domaines allant de la protection de la planète à l’édification d’un monde plus pacifique, en passant par la garantie donnée à tous de pouvoir vivre en sécurité et dans la dignité. 
                Ils prennent en compte le climat et l’énergie, la vie saine, la gouvernance, la justice, les infrastructures, les modes de production et de consommation durables, l’environnement, etc. 
            </p>
        </div>
    </div>
    <div class="lg:w-2/3 mx-auto grid grid-cols-1 gap-y-3 wow slideInLeft">
        @include('items.section-title-2', ['title' => "Mise en œuvre des ODD en Côte d'Ivoire" ])
        <p class="md:border-l-8 border-blue-600 md:px-2 shadow-md py-5"> 
            Conformément au décret n°2016 du 26 janvier 2016 portant attributions des membres du Gouvernement, 
            le Ministère de l'Environnement et du Développement Durable « veille à l'intégration des ODD dans l'élaboration et la mise en œuvre de l'ensemble des politiques conduites par le Gouvernement ainsi qu'à leur évaluation environnementale ». 
            Sous la coordination du Ministère du Plan et du Développement, le PND 20162020 a pris en compte l'ensemble des 17 ODD dans ses cinq axes.  
            Pour leur mise en œuvre, le Gouvernement travaille en synergie avec les autres parties prenantes, à savoir le Parlement, le Conseil Economique et Social, les collectivités territoriales, le secteur privé et la société civile. 
            Il bénéficie de l'appui des Partenaires au Développement, notamment des Agences des Nations Unies.  
            L'Institut National de la Statistique (INS), organe central de production du système statistique national et les services statistiques ministériels sont chargés de produire les indicateurs pour le suivi-évaluation des ODD.
        </p>
    </div>
    <div class="lg:w-2/3 mx-auto grid grid-cols-1 gap-y-3 wow slideInLeft">
        @include('items.section-title-2', ['title' => "Feuille de route de mise en œuvre des ODD élaborée par le Ministère de l’Environnement et du Développement Durable" ])
        <div>
            <img src="/img/feuille-de-route.png" alt="feuille de route odd">
            <p class="text-xs font-semibold mt-2">Source : INS, leader des chiffres en Côte d’Ivoire </p>
        </div>
    </div>
</section>