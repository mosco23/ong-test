<footer class="px-6 py-16 bg-blue-950 grid grid-cols-1 gap-y-14">
    <div class="lg:w-2/3 mx-auto grid grid-cols-1 gap-y-20 md:gap-x-5 md:grid-rows-1 divide-y divide-neutral-400">
        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-x-5">
            <div class="my-3 md:my-6">
                <div class="flex space-x-2">
                    <div>
                        <div class="text-red-600 w-6 h-6">@include('svg.phone')</div>
                    </div>
                    <div>
                        <p class="text-white font-bold text-lg">Appelez-nous</p>
                        <p class="text-slate-400">+225 07 07 64 24 85</p>
                        <p class="text-slate-400">+225 07 08 07 48 49</p>
                        <p class="text-slate-400">+225 07 07 48 92 82</p>
                    </div>
                </div>
            </div>
            <div class="my-3 md:my-6">
                <div class="flex space-x-2">
                    <div>
                        @include('svg.filament', ['icon' => "heroicon-s-envelope"])
                        {{-- @include('svg.email') --}}
                    </div>
                    <div>
                        <p class="text-white font-bold text-lg">Ecrivez-nous</p>
                        <p class="text-slate-400">contacts@oingase2d.org</p>
                    </div>
                </div>
            </div>
            <div class="my-3 md:my-6">
                <div class="flex space-x-2">
                    <div>
                        @include('svg.facebook')
                    </div>
                    <div>
                        <p class="text-white font-bold text-lg">Rejoignez-nous sur Facebook</p>
                        <p class="text-slate-400"><a href="#">https://zetrey.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div>
           <div class="grid grid-cols-1 md:grid-cols-3 gap-7 mt-10">
                <div class="grid grid-cols-1 md:grid-rows-1 gap-4">
                    <h1 class="text-white font-bold text-2xl">{{ env('APP_NAME')}}</h1>
                    <div class="">
                        <img src="/img/logo.png" alt="logo ase2d" class="w-64 h-64">
                    </div>
                </div>
                <x-navbar-bottom />
                <form method="POST" action="{{route('post-newsletter')}}" class="flex flex-col space-y-3">
                    @csrf
                    <h1 class="text-white font-bold text-2xl">Obtenir des mises &aacute; jour</h1>
                    <p class="text-white">Tenez-vous au courant des dernières nouvelles de notre organisation caritative.</p>
                    <div class="py-4 px-2 border border-slate-200 max-w-full grid grid-cols-10 gap-x-3 md:flex md:items-center md:space-x-1 md:max-w-max">
                        <div class="col-span-9 md:col-span-1">
                            <input type="email" name="email"  placeholder="Entrez votre adresse email"
                            class="bg-transparent w-full text-white" required>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-200">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <button class="p-4 font-bold bg-pink-500 text-white">Souscrire maintenant</button>
                    </div>
                    
                </form>
           </div>
        </div>
    </div>
    <p class="text-center font-bold text-white">&copy; 2023 {{ env('APP_URL_WITHOUT_HTTP')}}</p>
</footer>