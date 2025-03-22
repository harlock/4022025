@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <h1 class="alert alert-success">Generos</h1>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <a href="{{ route('generos.create') }}" class="btn btn-success">Agregar Genero</a>
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
                    <th scope="col">Id_Genero</th>
                    <th scope="col">Genero</th>
                </tr>
            </thead>
            <tbody>
                @foreach($generos as $genero)
                <tr>
                    <td scope="row">{{$loop->index+1}}</td>
                    <td>{{ $genero->nombre_genero }}</td>
                    <td class="text-center">
                        <a class="btn btn-warning me-2" href="{{ route('generos.edit', $genero->id_genero) }}">Editar</a>
                        <form action="{{ route('generos.destroy', $genero->id_genero) }}" method="POST" style="display:inline;">
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