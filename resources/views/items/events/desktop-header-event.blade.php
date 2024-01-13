<div class="hidden md:block wow fadeIn overflow-hidden font-bold" :class=" atTop ? 'bg-white text-slate-800': 'bg-blue-950 text-white' "
    x-data="{
        initTexts() {
            this.index = 0,
            setInterval(() => {
                this.nextText();
            }, 15000); // 15000 milliseconds = 15 seconds
        }
    }"
    x-init="initTexts()">
    @foreach ($my_events as $key => $value)
        <div class="py-2 min-w-max" :class="{{$key}} == index ?'mobile-scrolling-text' : 'hidden' ">
            <p class="min-w-max">{{$value}}</p>
        </div>
    @endforeach
</div>