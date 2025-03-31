@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Agregar Protagonista</h1>
            <a href="{{route('protagonistas.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('protagonistas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del protagonista</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <label for="Apellido_Paterno" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno" required>
                    <label for="Apellido_Materno" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno" required>

                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection