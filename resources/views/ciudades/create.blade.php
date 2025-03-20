@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Agregar Ciudad</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('ciudad.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>

    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('ciudad.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de la ciudad</label>
                    <input type="text" class="form-control" id="nombre" name="nombre_ci" aria-describedby="emailHelp">
                </div>
            
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
           
        </div>
    </div>
@endsection
