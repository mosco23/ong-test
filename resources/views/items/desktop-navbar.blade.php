<ul class="h-full items-center justify-evenly
    font-medium rounded-lg"
    :class="window.innerWidth < 945 ? 'hidden' : 'flex'"
    >
    @foreach ($navitems as $navitem)
        <li class=" relative group/item" x-data="{open: false}">
            @php
                $activated = false;
                if(request()->segment(1) ==$navitem->link || $navitem->items->where('link', request()->segment(1))->isNotEmpty()){
                    $activated = true;
                }
            @endphp
            <a href="{{$navitem->link}}" class="py-7 pl-3 pr-4 font-bold capitalize
                 flex items-center space-x-2
                 {{$activated ? 'text-pink-500' : 'group-hover/item:text-pink-600'}}" 
                 :class="fontSize()"
                 aria-current="page">
                <span>{{$navitem->name}}</span>
                @if ($navitem->items->isNotEmpty())
                    <span>@svg('m-chevron-down', 'w-5 h-5')</span>
                @endif
            </a>
            @if ($navitem->items->isNotEmpty())
                <div class="absolute top-[80%] min-w-max hidden group-hover/item:grid grid-cols-1 group-hover/item:transition duration-300 divide-y-2 bg-white text-slate-600 font-semibold uppercase"
                    x-transition.duration.500ms>
                    @foreach ($navitem->items as $sub)
                        @php
                            $activated = false;
                            if(request()->segment(1) ==$sub->link){
                                $activated = true;
                            }
                        @endphp
                        <a href="/{{$sub->link}}" class="h-fit p-3 w-full hover:text-white hover:bg-pink-600 {{ !$activated ? 'text-slate-600' : 'text-white bg-pink-600'}}">{{$sub->name}}</a>
                    @endforeach
                </div>
            @endif
        </li>
    @endforeach
</ul>