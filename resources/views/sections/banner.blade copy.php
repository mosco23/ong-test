@php
    $events = \App\Models\EventPreview::where('active', true)->get();
@endphp
<section class="h-full relative">
   <img src="{{asset($sect['img'] ? 'storage/'.$sect['img'] : '/img/principale.jpg')}}" alt="" 
       class="w-full h-full z-0">
       <div class="w-full h-full absolute top-2/3 left-5 bottom-10">
        @foreach ($events as $key => $event)
            @include('items.events.event-card')
        @endforeach
       </div>
</section>