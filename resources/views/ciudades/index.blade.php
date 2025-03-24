@extends("layouts.app")

@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Ciudades</h1>
        </div>
    </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('ciudad.create')}}" class="btn btn-success">Agregar ciudad</a>
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
                <th scope="col">#</th>
                <th scope="col">Nombre de la ciudad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciudades as $ciudad)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{ $ciudad->nombre_ci }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('ciudad.edit', $ciudad->id_ciudad) }}">Editar</a>
                        <form action="{{ route('ciudad.destroy', $ciudad->id_ciudad) }}" method="POST" style="display:inline;">
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