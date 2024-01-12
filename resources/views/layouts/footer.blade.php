<footer class="px-6 py-16 bg-blue-950 grid grid-cols-1 gap-y-14">
    <div class="lg:w-2/3 mx-auto grid grid-cols-1 gap-y-20 md:gap-x-5 md:grid-rows-1 divide-y divide-neutral-400">
        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-x-5">
            <div class="my-3 md:my-6">
                <div class="flex space-x-2">
                    <div>
                        @svg('m-phone', 'w-5 h-5 text-red-600')
                    </div>
                    <div>
                        <p class="text-white font-bold text-lg">Appelez-nous</p>
                        @foreach (\App\Models\SiteContact::all() as $contact)
                            <p class="text-slate-400">{{$contact->contact}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="my-3 md:my-6">
                <div class="flex space-x-2">
                    <div>
                        @svg('s-envelope', 'w-5 h-5 text-white')
                    </div>
                    <div>
                        <p class="text-white font-bold text-lg">Ecrivez-nous</p>
                        <p class="text-slate-400">{{\App\Models\Site::first()->email}}</p>
                    </div>
                </div>
            </div>
            <div class="my-3 md:my-6">
                @foreach (\App\Models\SocialNetwork::all() as $social)
                    <div class="flex items-center space-x-2">
                        <div>
                            <img src="{{asset('storage/'.$social->logo)}}" 
                                alt="{{\App\Models\Site::first()->first_name}} {{\App\Models\Site::first()->last_name}} {{$social->name}}"
                                class="w-5 h-5">
                        </div>
                        <div>
                            <a href="{{$social->link}}"><p class="text-white">Rejoignez-nous sur <span class="font-bold text-lg">{{$social->name}}</span></p></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
           <div class="grid grid-cols-1 md:grid-cols-3 gap-7 mt-10">
                <div class="grid grid-cols-1 md:grid-rows-1 gap-4">
                    <h1 class="text-white font-bold text-2xl">{{\App\Models\Site::first()->first_name}} {{\App\Models\Site::first()->last_name}}</h1>
                    <div class="">
                        <img src="{{asset('storage/'.\App\Models\Site::first()->logo )}}" alt="logo ase2d" class="w-64 h-64">
                    </div>
                </div>
                <x-navbar-bottom />
                <form method="POST" action="{{route('post-newsletter')}}" class="flex flex-col space-y-3">
                    @csrf
                    <h1 class="text-white font-bold text-2xl">Obtenir des mises &aacute; jour</h1>
                    <p class="text-white">Tenez-vous au courant des dernières nouvelles de notre organisation caritative.</p>
                    <div class="py-4 px-2 border border-slate-200 @error('email') ring-1 ring-red-500 @enderror max-w-full grid grid-cols-10 gap-x-3 md:flex md:items-center md:space-x-1 md:max-w-max">
                        <div class="col-span-9 md:col-span-1">
                            <input type="email" name="email"  placeholder="Entrez votre adresse email"
                            class="bg-transparent w-full text-white"  value="{{ old('email') }}" required>
                        </div>
                        <div>
                            @svg('s-envelope', 'w-5 h-5 text-white')
                        </div>
                    </div>
                    @error('email')
                        <div class="bg-red-600 text-white p-2">{{ $message }}</div>
                    @enderror
                    <div class="">
                        <button class="p-4 font-bold bg-pink-500 text-white">Souscrire maintenant</button>
                    </div>
                    
                </form>
           </div>
        </div>
    </div>
    <p class="text-center font-bold text-white">&copy; 2024 {{\App\Models\Site::first()->first_name}} {{\App\Models\Site::first()->last_name}}</p>
</footer>