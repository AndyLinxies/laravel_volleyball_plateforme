@extends('layouts.index')
@section('content')
<h1 class='eq'>Detail de l'equipe</h1>

<div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
    <img class="object-cover w-full h-64" src="{{asset('img/voley.jpeg')}}" alt="Article">

    <div class="p-6">
        <div>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Nom: 
                {{$show->nom}}
            </p>
            <hr>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Ville: 
                {{$show->ville}}
            </p>
            <hr>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Nombre de Joueurs Max: 
                {{ count($show->joueurs)+1 }} /{{$show->maxPlayer}}
            </p>
            <hr>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"> Joueurs faisant parti de l'equipe: 
                @forelse ($show->joueurs as $joueur)
                        <span>Nom: {{ $joueur->nom }} |Prenom: {{ $joueur->prenom }} |Role: {{ $joueur->roles->role }}</span>  <br><br>
                    @empty
                        <span>pas de joueurs dispo</span>
                    @endforelse
            </p>
            <hr>
        </div>

    </div>
</div>
@endsection