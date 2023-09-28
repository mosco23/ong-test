<section class="grid grid-cols-1 md:grid-cols-3 grid-flow-row-dense bg-white p-2 justify-center items-center">
    <div class="hidden md:block"></div>
    <div class="grid grid-cols-1 md:flex space-x-20">
        <div class="">
            <img src="/img/dom-2.webp" alt="dom-2" class="h-64 md:h-52 w-full">
            <div class="bg-white p-5 mx-8 -translate-y-6 flex flex-col space-y-3">
                <div>
                    <h1 class="text-lg font-bold">LA PREMIERE DAME REÇOIT LA FONDATRICE DE L’ONG BLOOM</h1>
                    <p class="text-slate-400 text-sm">
                        Mme Danielle Lidégoué Fondatrice de l’ONG BLOOM été reçue en audience hier 
                        mardi par la Première Dame de la
                    </p>
                </div>
                @include('items.like-by')
            </div>
        </div>
        <div class="h-60 w-full grid grid-cols-1  py-10 divide-y divide-slate-600">
            <h2 class="text-xl font-bold w-full">CAMPAGNE STOP VBG</h2>
            @include('items.like-by')
        </div>
    </div>
</section>