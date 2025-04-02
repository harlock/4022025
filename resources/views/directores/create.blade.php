@extends('layouts.app')

@section('content')
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
