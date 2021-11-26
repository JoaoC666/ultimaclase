@extends('layouts.app')

@section('content')
<a href="{{ route('alumno.create') }}">nuevo</a>
<hr>
<a href="{{ route('examen.index') }}">tipos de examen</a>
<table>

<tr>
    <td>
        nombre
    </td>

    <td>
        materia
    </td>

    <td>
        curso
    </td>
</tr>
@foreach ($lista as $item )

    <td>
        {{ $item->nombre }}
    </td>
    <td>
        {{ $item->materia }}
    </td>
    <td>
        {{ $item->curso }}
    </td>
    <td>
        <a href="{{route('alumno.show',[$item])}}">🔎</a>
        <a href="{{route('alumno.edit',[$item])}}">✎</a>
        <form action="{{route('alumno.destroy',[$item])}}" method="post">
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