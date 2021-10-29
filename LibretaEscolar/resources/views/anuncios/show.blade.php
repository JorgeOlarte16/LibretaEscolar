@extends('layouts.plantilla')
@section('title', 'Tablon de anuncios')
@include('layouts.partials.header')
@section('content')
    <h1>Tablon de anuncios</h1>
    
    <table>
        <thead>
            <th>Nombre</th>
            <th>Curso</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td>{{$LoggedUserInfo['nombre']}}</td>
                <td>{{$LoggedUserInfo['curso']}}</td>
                <td><a href="{{route('auth.logout')}}">Cerrar sesion</a></td>
            </tr>
        </tbody>
    
    </table>

    @php
        $usuario = $LoggedUserInfo['usuario']
    @endphp
    <a href="{{route('anuncios.create')}}">Nuevo anuncio</a>
    
    @foreach ($anuncios as $anuncio)

        @if ($anuncio->curso == $LoggedUserInfo['curso'])
        <h2>{{$anuncio->titulo}}</h2>
        <h3>Publicado por {{$anuncio->usuario}}</h3>
        <p>{{$anuncio->body}}</p>
        @endif

    @endforeach
    
@endsection