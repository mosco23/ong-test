<section class="bg-white">
    <div class="flex flex-wrap flex-col-1 justify-center md:space-x-3 md:flex-col-3 w-full lg:w-2/3 mx-auto h-auto md:h-full p-2">
        @foreach ($sect['items'] as $item)
            <div class="border border-slate-200 my-5 grid grid-cols-1 w-96">
                <div class="p-1">
                    <img src={{"/storage/". $item['image'] }} alt="" class="w-full max-h-80">
                </div>
                <p class="p-4 text-slate-600">{{$item['title']}}</p>
                <p class="p-4 text-slate-400 text-sm">{{$item['description']}}</p>
            </div>
        @endforeach
    </div>
</section>  