@extends('layouts.asigna_cartelera')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <ul class="nav flex-column w-100 mt-3">
        <li class="nav-item py-2 {{ Request::is('asigna_cartelera*') ? 'bg-primary rounded' : '' }}">
            <a href="{{ route('asigna_cartelera.index') }}" class="text-decoration-none fw-bold text-white align-items-center gap-4 d-flex">
                <i class="fa-solid fa-calendar ms-4"></i> Asigna Cartelera
            </a>
        </li>
    </ul>
    <a href="{{ route('horas.index') }}" class="btn btn-secondary">Horas</a>
    <a href="{{ route('proyecciones.index') }}" class="btn btn-secondary">Proyecciones</a>
    <a href="{{ route('dias.index') }}" class="btn btn-secondary">Días</a>
    <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cines</a>
    <a href="{{ route('peliculas.dashPeliculas') }}" class="btn btn-secondary">Películas</a>
</div>
@endsection
