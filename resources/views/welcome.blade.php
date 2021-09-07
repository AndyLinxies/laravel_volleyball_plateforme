@extends('layouts.index')
@section('content')
    <h1 class='eq'>Home</h1>
    {{-- une section ( équipes remplies )
une section ( 2 équipes non remplies ) --}}
    <hr>
    <main class=" mt-5">
        <div class="grid grid-flow-col grid-cols-3 grid-rows-3 gap-4">
            {{-- equipe Remplies --}}
            <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">

                <h3> Equipes remplies</h3>

                @if (count($equipes[0]->joueurs) >= 9)
                    {{ $equipe->nom }} |
                @else
                    <p>Aucune équipe n'est remplie</p>
                @endif
            </div>

            <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">

                <h3> 2 equipes non remplies</h3>
                @foreach ($equipes as $equipe)

                    @if (count($equipe->joueurs) < 9)
                        {{ $equipe->nom }} |
                    @else
                        <p>Toutes les equipes sont remplies</p>
                    @endif
                @endforeach
            </div>


            {{-- 4Joueurs sans equipes --}}
            <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">


                <h3>4 Joueurs sans équipes au Hasard</h3>
                @foreach ($noEquipeRandom as $joueur)
                    <span>{{ $joueur->prenom }}</span>
                @endforeach
            </div>

            {{-- 4Joueurs avec équpe --}}
            <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">


                <h3>4 Joueurs avec équipes</h3>
                @foreach ($avecEquipeRandom as $joueur)
                    <span>{{ $joueur->prenom }}</span>
                @endforeach
            </div>

            {{-- equipe  europe --}}
            <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">


                <h3>Equipe en europe</h3>
                @foreach ($europeEquipe as $equipe)
                    <span>{{ $equipe->nom }}</span> |
                @endforeach
            </div>
            {{-- equipe non europe --}}
            <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">


                <h3>Equipe Hors europe</h3>
                @foreach ($noEuropeEquipe as $equipe)
                    <span>{{ $equipe->nom }}</span> |
                @endforeach
            </div>


            {{-- Joueur femme --}}
            <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">


                <h3>5 Joueuses random avec équipe</h3>
                @forelse ($joueurFemme as $joueur)
                    <span>{{ $joueur->prenom }}</span>
                @empty
                    <span>liste vide</span>
                @endforelse
            </div>
            {{-- Joueur homme --}}
            <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">


                <h3>5 Joueurs random avec équipe</h3>
                @foreach ($joueurHomme as $joueur)
                    <span>{{ $joueur->prenom }}</span>
                @endforeach
            </div>

        </div>

    </main>

@endsection
