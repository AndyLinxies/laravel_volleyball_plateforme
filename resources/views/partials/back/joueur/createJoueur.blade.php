@include('flash')

@extends('dashboard')
@section('content_bo')
    <div class="container bg-light">
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Creation de Joueurs</h2>
            <form action='/dashboard/readJoueurs' method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="nom">Nom du Joueur</label>
                        <input id="nom" name='nom' value='{{ old('nom') }}' type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('nom') is-invalid @enderror">
                        @error('nom')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="prenom">Prenom du Joueur</label>
                        <input id="prenom" name='prenom' value='{{ old('prenom') }}' type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('prenom') is-invalid @enderror">
                        @error('prenom')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="age">Age</label>
                        <input id="age" name='age' value='{{ old('age') }}' type="number"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('age') is-invalid @enderror">
                        @error('age')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="phone">Phone</label>
                        <input id="phone" name='phone' value='{{ old('phone') }}' type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('phone') is-invalid @enderror">
                        @error('phone')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="email">email</label>
                        <input id="email" name='email' value='{{ old('email') }}' type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="continent">Genre</label>
                        {{-- Remplace le select --}}

                        <div class="relative">
                            <!-- Dropdown menu -->
                            <select class="absolute z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800"
                                name="genre">

                                <option
                                    class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white"
                                    value="Homme">Homme
                                </option>
                                <option
                                    class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white"
                                    value="Femme">Femme
                                </option>
                                <option
                                    class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white"
                                    value="Autre">Autre
                                </option>
                            </select>
                        </div>
                        @error('genre')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror

                    </div>
                    {{-- Role --}}
                    <div class="mb-10">
                        <label class="text-gray-700 dark:text-gray-200" for="role">Role</label>
                        {{-- Remplace le select --}}

                        <div class="relative">
                            <!-- Dropdown menu -->
                            <select class="absolute z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800"
                                name="roles_id">
                                @foreach ($roles as $role)
                                    <option
                                        class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white"
                                        value="{{ $role->id }}">{{ $role->role }}

                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('role')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    {{-- Equipes --}}
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="equipe">Equipe</label>
                        {{-- Remplace le select --}}

                        <div class="relative">
                            <!-- Dropdown menu -->
                            <select class="absolute z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800"
                                name="equipes_id">
                                @foreach ($equipes as $equipe)
                                    <option
                                        class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white"
                                        value="{{ $equipe->id }}">{{ $equipe->nom }}

                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('equipe')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>



                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="paysOrigine">paysOrigine</label>
                        <input id="paysOrigine" name='paysOrigine' value='{{ old('paysOrigine') }}' type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('paysOrigine') is-invalid @enderror">
                        @error('paysOrigine')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    {{-- Photos --}}
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="email">Photo</label>
                        @foreach ($joueurs as $joueur)
                            {{-- pour le name acceder a la table photos via la table joueurs --}}
                            <input id="photo" name='src' value='{{ old('photo') }}' type="file"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('photo') is-invalid @enderror">
                            @error('photo')
                                <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                            @enderror
                        @endforeach

                    </div>
                </div>

    </div>
    </div>

    <div class="flex justify-end mt-6">
        <button type='submit'
            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
    </div>
    </form>
    </section>
    </div>
@endsection
