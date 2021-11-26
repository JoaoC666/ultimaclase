@extends('layouts.app')

@section('content')




<a href="{{ route ('alumno.index') }}">VOLVER</a>
<form action="{{ route('alumno.index') }}"  method="POST">
    @csrf
    
    <input placeholder="alumno" type="text"   name="nombre" id="">
    <hr>
    <input placeholder="materia" type="text"  name="materia" id="">
    <hr >
    <input placeholder="curso" type="number"  name="curso" id="">    
    <hr >    
    <input type="submit" values="enviar">

</form>
@endsection