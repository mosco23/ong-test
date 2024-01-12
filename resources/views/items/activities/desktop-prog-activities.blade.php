@foreach ($group_prog_activity as $group)
    <div class="mx-2 lg:w-3/4 lg:mx-auto wow slideInLeft mb-5" 
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
                    <th class="border border-slate-600">LIEU DE L’ETUDE</th>
                </tr>
            </thead>
            <tbody class="md:text-justify text-sm md:text-base">
                @foreach ($group->progActivities as $key => $activity)
                    <tr>
                        <td class="border border-slate-600 p-2">{{ $key + 1 }}</td>
                        <td class="border border-slate-600 p-2">{!! $activity->name !!}</td>
                        <td class="border border-slate-600 p-2 text-center">{{ $activity->completion_time }}</td>
                        <td class="border border-slate-600 p-2">{{ $activity->due_date }}</td>
                        <td class="border border-slate-600 p-2">{!! $activity->place !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endforeach