<div class="hover:shadow-lg px-8 py-12 bg-white grid grid-cols-1 gap-y-5 ">
    <div class="flex items-center justify-center">
        <div class="circular">
            <div class="inner">
                <div class="circle">
                    <div class="bar left border-4" style="border-color: {{$value['color']}}">
                        <div class="progress"></div>
                    </div>
                    <div class="m-5 absolute top-auto left-auto">
                        @svg($value['icon'], 'w-full h-full')
                    </div>
                    <div class="bar right border-4" style="border-color: {{$value['color']}}">
                        <div class="progress"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-5xl font-bold text-slate-600 text-center"
        x-data="clock"
        x-init="max = {{$value['count']}}; init()"
        x-text="counter"></div>
    <p class="text-center text-slate-500">{{$key}}</p>
</div>
