@foreach ($group_prog_activity as $group)
    <div class="shadow-lg wow slideInLeft mb-5" 
        data-wow-duration="2s" 
        data-wow-delay="0.5s">
        <h2 class="text-blue-600 text-xl font-bold text-center capitalize mb-5">
            {{$group->title}}
        </h2>
        @foreach ($group->progActivities as $key => $activity)
            <div>
                <div class="w-max p-5 rounded-t-full text-white bg-black">
                    {{$key + 1}}
                </div>
                <div class="border-collapse border border-slate-500 mb-5">
                    <div>
                        <div class="border-b border-slate-600 font-bold p-2">THÉMATIQUES</div>
                        <div class="border-b border-slate-600 p-2">{!! $activity->name !!}</div>
                    </div>
                    <div>
                        <div class="border-b border-slate-600 font-bold p-2">DURÉE DE RÉALISATION</div>
                        <div class="border-b border-slate-600 p-2">{{ $activity->completion_time }}</div>
                    </div>
                    <div>
                        <div class="border-b border-slate-600 font-bold p-2">PÉDRIODE D’EXECUTION</div>
                        <div class="border-b border-slate-600 p-2">{{ $activity->due_date }}</div>
                    </div>
                    <div>
                        <div class="border-b border-slate-600 font-bold p-2">LIEU DE L’ETUDE</div>
                        <div class="p-2">{!! $activity->place !!}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach