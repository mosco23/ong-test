<section>
    <div class="grid grid-cols-1 gap-5 text-white font-bold bg-blue-950 text-center p-5">
        <h1 class="text-4xl ">{{$name}}</h1>
        <div class="flex justify-between space-x-6 max-w-max mx-auto uppercase tracking-widest">
            <div class="text-end hover:text-green-700"><a href="#">HOME</a></div>
            <div class="w-1 h-full bg-white"></div>
            <div class="">{{request()->segment(1)}}</div>
        </div>
    </div>
</section>