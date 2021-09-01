@include('flash')

@extends('dashboard')
@section('content_bo')
<div class='flex justify-center'>
    <table class="table-auto w-1/2 text-center border rounded-sm">
        <thead> 
            <tr class='bg-purple-600 bg-opacity-100'>
                <th class='w-1/4 h-1/2'>#</th>
                <th class='w-1/2'>Nom Du Continent</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($continents as $continent)
                <tr class='bg-purple-600 bg-opacity-50 h-14 '>
                    
                    <td class='m-5 '>{{ $continent->id }}</td>
                    <td>{{ $continent->name }}</td>
                    
                    {{-- dashboard/readcontinents/{readcontinent} --}}
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection