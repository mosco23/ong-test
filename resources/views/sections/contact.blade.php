<section class="py-14 bg-white">
    <div class="lg:w-1/2 md:mx-5 lg:mx-auto grid grid-cols-1 mx-2 md:grid-cols-3 gap-y-5 md:gap-y-0 md:gap-x-5 md:h-72">
        <div class="anim-border-x anim-border-y flex flex-col space-y-4 items-center justify-center text-blue-950 px-5 py-5">
            <div>
                <div class="text-red-800">@svg('m-map-pin', 'w-10 h-10')</div>
            </div>
            <h2 class="text-2xl font-bold text-center">Notre adresse</h2>
            <p class="text-slate-600 text-center">{{\App\Models\Site::first()->address}}</p>
        </div>
        <div class="anim-border-x anim-border-y flex flex-col space-y-4 items-center justify-center px-5 py-3">
            <div>
                <div class="text-green-800">@svg('m-phone', 'w-10 h-10')</div>
            </div>
            <h2 class="text-2xl font-bold text-center text-blue-950">Téléphone</h2>
            <ul class="text-slate-600 text-center">
                @foreach (\App\Models\SiteContact::all() as $contact)
                <li>{{$contact->contact}}</li>
                @endforeach
            </ul>
        </div>
        <div class="anim-border-x anim-border-y flex flex-col space-y-4 items-center justify-center px-5 py-3">
            <div class="flex items-center justify-center p-3">
                <span class="text-center text-rose-500">@svg('m-wifi', 'w-10 h-10')</span>
            </div>
            <h2 class="text-2xl font-bold text-center text-blue-950">Site internet</h2>
            <ul class="text-slate-600 text-center">
                <li>{{\App\Models\Site::first()->email}}</li>
            </ul>
        </div>
    </div>

    <!--Contact form start-->
    <div class="bg-white">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <p class="mb-8 font-bold text-center text-white sm:text-xl bg-red-600 px-3 py-1 max-w-max mx-auto">Contactez-nous</p>
            <h2 class="mb-8 text-4xl md:text-6xl tracking-tight font-extrabold text-center text-gray-900">Vous avez des questions ?</h2>
            <form  method="POST" action="{{route('post-contact')}}" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 md:gap-y-0 md:gap-x-5">
                    <div>
                        <input value="{{old('name') }}" type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="nom et prenom(s)" required>
                        @error('name')
                            <div class="text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input value="{{old('email') }}" name="email" type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="konanwilfrid12@gmail.com" required>
                        @error('email')
                            <div class="text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <input value="{{ old('subject') }}" type="text" name="subject" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="au sujet de ..." required>
                    @error('subject')
                        <div class="text-xs text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <textarea name="message" id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="votre message..." required>{{old('message')}}</textarea>
                    @error('message')
                        <div class="text-xs text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center bg-pink-500 text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Envoyer le message</button>
            </form>
        </div>
    </div>
    <!--Contact form end-->


    <!--map start-->


    <!--map end-->


</section>