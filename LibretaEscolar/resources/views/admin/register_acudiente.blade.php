@extends('layouts.plantilla')
@section('title', 'registrar')

@section('content')

    <h1>Registrar</h1>

    <a href="{{route('show.acudientes')}}">Volver a acudientes</a>
    <form action="{{route('admin.save_acudiente')}}" method="POST">

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
            Telefono
            <br>
            <input type="text" name="telefono" placeholder="Ingrese telefono" value="{{old('telefono')}}">
        </label>
        @error('curso')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror
        <br>
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
            <input type="password" name="contraseña" placeholder="Ingrese contraseña" >
        </label>
        @error('contraseña')
            <br>
            <small>*{{$message}}</small>
            <br>         
        @enderror

        <br>
        <br>

        <button type="submit">Registrar</button>
    </form>
@endsection