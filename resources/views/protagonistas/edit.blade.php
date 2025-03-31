@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Editar protagonistas</h1>
            <a href="{{route('protagonistas.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('protagonistas.update', $protagonista->id_protagonista) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del protagonista</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $protagonista->nombre }}" required>
                    <label for="Apellido_Paterno" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno" value="{{ $protagonista->Apellido_Paterno }}" required>
                    <label for="Apellido_Materno" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno" value="{{ $protagonista->Apellido_Materno }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection