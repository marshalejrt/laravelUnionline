@extends('plantilla.principal')
@section('title')
    <title>UNIONLINE - Universidad del Futuro</title>
@endsection
@section('tituloencabezado')
    Universidad del Futuro
@endsection
@section('TituloPrincipal')
    Administración de Usuarios
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
                <form action="{{route('agregarUsuario')}}" method="post">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    <fieldset>
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="email">email</label>
                                        <input class="form-control" id="email" name="email" type="text" value="{{old('email')}}">
                                    </div>
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="nombre">Nombre</label>
                                        <input class="form-control" id="nombre" name="nombre" type="text" value="{{old('nombre')}}">
                                        <input type="hidden" id="operacion" name="operacion"  value="AGREGA" >
                                        <input type="hidden" id="id" name="id" value=""  >
                                    </div>
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="apellido">Apellido</label>
                                        <input class="form-control" id="apellido" name="apellido" type="text" value="{{old('apellido')}}">
                                    </div>
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="password">Contraseña</label>
                                        <input class="form-control" id="password" name="password" type="password">
                                    </div>
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="password_confirmation">Confirmar
                                            Contraseña</label>
                                        <input class="form-control" id="password_confirmation"
                                               name="password_confirmation" type="password">
                                    </div>
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="tipousuario_id">Tipo de Usuario</label>
                                        <select class="form-control" id="tipousuario_id" name="tipousuario_id">
                                            <option></option>
                                            @foreach($tipos_usuario as $tipo_usuario)
                                                <option value="{{$tipo_usuario->id}}">{{$tipo_usuario->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <p class="margin-top-no">
                                        <button type="submit"  class="btn btn-green waves- aceptar">Agregar</button>
                                        <button type="submit" style="display: none;" onclick="{{$estamodificando=true}}" class="btn btn-brand-accent waves-attach modificar">Modificar</button>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                {{--<h2 class="content-sub-heading">Tables within Cards</h2>--}}
                <div class="card usuarios_registrados" name="usuarios_registrados">
                    <div class="card-main">
                        <div class="card-inner margin-bottom-no">
                            <p class="card-heading">Usuarios Registrados</p>

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
                                                                        <a class="waves-attach modificarUsuario" data-id="{{$usuario->id}}" data-nombre="{{$usuario->nombre}}" data-apellido="{{$usuario->apellido}}" data-tipousuario_id="{{$usuario->tipousuario_id}}"  data-email="{{$usuario->email}}"><span class="icon margin-right-sm">build</span>&nbsp;Modificar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="waves-attach" onclick='{{$mensaje="¿Está seguro de eliminar éste Usuario?"}};{{$accion=route('eliminarUsuario', ['id'=>$usuario->id])}};' href="#msgbox" data-backdrop="static" data-toggle="modal"><span class="icon margin-right-sm">delete</span>&nbsp;Eliminar</a>
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

            </section>
        </div>
    </div>
    @include('contenidos.mensaje')
@endsection

@section('titulopie')
    Copyright Ejrodriguez - 2016
@endsection
