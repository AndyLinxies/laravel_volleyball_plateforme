@include('flash')

@extends('dashboard')
@section('content_bo')
    <table class="table-auto w-100 text-center">
        <thead>
            <tr class='bg-purple-600 bg-opacity-100'>
                <th class='w-1/4 h-1/2'>#</th>
                <th class='w-1/2'>Noms</th>
                <th class='w-1/4'>Ville</th>
                <th class='w-1/4'>Max Players</th>
                <th class='w-1/4'>Continents_id</th>
                <th class='w-1/4'></th>
                <th class='w-1/4'></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipes as $equipe)
                <tr class='bg-purple-600 bg-opacity-50 h-14 '>
                    
                    <td class='m-5 '>{{ $equipe->id }}</td>
                    <td>{{ $equipe->nom }}</td>
                    <td>{{ $equipe->ville }}</td>
                    <td>{{ $equipe->maxPlayer }}</td>
                    <td>{{ $equipe->continents_id }}</td>
                    <td>
                        <a href="/dashboard/readEquipes/{{ $equipe->id }}/edit" class="px-4 py-2  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Edit</a>
                    </td>
                    {{-- dashboard/readEquipes/{readEquipe} --}}
                    <td class="mt-1"> 
                        <form action="/dashboard/readEquipes/{{ $equipe->id }}" method='post'>
                            @csrf
                            @method('delete')
                            <button type='submit' class="px-4 py-2  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/dashboard/readEquipes/create" class="px-4 py-2 mt-8  font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Créer une Equipe</a>
@endsection