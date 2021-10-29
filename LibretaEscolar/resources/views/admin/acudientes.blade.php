@extends('layouts.plantilla')
@section('title', 'Registros')

@section('content')
    <h1>Acudientes</h1>
    <a href="{{route('admin')}}">Volver</a>
    <a href="{{route('admin.register_acudiente')}}">Registrar nuevo acudiente</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Usuario</th>
            <th></th>
        </tr>
        @foreach ($acudientes as $acudiente)
        <tr>
            <td>{{$acudiente->id}}</td>
            <td>{{$acudiente->nombre}}</td>
            <td>{{$acudiente->telefono}}</td>
            <td>{{$acudiente->usuario}}</td>
            <td>
                <form action="{{route('admin.destroy_acudiente', $acudiente)}}" method="POST">
                    @csrf
                    @method('delete')
                <a href="{{route('admin.edit_acudiente',$acudiente)}}">Editar</a>
                <button>Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection