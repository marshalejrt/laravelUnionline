@extends('plantilla.principal')
@section('title')
    <title>UNIONLINE - Universidad del Futuro</title>
@endsection
@section('tituloencabezado')
    Universidad del Futuro
@endsection
@section('TituloPrincipal')
    Inscripción de Materias
@endsection
@section('javascript')
    <script src="js/funcionesGenerales.js"></script>
    <script>
        @if(count($errors->all())>1)
        $(function () {
                    content = "<ul>";
                    @foreach($errors->all() as $error)
                        content += "<li>{{$error}}</li>";
                    @endforeach
                    content += "</ul>";
                    $('body').snackbar({
                        alive: 4000,
                        content: content
                    });
                });
        @endif
    </script>
@endsection
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
            <section class="content-inner margin-top-no">
                <div class="card usuarios_registrados" name="usuarios_registrados">
                    <div class="card-main">
                        <div class="card-inner margin-bottom-no">
                            <p class="card-heading">Lista de Estudiantes</p>

                            <div class="card-table">
                                <div class="">
                                    <table class="table" title="Usuarios Registrados">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Tipo Usuario</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <script>

                                        </script>
                                        @foreach($usuarios as $usuario)
                                            <tr>
                                                <td id="{{$usuario->id}}">{{$usuario->nombre}}</td>
                                                <td id="{{$usuario->id}}">{{$usuario->apellido}}</td>
                                                <td id="{{$usuario->id}}">{{$usuario->tipousuario->descripcion}}</td>
                                                <td id="{{$usuario->id}}">
                                                    <ul class="nav nav-list margin-no pull-right">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle text-black waves-attach" data-toggle="dropdown"><span style="z-index: 0" class="icon">view_module</span></a>
                                                            <ul class="dropdown-menu dropdown-menu-right" style="   ">
                                                                <li>
                                                                    <a class="waves-attach inscribirMaterias" data-id="{{$usuario->id}}" data-nombre="{{$usuario->nombre}}" data-apellido="{{$usuario->apellido}}" data-tipousuario_id="{{$usuario->tipousuario_id}}"  data-email="{{$usuario->email}}"><span class="icon margin-right-sm">build</span>&nbsp;Inscribir Materia</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>


                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="card-action">
                                        <div class="card-action-btn pull-right">
                                            <a class="btn btn-flat waves-attach" href="javascript:void(0)"><span class="icon">chevron_left</span></a>
                                            <a class="btn btn-flat waves-attach" href="javascript:void(0)"><span class="icon">chevron_right</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="modal modal-va-middle fade" id="materias" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <h2 class="modal-title">Listado de Materias Disponibles</h2>
                            </div>
                            <ul class="nav">
                                @foreach($asignaturas as $asignatura)
                                    <li>
                                        <a class="margin-bottom-sm waves-attach" data-dismiss="modal" href="javascript:void(0)">
                                            <div class="avatar avatar-inline margin-left-sm margin-right-sm">
                                                <span class="icon icon-lg text-black">add</span>
                                            </div>
                                            <span data-id="{{$asignatura->id}}" data-nombre="{{$asignatura->nombre}}" data-valor="{{$asignatura->valor}}"  class="margin-right-sm text-black Materia">{{$asignatura->nombre}}</span>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
    @include('contenidos.mensaje')
@endsection

@section('titulopie')
    Copyright Ejrodriguez - 2016
@endsection
