@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de Estudiantes</p>
    <a class="btn btn-success" href="/estudiantes/registrar">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre de estudiante</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Barrio</th>
            <th scope="col">Programa</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($estudiantes as $e)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $e->codEstudiante}}</td>
                <td> {{ $e->nomEstudiante}}</td>
                <td> {{ $e->edaEstudiante}}</td>
                <td> {{ $e->fechEstudiante}}</td>
                <td> {{ $e->sexEstudiante}}</td>
                <td> {{ $e->ciudad}}</td>
                <td> {{ $e->barrio}}</td>
                <td> {{ $e->programa}}</td>
                <td>
                    <a class="btn btn-primary" href="">Editar</a>
                    <a class="btn btn-danger" href="{{route('eliminaEst', $e->codEstudiante)}}">Eliminar</a>
                </td>
            </tr>
            @php
                $i = $i +1
            @endphp
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
