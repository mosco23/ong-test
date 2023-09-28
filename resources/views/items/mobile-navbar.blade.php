<div class="grid grid-cols-1 divide-y"
    x-data="{
        index:0,
        setIndex(i){
            if(i === this.index){
                this.index = 0;
            }else{
                this.index = i;
            }
        }
    }">
    @foreach ($navitems as $navitem)
        <div class="">
            <div class="flex justify-between items-center cursor-pointer p-3" 
                @click="setIndex({{$navitem->id}})"
                x-transition:enter.duration.500ms
                x-transition:leave.duration.400ms>
                <div>{{$navitem->name}}</div>
                @if ($navitem->items->isNotEmpty())
                    <div class="border-l p-3">
                        <span x-show="!(index === {{$navitem->id}})">
                            @include('svg.plus')
                        </span>
                        <span x-show="(index === {{$navitem->id}})">
                            @include('svg.minus')</span>
                    </div>
                @endif
            </div>
            <div class="grid grid-cols-1 divide-y" x-show="index === {{$navitem->id}}">
                @foreach ($navitem->items as $sub)
                    <a href="/{{$sub->link}}" class="h-fit w-full p-3 text-slate-600 first:border-t hover:text-white hover:bg-pink-600 min-w-max">{{$sub->name}}</a>
                @endforeach
            </div>
        </div>
    @endforeach
</div>