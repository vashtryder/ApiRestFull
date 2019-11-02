@extends('plantilla.plantilla')
@section('titulo','confirme la eliminacion del registro')
@section('contenido')
<div class="contaniner py-5">
    <h1>¿Deseas eliminar el registro del nivel {{ $nivel->nom_nivel }}?</h1>

    <form action="{{ route('nivel.destroy', $nivel->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="redondo btn btn-info">
            <i class="fas fa fa-trash-alt"></i> Eliminar
        </button>
    <a href="{{ route('cancelar_nivel') }}" class="redondo btn btn-danger">
            <i class="fas fa fa-ban"></i> Cancelar
    </a>
    </form>
</div>

@endsection
