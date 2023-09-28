<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="">
        <nav class="bg-white fixed w-full z-20 top-0 left-0 shadow-lg py-3">
            <div class="w-full flex flex-wrap items-center justify-between mx-auto py-4 px-24">
                <a href="#" class="flex items-center">
                    <img src="/img/logo.png" class="h-8 mr-3" alt="Flowbite Logo">
                    <span class="self-center whitespace-nowrap">
                        <span class="text-2xl font-semibold text-green-500">ONG</span>
                        <span class="text-2xl font-semibold text-blue-800">ASE2D</span>
                    </span>
                </a>
                <div class="flex md:order-2">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Faire un don</button>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-slate-600 font-bold capitalize" aria-current="page">Actualit&eacute;</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-slate-600 font-bold capitalize">Qui sommes-nous ?</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-slate-600 font-bold capitalize">Nos Missions</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-slate-600 font-bold capitalize">M&eacute;diateque</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-slate-600 font-bold capitalize">Th&eacute;matiques</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-slate-600 font-bold capitalize">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   <main class="grid grid-cols-1 gap-y-5 bg-slate-200 ">
        @include('sections.first')
        @include('items.sub-navbar', ['name' => 'mot de la fondatrice'])
        @include('sections.partners')
        @include('sections.stat')
        @include('sections.team')
        @include('sections.event')
        @include('sections.benevole')
   </main>
    
</body>
@include('layouts.footer')
</html>