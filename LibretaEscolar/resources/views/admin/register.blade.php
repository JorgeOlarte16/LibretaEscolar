@extends('layouts.plantilla')
@section('title', 'Login docente')

@section('content')
    <h1>Registros</h1>
    <a href="{{route('auth.logout')}}">Cerrar sesion</a>
    <a href="{{route('show.acudientes')}}">Ver tabla de acudientes</a>
    <a href="{{route('show.docentes')}}">Ver tabla de docentes</a>
    <a href="{{route('show.estudiantes')}}">Ver tabla de estudiantes</a>


@endsection