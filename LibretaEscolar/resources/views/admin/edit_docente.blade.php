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
            <select name="curso" id="curso">

                <option value="preescolar">preescolar</option>
                <option value="prejardin">prejardin</option>
                <option value="jardin">jardin</option>
                <option value="transicion">transicion</option>
                <option value="primero">primero</option>
                <option value="segundo">segundo</option>
                <option value="tercero">tercero</option>
                <option value="cuarto">cuarto</option>
                <option value="quinto">quinto</option>

            </select>
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