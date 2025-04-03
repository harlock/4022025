@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Listado de Directores</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('directores.create') }}" class="btn btn-primary mb-3">Añadir nuevo director</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del Director</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($directores as $director)
            <tr>
                <td>{{ $director->id_director }}</td>
                <td>{{ $director->nombre_director }}</td>
                <td>
                    <a href="{{ route('directores.edit', $director->id_director) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('directores.destroy', $director->id_director) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que deseas eliminar este director?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
