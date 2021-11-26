@extends('layouts.app')

@section('content')




<a href="{{ route ('notas.index') }}">VOLVER</a>
<form action="{{ route('notas.index') }}"  method="POST">
    @csrf    
    <input placeholder="nota" type="number" name="nota" id="">
    <hr>      
    <input type="submit" values="enviar">

</form>
@endsection