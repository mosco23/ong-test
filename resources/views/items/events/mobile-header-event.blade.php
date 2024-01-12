@php
    $activities = \App\Models\Activity::all();
    $my_events = [];
    foreach ($activities as $activity) {
        array_push($my_events, $activity->toText());
    }

    // dd($my_events); 
@endphp

<div class="block md:hidden wow fadeIn overflow-hidden font-bold" :class=" atTop ? 'bg-white text-slate-800': 'bg-blue-950 text-white' "
    x-data="{
        index: -1,
        initTexts() {
            this.index = 0,
            setInterval(() => {
                this.nextText();
            }, 15000); // 15000 milliseconds = 15 seconds
        },
        nextText() {
            this.index = (this.index + 1) % {{count($my_events)}};
        }
    }"
    x-init="initTexts()">
    @foreach ($my_events as $key => $value)
        <div class="py-2 min-w-max" :class="{{$key}} == index ?'mobile-scrolling-text' : 'hidden' ">
            <p class="min-w-max">{{$value}}</p>
            {{-- <p x-text="text" class="min-w-max"></p> --}}
        </div>
    @endforeach
    {{-- <template x-for="(text, i) in events" :key="i">
    </template> --}}
</div>