<div class="grid grid-cols-2 gap-x-2 rounded-lg bg-blue-700 w-80 p-2 h-40">
    <div class="h-[145px] w-[145px]">
        <img src="{{asset('storage/'.$org->img)}}" alt="photo {{$org->name}}"
            class="rounded w-full h-full">
    </div>
    <div class="grid grid-cols-1">
        <div class="text-sm text-white font-bold">
            {{$org->title}}
        </div>
        <div class="text-white text-lg">
            {{$org->name}}
        </div>
    </div>
</div>