@extends('layouts.peliculas')

@section('content')
<div class="container mt-4">
    <h2>Editar Director</h2>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('directores.update', $director->id_director) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre_director" class="form-label">Nombre del Director</label>
            <input type="text" class="form-control" id="nombre_director" name="nombre_director" value="{{ old('nombre_director', $director->nombre_director) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar Director</button>