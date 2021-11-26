@extends('layouts.app')

@section('content')


<h3>editando</h3>
<a href="{{ route ('alumno.index') }}">VOLVER</a>
<form action="{{ route('alumno.update',[$dato]) }}"  method="POST">
    @csrf
    @method('PUT')
    <input placeholder="alumno" type="text"   name="nombre" id="">
    <hr>
    <input placeholder="materia" type="text"  name="materia" id="">
    <hr >
    <input placeholder="curso" type="number"  name="curso" id="">    
    <hr >    
    <input type="submit" values="enviar">

@endsection