@extends('plantilla.plantilla')

@section('contenido')

    @if (session('nivel'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('nivel') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if ( session('cancelar_nivel')  )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('cancelar_nivel') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('colegio') }}">Colegio</a></li>
            <li class="breadcrumb-item active" aria-current="page">nivel</li>
            </ol>
        </nav>
        <br>
        <h1 class="text-center">nivel Academico</h1>
        <br>
        <div class="row float-right">
        <a href="{{ route('nivel.create') }}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar </a>
        </div>
        <br>
        <table class="table-responsive table text-center">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NONBRE NIVEL</th>
                <th scope="col">ABREVIATURA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nivel as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nom_nivel }}</td>
                        <td>{{ $item->abv_nivel }}</td>
                        <td>
                            <a href="{{ route('nivel.show', $item->id ) }}" class="btn btn-success btncolorblanco">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="{{ route('nivel.confirm', $item->id ) }}" class="btn btn-danger btncolorblanco">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $nivel }}
    @endsection
    @section('titulo','nivel Academico')
