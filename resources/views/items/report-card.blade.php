<div class="p-2 text-justify border border-slate-300 wow swing relative">
    <div class="w-max p-2 rounded-r-full absolute top-0 left-0 text-white font-bold bg-blue-950">
        {{ $key + 1}}
    </div>
    <div class="ml-4 flex flex-col justify-between space-y-3 h-full text-justify ">
        <div class="border-b-4 border-blue-600 py-3 text-center font-semibold">{{$report->getDate()}}</div>
        <h3 class="text-slate-600 font-semibold text-xl">{{$report->name}}</h3>
        <p class="text-justify">
            {!! $report->description !!}
        </p>
        <div class="flex justify-end pr-5">
            @include('items.pdf-viewer-modal', ['pdf' => $report->url])
        </div>
    </div>
</div>