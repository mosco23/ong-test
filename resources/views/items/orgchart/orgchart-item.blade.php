<div class="rounded-lg bg-blue-700 w-56 p-2 h-40">
    <div class="flex space-x-3">
        <div class="p-1 w-20 h-20">
            <img src="{{asset('storage/'.$org->img)}}" alt="photo {{$org->name}}"
                class="rounded-full w-fit h-fit">
        </div>
        <div class="text-sm text-white font-bold">
            {{$org->title}}
        </div>
    </div>
    <div class="text-white text-center mt-2">
        {{$org->name}}
    </div>
</div>