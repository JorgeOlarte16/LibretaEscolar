@extends('layouts.plantilla')
@section('title', 'Registros')

@section('content')
    <h1>docentes</h1>
    <a href="{{route('admin')}}">Volver</a>
    <a href="{{route('admin.register_docente')}}">Registrar nuevo docente</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th> 
            <th>Curso</th>
            <th>Usuario</th>
            <th></th>
        </tr>
        @foreach ($docentes as $docente)
        <tr>
            <td>{{$docente->id}}</td>
            <td>{{$docente->nombre}}</td>
            <td>{{$docente->curso}}</td>
            <td>{{$docente->usuario}}</td>
            <td>
                <form action="{{route('admin.destroy_docente', $docente)}}" method="POST">
                @csrf
                 @method('delete')
                    <a href="{{route('admin.edit_docente',$docente)}}">Editar</a>
                    <button>Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection