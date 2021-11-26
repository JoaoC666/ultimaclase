@extends('layouts.app')

@section('content')
<a href="{{ route('notas.create') }}">nuevo</a>
<table>

<tr>
    

    <td>
        nota
    </td>
</tr>
@foreach ($listant as $item )

    
    <td>
        {{ $item->nota }}
    </td>
    <td>
        <a href="{{route('notas.show',[$item])}}">🔎</a>
        <a href="{{route('notas.edit',[$item])}}">✎</a>
        <form action="{{route('notas.destroy',[$item])}}" method="post">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('esta seguro de borrar')" type="submit">❌</button>
        </form>
        </a> 
    </td>
    <hr>

</table>
@endforeach
@endsection