@extends('layouts.plantilla')
@section('title','Crear Anuncio')
    
@section('content')
    
    <form action="{{route('anuncios.store')}}" method="POST">
    @csrf
    <label>
        Titulo
        <br>
        <input type="text" name="titulo" value="{{old('name')}}">
    </label>
    <br>
    <label>
        Contenido
        <br>
        <textarea name="body"  rows="5" >{{old('descripcion')}}</textarea>
    </label>
    <br>
    <button type="submit">Enviar formulario</button>
</form>
@endsection