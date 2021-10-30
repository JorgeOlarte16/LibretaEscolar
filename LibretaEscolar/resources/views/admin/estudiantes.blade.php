@extends('layouts.plantilla')
@section('title', 'Registros')

@section('content')
    <h1>Acudientes</h1>
    <a href="{{route('admin')}}">Volver</a>
    <a href="{{route('admin.register_estudiante')}}">Registrar nuevo estudiante</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Curso</th>
            <th>Id acudiente</th>
            <th></th>
        </tr>
        @foreach ($estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->id}}</td>
            <td>{{$estudiante->nombre}}</td>
            <td>{{$estudiante->curso}}</td>
            <td>{{$estudiante->id_acudiente}}</td>
            <td>
                <form action="{{route('admin.destroy_estudiante', $estudiante)}}" method="POST">
                    @csrf
                    @method('delete')
                <a href="{{route('admin.edit_estudiante',$estudiante)}}">Editar</a>
                <button>Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection