<section class="py-14 bg-white">
    <div>
        <h1 class="md:w-1/2 mx-2 md:mx-auto underline decoration-1 decoration-blue-600 decoration-double text-lg md:text-2xl">Nos TDRs</h1>
        <div class="grid grid-cols-1 gap-y-5 m-5 ">
            @foreach (App\Models\TDR::all() as $tdr)
                <div class="shadow p-2">
                    <div class="text-xl font-bold">{{$tdr->title}}</div>
                    <div>{{$tdr->description}}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>