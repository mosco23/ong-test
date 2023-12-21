{{-- <section class="bg-white py-14">
    <div class="mx-2 md:w-4/5 lg:w-3/4 md:mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 py-10 md:gap-x-5">
            <div class="font-bold py-4 md:py-0">
                <span class="text-red-600">{{$sect['subtitle']}}</span>
                <h1 class="text-5xl lg:text-7xl font-bold py-3 text-wrap">{{$sect['title']}}</h1>
            </div>
            <div class="h-max">
                <img src="{{asset('storage/'.$sect['img'])}}" alt="photo {{$sect['title']}}"
                    class="w-full h-full">
            </div>
        </div>
        <p class="text-xl text-justify">
            {!! $sect['description'] !!}
        </p>
    </div>
</section> --}}

<section class="py-14 bg-white">
    <div class="font-bold px-2 py-4 md:py-0 lg:hidden">
        <span class="text-red-600">{{$sect['subtitle']}}</span>
        <h1 class="text-5xl lg:text-7xl font-bold py-3 text-wrap">{{$sect['title']}}</h1>
    </div>
    <div class="grid grid-cols-1 gap-3 lg:gap-0 md:block lg:w-3/4 mx-5 lg:mx-auto ">
        <img src="{{asset('storage/'.$sect['img'])}}" alt="{{$sect['title']}}" 
            class="shadow w-fit md:w-64 lg:w-auto h-fit lg:h-[600px] md:float-right md:mx-5" />
        <div class="font-bold py-4 md:py-0 hidden lg:block">
            <span class="text-red-600">{{$sect['subtitle']}}</span>
            <h1 class="text-5xl lg:text-7xl font-bold py-3 text-wrap">{{$sect['title']}}</h1>
        </div>
        <div class="text-justify">
            {!! $sect['description'] !!}
        </div>
    </div>
</section>