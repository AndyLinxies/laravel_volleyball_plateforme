{{-- Il faut une page pour afficher tous les joueurs :

Nom, Prénom, Nom d'équipe + button pour voir le show du joueur --}}

@extends('layouts.index')
@section('content')
    <h1 class='eq'>Les Joueurs</h1>
    <div class='grid grid-flow-row-dense grid-cols-4 grid-rows-3 gap-4 '>
        @foreach ($joueurs as $joueur)

            <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="px-4 py-2">
                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">joueur</h1>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Nom du joueur: {{ $joueur->nom }}</p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Prenom du joueur: {{ $joueur->prenom }}</p>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">age: {{ $joueur->age }}</p>

                        @if ($joueur->equipes!=null)
                        <p>Equipe: {{ $joueur->equipes->nom }}</p>
                        @else   
                            <h6><b>Joueur libre</b></h6>
                        @endif
                </div>
                @if ($joueur->equipes!=null)
                <a href="allJ/{{ $joueur->id }}"
                    class="px-4 py-2 mt-3 ml-3 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Show</a>
                @endif
                <img class="object-cover w-full h-48 mt-2" src="{{ asset('img/' . $joueur->photos->src) }}" alt="Pas de photo par défaut(seeder)">


            </div>
        @endforeach
    </div>
    <hr>
@endsection
