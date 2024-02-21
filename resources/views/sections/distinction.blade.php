@php
    $result = array();
    foreach ($sect['items'] as $item) {
        $result[$item['title']][] = $item;
    }
@endphp

<section class="bg-white">
    <div class="flex flex-wrap flex-col-1 justify-center md:space-x-3 md:flex-col-3 w-full lg:w-2/3 mx-auto h-auto md:h-full p-2">
        @foreach ($result as $title => $items)
            <div class="{{ $loop->first ? 'mt-5' : 'my-5'}}">
                <div class="border border-slate-200 p-2 flex items-center justify-between">
                    @svg('o-arrow-down')
                    <h3 class="text-center">{{$title}}</h3>
                    @svg('o-arrow-down')
                </div>
                <div class="mx-auto w-2 h-10 bg-black"></div>
                <div class="mb-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                    @foreach ($items as $item)
                        <div class="border border-slate-200 grid grid-cols-1 w-96">
                            <div class="p-1">
                                <img src={{"/storage/". $item['image'] }} alt="" class="w-full h-96">
                                {{-- <img src={{"/storage/". $item['image'] }} alt="" class="w-full max-h-80"> --}}
                            </div>
                            {{-- <p class="p-4 text-slate-600">{{$item['title']}}</p> --}}
                            {{-- <p class="p-4 text-slate-400 text-sm">{{$item['description']}}</p> --}}
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>  