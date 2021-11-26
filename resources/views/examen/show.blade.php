@extends('layouts.app')

@section('content')
<div>
    <h3>examen tipo</h3>
    <P>{{ $datoex->tipo}}</P>    
    <a href="{{ route('examen.index') }}">volver</a>
</div>
@endsection