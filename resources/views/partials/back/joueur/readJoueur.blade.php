@include('flash')
@extends('dashboard')
@section('content_bo')
    <table class="table-auto w-100 text-center">
        <thead>
            <tr class='bg-purple-600 bg-opacity-100'>
                <th class='w-1/4 h-1/2'>#</th>
                <th class='w-1/4'>Nom</th>
                <th class='w-1/4'>Prenom</th>
                <th class='w-1/4'>Age</th>
                <th class='w-1/4'>Phone</th>
                <th class='w-1/2'>Email</th>
                <th class='w-1/4'>Genre</th>
                <th class='w-1/4'>Pays d'Origine</th>
                <th class='w-1/4'>Role id</th>
                <th class='w-1/4'>Equipe id</th>
                <th class='w-1/4'>Photo id</th>
                <th class='w-1/4'>Photo</th>
                <th class='w-1/4'></th>
                <th class='w-1/4'></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($joueurs as $joueur)
                <tr class='bg-purple-600 bg-opacity-50 h-14 '>
                    
                    <td class='m-5 '>{{ $joueur->id }}</td>
                    <td>{{ $joueur->nom }}</td>
                    <td>{{ $joueur->prenom }}</td>
                    <td>{{ $joueur->age }}</td>
                    <td>{{ $joueur->phone }}</td>
                    <td>{{ $joueur->email }}</td>
                    <td>{{ $joueur->genre }}</td>
                    <td>{{ $joueur->paysOrigine }}</td>
                    <td>{{ $joueur->roles_id }}</td>
                    <td>{{ $joueur->equipes_id }}</td>
                    <td>{{ $joueur->photos_id }}</td>
                    <td>
                        <img width='50px' src="{{ asset('img/'.$joueur->photos->src) }}"  class=" rounded-full">
                    </td>
                    <td>
                        <a href="/dashboard/readJoueurs/{{ $joueur->id }}/edit" class="px-4 py-2  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Edit</a>
                    </td>
                    {{-- dashboard/readjoueurs/{readjoueur} --}}
                    <td class="mt-1"> 
                        <form action="/dashboard/readJoueurs/{{ $joueur->id }}" method='post'>
                            @csrf
                            @method('delete')
                            <button type='submit' class="px-4 py-2  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/dashboard/readJoueurs/create" class="px-4 py-2 mt-8  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Créer un joueur</a>
@endsection