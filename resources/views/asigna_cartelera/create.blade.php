{{-- resources/views/asigna_cartelera/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Asignar Cartelera</h2>

        <form method="POST" action="{{ route('asigna_cartelera.store') }}">
            @csrf
            <div class="mb-3">
                <label for="id_pelicula" class="form-label">Película</label>
                <select name="id_pelicula" id="id_pelicula" class="form-control" required>
                    @foreach($peliculas as $pelicula)
                        <option value="{{ $pelicula->id }}">{{ $pelicula->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_cine" class="form-label">Cine</label>
                <select name="id_cine" id="id_cine" class="form-control" required>
                    @foreach($cines as $cine)
                        <option value="{{ $cine->id }}">{{ $cine->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_dia" class="form-label">Día</label>
                <select name="id_dia" id="id_dia" class="form-control" required>
                    @foreach($dias as $dia)
                        <option value="{{ $dia->id }}">{{ $dia->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_hora" class="form-label">Hora</label>
                <select name="id_hora" id="id_hora" class="form-control" required>
                    @foreach($horas as $hora)
                        <option value="{{ $hora->id }}">{{ $hora->hora }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_proyeccion" class="form-label">Proyección</label>
                <select name="id_proyeccion" id="id_proyeccion" class="form-control" required>
                    @foreach($proyecciones as $proyeccion)
                        <option value="{{ $proyeccion->id }}">{{ $proyeccion->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="fi" class="form-label">Fecha Inicio</label>
                <input type="date" name="fi" id="fi" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ff" class="form-label">Fecha Fin</label>
                <input type="date" name="ff" id="ff" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
