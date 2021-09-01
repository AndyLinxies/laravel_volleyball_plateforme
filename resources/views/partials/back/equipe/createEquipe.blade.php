@include('flash')

@extends('dashboard')
@section('content_bo')
    <div class="container bg-light">
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Creation d'équipes</h2>
            <form action='/dashboard/readEquipes' method="post">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="nom">Nom de l'équipe</label>
                        <input id="nom" name='nom' value='{{ old('nom') }}' type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('nom') is-invalid @enderror">
                        @error('nom')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="ville">ville de l'équipe</label>
                        <input id="ville" name='ville' value='{{ old('ville') }}' type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('ville') is-invalid @enderror">
                        @error('ville')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="pays">pays de l'équipe</label>
                        <input id="pays" name='pays' value='{{ old('pays') }}' type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring   @error('pays') is-invalid @enderror">
                        @error('pays')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="continent">Continent</label>
                        {{-- Remplace le select --}}

                        <div class="relative">
                            <!-- Dropdown menu -->
                            <select
                                class="absolute z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800" name="continents_id">
                                @foreach ($continents as $continent)
                                <option
                                    class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white" value="{{$continent->id}}">{{$continent->name}}
                                    
                                </option>
                                @endforeach
                            </select>
                        </div>
                        @error('pays')
                            <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                        @enderror
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
