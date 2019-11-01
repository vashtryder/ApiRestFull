@extends('plantilla.plantilla')

@section('contenido')

    @if (session('datos'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('datos') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ( session('cancelar_anio')  )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('cancelar_anio') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Colegio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Año</li>
        </ol>
    </nav>
    <br>
    <h1 class="text-center">Año Academico</h1>
    <br>
    <div class="row float-right">
    <a href="{{ route('anio.create') }}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar </a>
    </div>
    <br>
    <table class="table-responsive table text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">NONBRE AÑO</th>
            <th scope="col">ESTADO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <th scope="row"></th>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nom_anio }}</td>
                    <td>{{ $item->est_anio }}</td>
                    <td>
                        <a href="{{ route('anio.show', $item->id ) }}" class="btn btn-success btncolorblanco">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="{{ route('anio.confirm', $item->id ) }}" class="btn btn-danger btncolorblanco">
                            <i class="fa fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $datos }}
@endsection
@section('titulo','Nivel Academico')


