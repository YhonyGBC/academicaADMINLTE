@extends('adminlte::page')

@section('title', 'Dashboard')
 
@section('content_header')
    <h1>Registro de Facultades</h1>
@stop

@section('content')
    <form action= "{{url('facultades/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoFacultad" name="codigoFacultad" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreFacultad" name="nombreFacultad" placeholder="Ingrese el nombre">
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
