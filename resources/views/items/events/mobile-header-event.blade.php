<div class="block md:hidden wow fadeIn overflow-hidden font-bold" :class=" atTop ? 'bg-white text-slate-800': 'bg-blue-950 text-white' "
    x-data="{
        initTexts() {
            this.index = 0,
            setInterval(() => {
                this.nextText();
            }, 20000); // 20000 milliseconds = 20 seconds
        }
    }"
    x-init="initTexts()">
    @foreach ($my_events as $key => $value)
        <div class="py-2 min-w-max" :class="{{$key}} == index ?'mobile-scrolling-text' : 'hidden' ">
            <p class="min-w-max">{{$value}}</p>
        </div>
    @endforeach
</div>