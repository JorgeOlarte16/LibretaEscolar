@extends('layouts.plantilla')
@section('title', 'Home')
    
@section('content')
    <h1>Pagina principal</h1>
    <br>
    <a href="{{route('auth.login_docente')}}">Iniciar sesion como docente</a>
    <br>
    <a href="{{route('auth.login_admin')}}">Iniciar sesion como admin</a>
    <br>
    <a href="{{route('auth.login_acudiente')}}">Inicar sesion como acudiente</a>

    @endsection