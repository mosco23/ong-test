@php
    $agendas = \App\Models\Agenda::where('is_active', true)->get();
    $hasDescription = $agendas->where('description', '!=', null)->isNotEmpty();
@endphp

<section class="py-14 bg-white">
    <div class="m-5 md:w-3/4 md:mx-auto rounded-lg">
        <table class="text-sm shadow hidden lg:block">
            <thead>
                <tr class="border boder-blue-600">
                    <th class="border boder-blue-600 p-2">Theme</th>
                    @if($hasDescription)
                    <th class="border boder-blue-600 p-2">Description</th>
                    @endif
                    <th class="border boder-blue-600 p-2">Date de debut</th>
                    <th class="border boder-blue-600 p-2">Date de fin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agendas as $agenda)
                    <tr class="border boder-blue-600">
                        <td class="border boder-blue-600 p-2">{{$agenda->name}}</td>
                        @if($hasDescription)
                        <td class="border boder-blue-600 p-2">{{$agenda->description}}</td>
                        @endif
                        <td class="border boder-blue-600 p-2">{{\Carbon\Carbon::parse($agenda->begin_date)->locale('fr')->format('d F Y')}}</td>
                        <td class="border boder-blue-600 p-2">{{\Carbon\Carbon::parse($agenda->end_date)->locale('fr')->format('d F Y')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="grid grid-cols-1 gap-3">
            @foreach ($agendas as $agenda)
                <div class="text-sm shadow lg:hidden p-2 grid grid-cols-1 divide-y-2">
                    <div>
                        <div class="text-blue-600 text-lg md:text-2xl">Theme</div>
                        <div>{{$agenda->name}}</div>
                        <div>Description</div>
                        <div>{{$agenda->description}}</div>
                    </div>
                    <div class="boder grid grid-cols-2 gap-x-5">
                        <div>Debut : {{\Carbon\Carbon::parse($agenda->begin_date)->format('d F Y')}}</div>
                        <div>Fin : {{\Carbon\Carbon::parse($agenda->end_date)->format('d F Y')}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>