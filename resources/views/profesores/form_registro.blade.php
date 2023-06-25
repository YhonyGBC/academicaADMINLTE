@extends('adminlte::page')

@section('title', 'Dashboard')
 
@section('content_header')
    <h1>Registro de Profesores</h1>
@stop

@section('content')
    <form action= "{{url('profesores/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoProfesor" class="form-label">Código del profesor</label>
            <input type="text" class="form-control" id="codigoProfesor" name="codigoProfesor" placeholder="Escriba el código">
        </div>

        <div class="mb-3">
            <label for="nombreProfesor" class="form-label">Nombre del profesor</label>
            <input type="text" class="form-control" id="nombreProfesor" name="nombreProfesor" placeholder="Escriba el nombre">
        </div>

        <div class="mb-3">
            <label for="categoriaProfesor" class="form-label">Categoría del profesor</label>
            <input type="text" class="form-control" id="categoriaProfesor" name="categoriaProfesor" placeholder="Escriba la categoría">
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
