@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>


@stop

@section('content')
    <p>Listado de Profesores</p>
    <a class="btn btn-success" href="/profesores/registrar">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoría</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($profesores as $p)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $p->codProfesor}}</td>
                <td> {{ $p->nomProfesor}}</td>
                <td> {{ $p->catProfesor}}</td>
                <td>
                    <a class="btn btn-primary" href="">Editar</a>
                    <a class="btn btn-danger" href="{{route('eliminaProf', $p->codProfesor)}}">Eliminar</a>
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
