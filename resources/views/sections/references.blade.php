@php
    $categories = \App\Models\ReferenceCategory::all();
@endphp

<section>
    @foreach ($categories as $category)
        <div class="my-10">
            @if ($category->references->count())
                <h1 class="text-center text-3xl text-blue-600 my-3">{{$category->name}}</h1>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-1 gap-y-4 lg:w-1/2 mx-auto p-5">
                    @foreach ($category->references as $reference)
                        <div class="p-1">
                            <div class="bg-contain bg-no-repeat bg-center h-52" style="background-image: url('/storage/{{$reference->logo}}')">
                            </div>
                            <p class="text-balance text-slate-500 mt-2">{{$reference->name}}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
</section>