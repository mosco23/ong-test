@php
    $group_prog_activity = App\Models\GroupProgActivity::all()->reverse();
@endphp

<section class="py-12 bg-white">
    <div class="mb-5 md:w-2/3 mx-2 md:mx-auto grid grid-cols-1 gap-y-3">
        <h1 class="text-lg font-semibold">Nos activités sont regroupées autour de 3 grands axes, à savoir :</h1>
        <ul class="list-decimal">
            <li>Des études thématiques ;</li>
            <li>Des campagnes de sensibilisation et/ou de vaccination;</li>
            <li>Des dons.</li>
        </ul>
    </div>
    <div class="grid grid-cols-1">
        <div class="hidden md:block">
            @include('items.activities.desktop-prog-activities')
        </div>
        <div class="block md:hidden mx-2">
            @include('items.activities.mobile-prog-activities')
        </div>
    </div>
</section>