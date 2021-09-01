<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class='flex flex-column'>
        <div>
            @include('partials.back.sidebar')
        </div>
        
        <div class="py-12">
            <div class="globTable mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 ">
                        @yield('content_bo')
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
