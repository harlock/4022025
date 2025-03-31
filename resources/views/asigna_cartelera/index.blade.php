@extends('layouts.asigna_cartelera')

@section('content')
<div class="container">
    <h1>Lista de Asignaciones de Cartelera</h1>
    <a href="{{ route('asigna_cartelera.create') }}" class="btn btn-success">Nueva Asignación</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Película</th>
                <th>Cine</th>
                <th>Día</th>
                <th>Hora</th>
                <th>Proyección</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asignaciones as $asignacion)
            <tr>
                <td>{{ $asignacion->id_asignac }}</td>
                <td>{{ $asignacion->id_pelicula }}</td>
                <td>{{ $asignacion->id_cine }}</td>
                <td>{{ $asignacion->id_dia }}</td>
                <td>{{ $asignacion->id_hora }}</td>
                <td>{{ $asignacion->id_proyeccion }}</td>
                <td>{{ $asignacion->fi }}</td>
                <td>{{ $asignacion->ff }}</td>
                <td>
                    <a href="{{ route('asigna_cartelera.edit', $asignacion) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('asigna_cartelera.destroy', $asignacion) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection