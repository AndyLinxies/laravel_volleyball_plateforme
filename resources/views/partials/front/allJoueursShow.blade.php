{{-- Il faut une page pour afficher tous les joueurs :

Nom, Prénom, Nom d'équipe + button pour voir le show du joueur --}}

@extends('layouts.index')
@section('content')
<h1 class='eq'>Detail du Joueur</h1>

<div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
    <img class="object-cover w-full h-64" src="{{ asset('img/' . $show->photos->src) }}" alt="Article">

    <div class="p-6">
        <div>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Nom: 
                {{$show->nom}}
            </p>
            <hr>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> prenom: 
                {{$show->prenom}}
            </p>
            <hr>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> age: 
                {{$show->age}}
            </p>
            <hr>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> phone: 
                {{$show->phone}}
            </p>
            <hr>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> email: 
                {{$show->email}}
            </p>
            <hr>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> genre: 
                {{$show->genre}}
            </p>
            <hr>
            <p class="mt-2 mb-2 text-sm text-gray-600 dark:text-gray-400"> paysOrigine: 
                {{$show->paysOrigine}}
            </p>
            <hr>
            <a class="px-4 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700" href="/all/{{$show->equipes->id}}" >Equipe: {{ $show->equipes->nom}}</a> 
        </div>

    </div>
</div>
@endsection