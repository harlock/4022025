@extends('layouts.app')

@section('content')
<h1>Editar Género</h1>

<form action="{{ route('generos.update', $genero->id_genero) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="nombre_genero">Nombre del Género:</label>
        <input type="text" id="nombre_genero" name="nombre_genero" value="{{ old('nombre_genero', $genero->nombre_genero) }}" required>
    </div>

    <button type="submit">Actualizar Género</button>
</form>
@endsection