@extends('layouts.app')

@section('content')


<h3>editando</h3>
<a href="{{ route ('notas.index') }}">VOLVER</a>
<form action="{{ route('notas.update',[$datont]) }}"  method="POST">
    @csrf
    @method('PUT')
    <input placeholder="nota" type="number"   name="nota" id="">
    <hr>
     
    <input type="submit" values="enviar">

@endsection