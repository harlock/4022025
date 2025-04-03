@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Añadir nuevo Director</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('directores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre_director" class="form-label">Nombre del Director</label>
            <input type="text" class="form-control" id="nombre_director" name="nombre_director" value="{{ old('nombre_director') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Director</button>
        <a href="{{ route('directores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
