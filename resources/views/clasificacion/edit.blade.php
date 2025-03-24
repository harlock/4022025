@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <h1 class="alert alert-success">Editar Clasificación</h1>
    </div>
</div>
<form action="{{ route('clasificacion.update', $clasificacion->id_clasificacion) }}" method="POST">
    @csrf
    @method('PUT') <!-- Indicamos que es una actualización -->

    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <label for="nom_clasifi" class="fs-4 text-dark">Nombre de la Clasificación</label>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <input type="text" id="nom_clasifi" name="nom_clasifi" value="{{ old('nom_clasifi', $clasificacion->nom_clasifi) }}" required class="text-center">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <button type="submit" class="btn btn-success">Actualizar Clasificación</button>
        </div>
    </div>
</form>
@endsection
