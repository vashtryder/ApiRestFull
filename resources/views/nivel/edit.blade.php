@extends('plantilla.plantilla')

@section('contenido')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Colegio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('nivel.index') }}">nivel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </div>

    <form method="POST" action="{{ route('nivel.update', $nivel->id ) }}">
        @csrf
        @method('PUT')
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                    <h3>Bienvenid@</h3>
                    <p>Por favor llena los datos correctamente en el sistema!</p>

                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Editar Registro</h3>
                            <div class="row register-form">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="nom_nivel" name="nom_nivel" placeholder="nivel Academico" required="" value="{{ $nivel->nom_nivel }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row register-form">

                                <div class="col-md-12"><button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
                                    <a href="{{ route('cancelar_nivel') }}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('titulo','Editar nivel Academico')
