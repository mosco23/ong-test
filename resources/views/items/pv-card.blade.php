<div class="ml-4 flex flex-col justify-between space-y-3 h-full text-justify ">
    <div class="border-b-4 border-blue-600 py-3 text-center font-semibold">{{$pv->getDate()}}</div>
    <h3 class="text-slate-600 font-semibold text-xl">{{$pv->name}}</h3>
    <div class="text-justify grid grid-cols-1 gap-y-2">
        <ul class="list-decimal grid grid-cols-1 gap-y-2">
            @foreach ($pv->agendas as $agenda)
                <li>{{$agenda->name}}</li>
            @endforeach
        </ul>
        <p>Divers</p>
    </div>
    <div class="flex justify-end pr-5">
        @include('items.pdf-viewer-modal', ['pdf' => $pv->url])
    </div>
</div>
