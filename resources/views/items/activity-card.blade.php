@php
    $timeFormatted = '';
    if ($activity->start_at and $activity->end_at) {
        $timeFormatted = $activity->getDate()." De ".$activity->getTime($activity->start_at)." &agrave; ".$activity->getTime($activity->end_at);
    }else if($activity->start_at and !$activity->end_at){
        $timeFormatted = $activity->getDate()." &agrave; ".$activity->getTime($activity->start_at);
    }else{
        $timeFormatted = $activity->getDate();
    }
@endphp

<div class="grid grid-cols-1 gap-y-3"   x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
    <div>
        <span class="p-2 border-b-2 border-r-2 border-green-600 text-slate-600 font-semibold rounded-r-xl">
           {!! $timeFormatted !!}
        </span>
    </div>
    <div class="flex flex-col justify-between">
        <div class="text-slate-600 text-justify">
            {{ $activity->name }}
        </div>
        <div class="p-5 h-max group/img relative">
            <div class="relative h-72">
                @foreach ($activity->images as $key => $img)
                    {{-- @php
                        $img->registerMediaConversions();
                    @endphp --}}
                    {{-- @dd($img->getImageResized('sm')) --}}
                    <img src="{{ $img->getImageResized('sm') }}" alt=""
                        class="absolute shadow w-96 h-64 last:transform last:-rotate-6 wow wobble"
                        data-wow-delay="{{$key}}s"
                        data-wow-duration="2s"
                        >
                @endforeach
            </div>
            @include('items.modal', ['images' => $activity->images ])
            {{-- <div class="absolute left-1/4 right-1/4 z-20 h-2/3">
            </div> --}}
            {{-- <div class="relative h-96">
                @foreach (["/img/fondatrice.webp", "/img/scolarisation.webp", "/img/scolarisation-2.webp"] as $key => $img)
                    <img src="{{$img}}" alt=""
                        class="absolute right-{{$key * 8}} top-{{$key * 2}} bottom-0 shadow w-96 h-full">
                @endforeach
            </div> --}}
            {{-- @foreach ($activity->images as $image)
                <img src="{{ asset('storage/'.$image->url )}}" alt="">
            @endforeach --}}
        </div>
    </div>
</div>