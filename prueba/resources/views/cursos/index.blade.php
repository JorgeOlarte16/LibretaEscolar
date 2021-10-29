@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la pagina principal de cursos</h1>
  
    <br><br>

    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)

            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
                <br>
                
            </li>
            
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection