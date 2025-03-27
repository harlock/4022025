@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Editar Idioma</h1>
        <a href="{{route('idioma.index')}}" class="btn btn-primary">Regresar</a>
    </div>
</div>

@if ($errors->any())
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif


<div class="row justify-content-center mt-5">
    <div class="col-6">
        <form action="{{ route('idioma.update', $idioma->id_idioma) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="desc_idioma" class="form-label">Descripción del idioma</label>
                <input type="text" class="form-control" id="desc_idioma" name="desc_idioma" value="{{old('desc_idioma') ,$idioma->desc_idioma }}">
            </div>
        
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection