<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    {{-- <script src="/js/orgchart.default.js"></script> --}}
    
    <title>{{env('APP_NAME')}}</title>
</head>
<body x-data="{ atTop: false }">
    @include('layouts.header')
    <main class="grid grid-cols-1 bg-slate-200 ">
        @yield('sidebar')
        @yield('contenu')
    </main>
    <!-- Importation CDN wow.min.js -->
	{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" ></script> --}}
    <script src="/js/wow.min.js"></script>
    <script src="/js/alpine_data.js"></script>
    {{-- <script src="/js/orgchart.js"></script> --}}
    <script>
        new WOW().init();
    </script>
</body>
@include('layouts.footer')
</html>