@extends('layouts.index')
@section('content')
<h1 class='eq'>Les equipes</h1>
<div class='flex'>
@foreach ($equipes as $equipe)
    
<div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <div class="px-4 py-2">
        <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">Equipe</h1>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Nom de l'equipe: {{$equipe->nom}}</p>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Ville:  {{$equipe->ville}}</p>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Nombre de joueurs maximum:  {{$equipe->maxPlayer}}</p>
    </div>
    <a href="/all/{{$equipe->id}}" class="px-4 py-2 mt-3 ml-3 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Show</a>
    <img class="object-cover w-full h-48 mt-2" src="{{asset('img/voley.jpeg')}}" alt="volley">
    

</div>
@endforeach
</div>
<hr>
@endsection
