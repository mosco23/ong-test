<section class="py-14 bg-white">
    <h1 class="text-4xl lg:text-7xl font-bold text-center my-5">{{$sect['title']}}</h1>
    <div class="grid grid-cols-1 gap-3 lg:gap-0 md:block lg:w-2/3 mx-5 lg:mx-auto ">
        <img src="{{asset('storage/'.$sect['img'])}}" alt="{{$sect['title']}}" 
            class="shadow w-fit md:w-64 lg:w-auto h-fit lg:h-[600px] md:float-right md:mx-5" />
        <div class="text-justify">
            {!! $sect['description'] !!}
        </div>
    </div>
</section>