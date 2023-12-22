@php
    $icon = "heroicon-s-arrow-down-on-square-stack";
    $activities = App\Models\SecondaryActivity::all();
@endphp
<section class="bg-white py-14">
    <h1 class="text-center font-semibold">{{$activities->count()}} Activités secondaires </h1>
    <div class="grid grid-cols-1 md:grid md:grid-cols-3 px-2 gap-3 lg:w-4/5 lg:mx-auto">
        @foreach ($activities as $activity)
            <div class="flex items-center space-x-2 shadow capitalize p-2">
                <div class="flex-none w-8 h-8 rounded-full p-1 text-blue-600">
                    @svg($icon, 'w-full h-full')
                </div>
                <span class="text-wrap">{{$activity->name}}</span>
            </div>
        @endforeach
    </div>
</section>
