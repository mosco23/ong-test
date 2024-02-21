@php
    $user = App\Models\OrgChart::where('block', 'presidence')
                                ->where('pid', 0)
                                ->first()->user;
    $profile = $user?->profile;
    
@endphp
{{-- @dd($user) --}}
<section class="py-14 bg-white">
    <h1 class="text-center text-lg px-3">Pour faire un don veillez contacter le Pr&eacute;sident : </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-3 m-3 md:mx-auto md:my-5 w-full md:w-3/4 lg:w-1/2">
        @if ($profile)
            <div>
                <h3 class="p-3 text-blue-500 shadow">Contacts</h3>
                <ul class="list-disc px-5">
                    @foreach ($profile->profileContacts as $contact)
                        <li>{{$contact->contact}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="p-3 text-blue-500 shadow">E-mails</h3>
                    <ul class="list-disc px-5">
                        @foreach ($profile->profileEmails as $email)
                            <li><a href="mailto:{{$email->email}}">{{$email->email}}</a></li>
                        @endforeach

                    </ul>
            </div>
        @endif
    </div>
</section>