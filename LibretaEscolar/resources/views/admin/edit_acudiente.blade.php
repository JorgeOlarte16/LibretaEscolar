@extends('layouts.plantilla')

@section('title', 'Editar cursos')

@section('content')
    <h1>Editar docente</h1>

    
    <form action="{{route('admin.update_acudiente', $acudiente)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $acudiente->nombre)}}">
        </label>
        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror
        <br>
        <label>
            Telefono:
            <br>
            <textarea name="telefono"  rows="5">{{old('telefono', $acudiente->telefono)}}</textarea>
        </label>

        @error('telefono')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror

        <br>
        <label>
            Usuario:
            <br>
            <input name="usuario" value="{{old('usuario',$acudiente->usuario)}}">
        </label>

        @error('usuario')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror

        <br>
        <br>
        
        <button type="submit">Actualizar acudiente</button>
    </form>
@endsection