@extends('layouts.peliculas')

@section('content')
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <h1 class="alert alert-success">Agregar Clasificación</h1>
    </div>
    <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('clasificacion.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
</div>
@if ($errors->any())
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

<!-- Formulario para crear una nueva clasificación -->
<form action="{{ route('clasificacion.store') }}" method="POST">
    @csrf
    
    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <label for="nom_clasifi" class="fs-4 text-dark">Nombre de la Clasificación</label>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <input type="text" id="nom_clasifi" name="nom_clasifi" value="{{ old('nom_clasifi') }}" required class="text-center">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <button type="submit" class="btn btn-success">Agregar Clasificación</button>
        </div>
    </div>
</form>
@endsection
