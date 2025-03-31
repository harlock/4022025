@extends('layouts.asigna_cartelera')

@section('content')
<div class="container">
    <h1>Editar Asignación</h1>
    <form action="{{ route('asigna_cartelera.update', $asigna_cartelera) }}" method="POST">
        @csrf
        @method('PUT')
        @include('asigna_cartelera.form')
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection