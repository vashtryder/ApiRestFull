@extends('plantilla.plantilla')

@section('contenido')

    @if (session('grado'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('grado') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if ( session('cancelar_grado')  )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('cancelar_grado') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Colegio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Grado</li>
            </ol>
        </nav>
        <br>
        <h1 class="text-center">Grado Academico</h1>
        <br>
        <div class="row float-right">
        <a href="{{ route('grado.create') }}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar </a>
        </div>
        <br>
        <table class="table-responsive table text-center">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NONBRE GRADO</th>
                <th scope="col">ABREVIATURA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grado as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nom_grado }}</td>
                        <td>{{ $item->abv_grado }}</td>
                        <td>
                            <a href="{{ route('grado.show', $item->id ) }}" class="btn btn-success btncolorblanco">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="{{ route('grado.confirm', $item->id ) }}" class="btn btn-danger btncolorblanco">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $grado }}
    @endsection
    @section('titulo','Grado Academico')
