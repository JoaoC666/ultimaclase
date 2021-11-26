@extends('layouts.app')

@section('content')


<h3>editando</h3>
<a href="{{ route ('notas.index') }}">VOLVER</a>
<form action="{{ route('notas.update',[$datoex]) }}"  method="POST">
    @csrf
    @method('PUT')
    <input placeholder="tipo" type="text"   name="tipo" id="">
    <hr>      
    <input type="submit" values="enviar">

@endsection