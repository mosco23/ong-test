<div class="mx-3 md:mx-0 scaler w-full aspect-video">
    {{-- <div class="w-full h-96 scaler-child bg-contain" style="background-image: url('{{$img->getImageResized('md')}}')"></div> --}}
    <div class="w-full scaler-child">
        <img src="/storage/{{$img->url}}" alt="" class="object-cover w-full">
    </div>
    {{-- <div class="w-full h-96 scaler-child" :style="`background-image: url('storage/${img}')`"></div> --}}
</div>