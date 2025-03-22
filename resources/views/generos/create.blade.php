@extends('layouts.app')

@section('content')
<h1>Agregar Género</h1>

<form action="{{ route('generos.store') }}" method="POST">
    @csrf
    <label for="nombre_genero">Nombre del Género:</label>
    <input type="text" name="nombre_genero" required>
    <button type="submit">Guardar</button>
</form>
@endsection