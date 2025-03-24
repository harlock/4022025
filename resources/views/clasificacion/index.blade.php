@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <h1 class="alert alert-success">Clasificaciones</h1>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <a href="{{ route('clasificacion.create') }}" class="btn btn-success">Agregar Clasificación</a>
    </div>
</div>

@if(session('success'))
<div class="row justify-content-center mt-3">
    <div class="col-4 text-center">
        <p class="alert alert-success">{{ session('success') }}</p>
    </div>
</div>
@endif

<div class="row justify-content-center mt-5">
    <div class="col-8">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" class="bg-success-subtle">Id_Clasificación</th>
                    <th scope="col" class="bg-success-subtle">Nombre</th>
                    <th scope="col" class="bg-success-subtle text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clasificacion as $item)
                <tr>
                    <td class="" scope="row">{{ $loop->index + 1 }}</td> <!-- Aquí estaba el error -->
                    <td class="">{{ $item->nom_clasifi }}</td> <!-- Aquí se usa $item -->
                    <td class="text-center">
                        <a class="btn btn-warning me-2" href="{{ route('clasificacion.edit', $item->id_clasificacion) }}">Editar</a>
                        <form action="{{ route('clasificacion.destroy', $item->id_clasificacion) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
