<div class="flex flex-col space-y-3">
    <h1 class="text-white font-bold text-2xl">Liens Rapides</h1>
    <ul class="list-disc grid grid-cols-1 gap-y-3 text-white font-bold text-sm">
        @foreach ($navitems as $item)
            <li><a href="{{$item->link}}">{{$item->name}}</a></li>
        @endforeach
        {{-- <li><a href="#">Notre &Eacute;quipe</a></li>
        <li><a href="#">M&eacute;diateque</a></li>
        <li><a href="#">Faire un don</a></li>
        <li><a href="#">Ils nous font confiance</a></li> --}}
    </ul>
</div>