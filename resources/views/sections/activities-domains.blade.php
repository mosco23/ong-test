@php
    $icon = "heroicon-s-arrow-down-circle"
@endphp
<section class="bg-white py-14">
    <div class="grid grid-cols-1 md:grid md:grid-cols-3 px-2 lg:grid-cols-4 gap-3 lg:w-4/5 lg:mx-auto">
        @foreach (App\Models\Domain::all() as $domain)
            <div class="flex items-center space-x-2">
                <div class="flex-none w-6 h-6 max-w-6 max-h-6 rounded-full p-1 text-blue-600">
                    {{-- {{ $icon }} --}}
                    <x-filament::icon
                        :icon="$icon"
                    />
                </div>
                <span class="text-wrap">{{$domain->name}}</span>
            </div>
        @endforeach
        <div>Etc.</div>
    </div>
</section>