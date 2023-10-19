@php
    $img_list = ['dom-2.webp', 'membre.webp', 'scolarisation.webp', 'vice_president.webp'];
@endphp
<section class="bg-white py-14">
    <div class="mx-2 md:w-4/5 lg:w-3/4 md:mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 py-10 md:gap-x-5">
            <div class="font-bold py-4 md:py-0">
                <span class="text-red-600">02 ANS D'EXPÉRIENCE</span>
                <h1 class="text-5xl lg:text-7xl font-bold py-3 text-wrap">Présentation de l’OING ASE2D</h1>
            </div>
            <div class="h-64">
                @include('items.slider-2', ['images' => $img_list])
            </div>
        </div>
        <p class="text-xl">
            BLOOM est un mot anglais qui signifie « floraison ». BLOOM représente une fleur. Le logo est une fleur
             avec des pétales détachées dont une qui s’élève toute seule vers le haut. BLOOM, pour dire que la femme est une fleur qui rajeunie, 
             qui renaît, qui éclot, qui s’épanouit. A travers L’ONG BLOOM, nous voulons dire à la femme qu’il y a encore de l’espoir pour elle. <br /> <br>
             En dépit des coups de la vie, elle peut encore refleurir, s’épanouir, se relever, et garder espoir. L’ONG BLOOM est apolitique et 
             aconfessionnelle et dirigée par Madame Danielle Lidégoué, épouse Cissé, une fervente militante 
             pour la défense des droits des femmes, leur autonomisation et de la scolarisation de la jeune fille.
        </p>
    </div>
</section>