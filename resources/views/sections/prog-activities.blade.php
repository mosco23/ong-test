@php
    $group_prog_activity = App\Models\GroupProgActivity::all()->reverse();
@endphp

<section class="py-12 bg-white">
    <div class="mb-5 md:w-2/3 mx-auto grid grid-cols-1 gap-y-3">
        <h1 class="text-lg font-semibold">Nos activités sont regroupées autour de 3 grands axes, à savoir :</h1>
        <ul class="list-decimal">
            <li>Des études thématiques ;</li>
            <li>Des campagnes de sensibilisation et/ou de vaccination ;</li>
            <li>Des dons.</li>
        </ul>
    </div>
    <div class="grid grid-cols-1">
        @foreach ($group_prog_activity as $group)
            <div class="mx-2 md:w-3/4 md:mx-auto wow slideInLeft mb-5" 
                data-wow-duration="2s" 
                data-wow-delay="0.5s">
                <h2 class="text-blue-600 text-xl md:text-3xl lg:text-4xl font-bold text-center capitalize mb-5">
                    {{$group->title}}
                </h2>
                <table class="border-collapse border border-slate-500">
                    <thead>
                        <tr class="bg-slate-300 text-slate-950 text-ms font-semibold">
                            <th class="border border-slate-600">N°</th>
                            <th class="border border-slate-600">THÉMATIQUES</th>
                            <th class="border border-slate-600">DURÉE DE RÉALISATION</th>
                            <th class="border border-slate-600">PÉDRIODE D’EXECUTION</th>
                        </tr>
                    </thead>
                    <tbody class="md:text-justify text-sm md:text-base">
                        @foreach ($group->progActivities as $key => $activity)
                            <tr>
                                <td class="border border-slate-600 p-2">{{ $key + 1 }}</td>
                                <td class="border border-slate-600 p-2">{!! $activity->name !!}</td>
                                <td class="border border-slate-600 p-2 text-center">{{ $activity->completion_time }}</td>
                                <td class="border border-slate-600 p-2">{{ $activity->due_date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
</section>