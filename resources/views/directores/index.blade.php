@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Directores</h1>
    <a href="{{ route('directores.create') }}" class="btn btn-primary mb-3">Agregar Director</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($directores as $director)
            <tr>
                <td>{{ $director->id_director }}</td>
                <td>{{ $director->nombre_director }}</td>
                <td>
              
                    <a href="{{ route('directores.edit', $director) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('directores.destroy', $director) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminarlo?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
