<div class="px-5 padding relative">
    <div class="bg-cover max-h-min">
        <img src="/storage/{{$item->img}}" alt="logo" class="w-full h-96">
    </div>
    <div class="{{$color}} padding-animate absolute left-8 right-8 text-white">
        <h3 class="font-bold lg:text-2xl text-center py-3">{{$item->title}}</h3>
        <p class="text-xs lg:text-base text-center">
            {{$item->name}}
        </p>
    </div>
</div>