@extends('layouts.app')

@section('content')
<div>
    <label for="">alumno</label>
    <P>{{ $dato->nombre}}</P>    
    <a href="{{ route('alumno.index') }}">volver</a>
</div>
@endsection