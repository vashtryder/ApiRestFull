@extends('plantilla.plantilla')

@section('contenido')
<p><a href="{{ route('anio_index') }}">Lista Año Academico</a></p>
<p><a href="{{ route('grado_index') }}">Lista Grado Academico</a></p>
<p><a href="{{ route('seccion_index') }}">Lista Seccion Academico</a></p>
<p><a href="{{ route('nivel_index') }}">Lista Nivel Academico</a></p>

@endsection

@section('titulo','Index')
