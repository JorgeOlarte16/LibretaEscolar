@extends('layouts.plantilla')
@section('title', 'Preview')
    
@section('content')
    <h1>Libreta escolar</h1>
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

    <br>
    <h1>Estudiantes a su cargo</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Curso</th>   
        </thead>
        <tbody>
            
                @foreach ($estudiantes as $estudiante)
                    @if ($estudiante->id_acudiente == $LoggedUserInfo['id'])
                        <tr>
                            <td><a href="">{{$estudiante->nombre}}</a></td>
                            <td>{{$estudiante->curso}}</td>
                        </tr>
                    @endif
                 @endforeach
            
        </tbody>
 
</table>
    
@endsection