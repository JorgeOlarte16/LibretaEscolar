@extends('layouts.plantilla')
@section('title','Crear actividad')
    
@section('content')
    
    <form action="{{route('actividades.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>
        Titulo
        <br>
        <input type="text" name="titulo" value="{{old('titulo')}}">
    </label>
    <br>
    <label>
        descripcion
        <br>
        <textarea name="descripcion"  rows="5" >{{old('descripcion')}}</textarea>
    </label>
    <br>
    <label>
        <input type="date" name="fecha_entrega" value="{{old('fecha_entrega')}}">
    </label>
    <br>
        Archivo
        <input type="file" name="file" id="chooseFile" >
        <br>
        <label for="chooseFile"></label>
    <br>
    <button type="submit">Enviar formulario</button>
</form>
@endsection