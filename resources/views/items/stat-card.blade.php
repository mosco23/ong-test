<div class="hover:shadow-lg px-8 py-12 bg-white grid grid-cols-1 gap-y-5 ">
    <div class="flex items-center justify-center">
        <div class="circular">
            <div class="inner">
                <div class="circle">
                    <div class="bar left border-4" style="border-color: {{$stat->color}}">
                        <div class="progress"></div>
                    </div>
                    <div class="m-5 absolute top-auto left-auto">
                        @svg($stat->icon, 'w-full h-full')
                    </div>
                    <div class="bar right border-4" style="border-color: {{$stat->color}}">
                        <div class="progress"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <span class="flex items-center justify-center text-slate-600 circle-anim ">
        @include("svg/".$svg)
    </span> --}}
    <div class="text-5xl font-bold text-slate-600 text-center"
        x-data="clock"
        x-init="max = 200; init()"
        x-text="counter"></div>
    <p class="text-center text-slate-500">{{$stat->description }}</p>
</div>


 
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('clock', () => ({
            counter: 0,
            setInterval(() => {
                if(this.counter === {{$stat->count}}){
                    clearInterval;
                }else{
                    this.counter += 1;
                }
            }, 30)
        }))
    })
</script>