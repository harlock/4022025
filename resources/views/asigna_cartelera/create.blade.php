@extends('layouts.asigna_cartelera')

@section('content')
<div class="container">
    <h1>Nueva Asignación</h1>
    <form action="{{ route('asigna_cartelera.store') }}" method="POST">
        @csrf
        @include('asigna_cartelera.form')
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection