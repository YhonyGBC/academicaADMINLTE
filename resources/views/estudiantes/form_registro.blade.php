@extends('adminlte::page')

@section('title', 'Dashboard')
 
@section('content_header')
    <h1>Registro de Estudiantes</h1>
@stop

@section('content')
    <form action= "{{url('estudiantes/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoEstudiante" class="form-label">Código del Estudiante (máximo 4 caractéres)</label>
            <input type="text" class="form-control" id="codigoEstudiante" name="codigoEstudiante" placeholder="Escriba el código">
        </div>

        <div class="mb-3">
            <label for="nombreEstudiante" class="form-label">Nombre del Estudiante (máximo 30 caractéres)</label>
            <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" placeholder="Escriba el nombre">
        </div>

        <div class="mb-3">
            <label for="edadEstudiante" class="form-label">Edad</label>
            <input type="text" class="form-control" id="edadEstudiante" name="edadEstudiante" placeholder="Escriba la edad">
        </div>

        <div class="mb-3">
            <label for="fechaEstudiante" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fechaEstudiante" name="fechaEstudiante" placeholder="Escriba la fecha de nacimiento">
        </div>

        <div class="mb-3">
            <label for="sexEstudiante" class="form-label">Sexo (Solo la letra M para másculino o F para Femenino)</label>
            <input type="text" class="form-control" id="sexEstudiante" name="sexEstudiante" placeholder="Seleccione el sexo del estudiante">
        </div>

        <div class="mb-3">
            <label for="codCiudad" class="form-label">Cod. Ciudad (máximo 3 números)</label>
            <input type="text" class="form-control" id="codCiudad" name="codCiudad" placeholder="Escriba el código de la ciudad">
        </div>

        <div class="mb-3">
            <label for="codBarrio" class="form-label">Cod. Barrio (máximo 3 números)</label>
            <input type="text" class="form-control" id="codBarrio" name="codBarrio" placeholder="Escriba el código del barrio">
        </div>

        <div class="mb-3">
            <label for="codPrograma" class="form-label">Cod. Programa (máximo 2 números)</label>
            <input type="text" class="form-control" id="codPrograma" name="codPrograma" placeholder="Escriba el código del programa">
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
