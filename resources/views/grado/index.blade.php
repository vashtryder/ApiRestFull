@extends('plantilla.plantilla')

@section('contenido')
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
        <a  class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar </a>
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
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td><a class="btn btn-success btncolorblanco">
                            <i class="fa fa-edit"></i>
                            </a>

                            <a class="btn btn-danger btncolorblanco">
                            <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
        </table>
@endsection
@section('titulo','Nivel Academico')
