@extends('layouts.app')

@section('content')
<div>
    <h3>nota</h3>
    <P>{{ $datont->nombre}}</P>    
    <a href="{{ route('notas.index') }}">volver</a>
</div>
@endsection