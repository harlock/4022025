@extends("layouts.app")

@section("content")
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Idiomas</h1>
        <a href="{{route('idioma.create')}}" class="btn btn-success">Agregar Idioma</a>
    </div>
</div>

@if(session('success'))
    <div class="row justify-content-center">
        <div class="col-4">
            <p class="alert alert-success">{{ session('success') }}</p>
        </div>
    </div>
@endif

<div class="row justify-content-center mt-5">
    <div class="col-8">
      <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Descripción del idioma</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($idiomas as $idioma)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{ $idioma->desc_idioma }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('idioma.edit', $idioma->id_idioma) }}">Editar</a>
                        <form action="{{ route('idioma.destroy', $idioma->id_idioma) }}" method="POST" style="display:inline;">
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