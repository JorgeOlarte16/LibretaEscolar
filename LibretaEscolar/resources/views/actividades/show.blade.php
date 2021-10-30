@extends('layouts.plantilla')
@section('title', 'Tablon de anuncios')
    
@section('content')
    <h1>Tablon de actividades</h1>
    <br>
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
    
    @if ($LoggedUserInfo['tipousuario'] == 'docente')
    <a href="{{route('actividades.create')}}">Nueva actividad</a>
    @endif


    @foreach ($actividades as $actividad)

        @if ($actividad->curso == $LoggedUserInfo['curso'])
        <h2>{{$actividad->titulo}}</h2>
        <p>{{$actividad->descripcion}}</p>

            @if ($actividad->file_name)
                <a href="{{route('actividades.download', $actividad->file_name) }}">descargar</a>
            @endif
        @endif

    @endforeach

    
    
@endsection