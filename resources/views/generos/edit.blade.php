@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <h1 class="alert alert-success">Editar Genero</h1>
    </div>
</div>
<form action="{{ route('generos.update', $genero->id_genero) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <label for="nombre_genero" class="fs-4 text-dark">Nombre del Género</label>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <input type="text" id="nombre_genero" name="nombre_genero" value="{{ old('nombre_genero', $genero->nombre_genero) }}" required class="text-center">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <button type="submit" class="btn btn-success">Actualizar Género</button>
        </div>
    </div>




</form>
@endsection