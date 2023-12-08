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
            @php
                $activated = false;
                if(request()->segment(1) ==$navitem->link || $navitem->items->where('link', request()->segment(1))->isNotEmpty()){
                    $activated = true;
                }
            @endphp
            <div class="flex justify-between items-center cursor-pointer p-1" 
                x-transition:enter.duration.500ms
                x-transition:leave.duration.400ms>
                @if ($navitem->link == '#')
                    <div class="{{$activated ? 'text-pink-500' : 'hover:text-pink-600'}} w-full h-full p-3">
                        {{$navitem->name}}
                    </div>
                @else
                    <div class="p-3">
                        <a href="/{{$navitem->link}}" class="p-3 hover:text-white hover:bg-pink-600 min-w-max {{ !($activated && $navitem->items->isEmpty()) ? 'text-slate-600' : 'text-white bg-pink-600'}}">{{$navitem->name}}</a>
                    </div>
                @endif
                @if ($navitem->items->isNotEmpty())
                    <div class="border-l p-3" @click="setIndex({{$navitem->id}})">
                        <span x-show="!(index === {{$navitem->id}})">
                            @svg('m-plus')
                        </span>
                        <span x-show="(index === {{$navitem->id}})">
                            @svg('m-minus')</span>
                    </div>
                @endif
            </div>
            <div class="grid grid-cols-1 divide-y" x-show="index === {{$navitem->id}}">
                @foreach ($navitem->items as $sub)
                    @php
                        $activated = false;
                        if(request()->segment(1) ==$sub->link){
                            $activated = true;
                        }
                    @endphp
                    <a href="/{{$sub->link}}" class="h-fit w-full p-3 first:border-t hover:text-white hover:bg-pink-600 min-w-max {{ !$activated ? 'text-slate-600' : 'text-white bg-pink-600'}}">{{$sub->name}}</a>
                @endforeach
            </div>
        </div>
    @endforeach
</div>