@extends("layouts.$template")

    <!-- #### Area Content ###-->
    @section('contenu')
        @foreach($tabSection as $sect)
            @php($var = 'data' . ucfirst($sect['vue']))
            @php($$var = $data[$sect['vue']] ?? [])
            @php($donnees = $sect['items'])
            @include("sections.$sect[vue]", compact($var, 'donnees', 'page'))
        @endforeach
    @endsection