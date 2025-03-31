@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
    <h1 class="alert alert-success">Lista de Asignaciones de Cartelera</h1>
    <a href="{{ route('asigna_cartelera.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i>Nueva Asignación</a>
    </div>
</div>
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
                    <a href="{{ route('asigna_cartelera.edit', $asignacion) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                    <form action="{{ route('asigna_cartelera.destroy', $asignacion) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection