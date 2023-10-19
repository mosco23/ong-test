<div 
    x-data="{hover: false}" 
    class="px-1" 
    :class="!hover || 'shadow-lg' "
    @mouseover="hover = true"
    @mouseout="hover = false">
    <div>
        <img src="{{$img}}" alt="logo" class="w-full h-72">
    </div>
    <div class="p-4 hover:bg-li-500 mt-4"
        :class="hover ? 'bg-slate-200' : 'bg-slate-100'">
        <h3 class="text-slate-900 font-bold text-2xl text-center py-3">Mission Title</h3>
        <p class="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Non soluta nostrum architecto, quisquam ipsam dicta suscipit numquam sit 
            nesciunt veritatis. Non culpa animi voluptas alias aut provident veniam vero cum.
        </p>
    </div>
</div>