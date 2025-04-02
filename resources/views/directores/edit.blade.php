@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Director</h1>

    <form action="{{ route('directores.update', $directore) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre_director">Nombre del Director</label>
            <input 
                type="text" 
                class="form-control" 
                id="nombre_director" 
                name="nombre_director" 
                value="{{ old('nombre_director', $directore->nombre_director) }}" 
                required>
            @error('nombre_director')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
        <a href="{{ route('directores.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
    </form>
</div>
@endsection
