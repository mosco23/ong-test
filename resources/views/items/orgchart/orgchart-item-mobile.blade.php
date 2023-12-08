<div class="grid grid-cols-2 gap-x-2 rounded-lg bg-blue-700 w-full p-2 h-full">
    <div>
        <img src="{{asset('storage/'.$org->img)}}" alt="photo {{$org->name}}"
            class="rounded" style="width: 150px">
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