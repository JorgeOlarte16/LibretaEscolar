@extends('layouts.plantilla')

@section('title', 'Editar cursos')

@section('content')
    <h1>Editar docente</h1>

    
    <form action="{{route('admin.update_docente', $docente)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $docente->nombre)}}">
        </label>
        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror
        <br>
        <label>
            Curso:
            <br>
            <textarea name="curso"  rows="5">{{old('curso', $docente->curso)}}</textarea>
        </label>

        @error('curso')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror

        <br>
        <label>
            Usuario:
            <br>
            <input name="usuario" value="{{old('usuario',$docente->usuario)}}">
        </label>

        @error('usuario')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror

        <br>
        <br>
        
        <button type="submit">Actualizar docente</button>
    </form>
@endsection