@extends('layouts.plantilla')
@section('title', 'Login docente')

@section('content')
    <h1>Login</h1>
    <form action="{{route('auth.check_docente')}}" method="POST">
    @if(Session::get('fail'))
        {{ Session::get('fail')}}
    @endif

    @csrf
    <br>
        <label>
            Usuario
            <br>
            <input type="text" name="usuario" placeholder="Ingrese usuario" value="{{old('usuario')}}">
        </label>
        @error('usuario')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror
        <br>
        <br>
        <label>
            Contraseña
            <br>
            <input type="password" name="contraseña" placeholder="Ingrese contraseña">
        </label>
        @error('contraseña')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror
        <br>
        <br>

        <button type="submit">Inicia sesion</button>
    </form>
@endsection