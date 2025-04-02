@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <h1>Agregar Director</h1>
    <form action="{{ route('directores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_director">Nombre del Director</label>
            <input type="text" class="form-control" id="nombre_director" name="nombre_director" required>
            @error('nombre_director') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-success mt-2">Guardar</button>
        <a href="{{ route('directores.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
    </form>
</div>
@endsection
=======
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <h1 class="alert alert-success">Agregar Director</h1>
    </div>
</div>
<form action="{{ route('directores.store') }}" method="POST">
    @csrf

    <div class="row justify-content-center">
        <div class="col-6 text-center m-3"><label for="nombre_director" class="fs-4 text-dark ">Nombre del Director</label></div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6 text-center m-3"><button type="submit" class="btn btn-success">Guardar</button></div>
    </div>



</form>
@endsection
>>>>>>> 335ba1f4d98d755e53df0bb7a6a4f7ef476a5ed4
