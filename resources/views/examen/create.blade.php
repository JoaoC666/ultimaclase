@extends('layouts.app')

@section('content')




<a href="{{ route ('examen.index') }}">VOLVER</a>
<form action="{{ route('examen.index') }}"  method="POST">
    @csrf
    
    <input placeholder="tipo" type="text"   name="tipo" id="">
    <hr>
      
    <input type="submit" values="enviar">

</form>
@endsection