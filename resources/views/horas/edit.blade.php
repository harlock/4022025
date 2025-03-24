@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <h1 class="alert alert-success">Editar Horario</h1>
        </div>
    </div>
    <form action="{{ route('horas.update', $hora->id_horas) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row justify-content-center">
            <div class="col-8 text-center m-3">
                <label for="descripcion_h" class="fs-4 text-dark">Horario</label>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 text-center m-3">
                <input type="text" id="descripcion_h" name="descripcion_h" value="{{ old('descripcion_h', $hora->descripcion_h) }}" required class="text-center">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 text-center m-3">
                <button type="submit" class="btn btn-success">Actualizar horario</button>
            </div>
        </div>




    </form>
@endsection