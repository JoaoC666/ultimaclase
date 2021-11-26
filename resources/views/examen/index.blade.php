@extends('layouts.app')

@section('content')
<a href="{{ route('examen.create') }}">nuevo</a>
<hr>
<a href="{{ route('alumno.index') }}">volver a los alumnos</a>
<table>

<tr>
    <td>
        examenes tipo:
    </td>

    
</tr>
@foreach ($listaex as $item )

    <td>
        {{ $item->tipo }}
    </td>
    
    <td>
        <a href="{{route('examen.show',[$item])}}">🔎</a>
        <a href="{{route('examen.edit',[$item])}}">✎</a>
        <form action="{{route('examen.destroy',[$item])}}" method="post">
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