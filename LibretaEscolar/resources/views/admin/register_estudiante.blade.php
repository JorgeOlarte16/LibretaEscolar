@extends('layouts.plantilla')
@section('title', 'registrar')

@section('content')

    <h1>Registrar</h1>

    <a href="{{route('show.estudiantes')}}">Volver a estudiantes</a>
    <form action="{{route('admin.save_estudiante')}}" method="POST">

    @if (Session::get('success'))
        {{Session::get('succes')}}
    @endif
    @if (Session::get('fail'))
        {{Session::get('fail')}}
    @endif
    @csrf
    
        <label>
            Nombre
            <br>
            <input type="text" name="nombre" placeholder="Ingrese nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror
        <br>
        <br>
        
        <label>
            Curso
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
        <br>
        <label>
            ID acudiente
            <br>
            <input type="text" name="id_acudiente" placeholder="Ingrese ID del acudiente" value="{{old('id_acudiente')}}">
        
        </label>
        @error('ID acudiente')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror

        <br>
        <br>

        <button type="submit">Registrar</button>
    </form>
@endsection