@extends('plantilla.principal')
@section('title')
    <title>UNIONLINE - Universidad del Futuro</title>
@endsection
@section('tituloencabezado')
    Universidad del Futuro
@endsection
@section('TituloPrincipal')
    Administración de Asignaturas
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
                <form action="{{route('agregarAsignatura')}}" method="post">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    <fieldset>
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="nombre">Nombre</label>
                                        <input class="form-control" id="nombre" name="nombre" type="text" value="{{old('nombre')}}">
                                        <input type="hidden" id="operacion" name="operacion"  value="AGREGA" >
                                        <input type="hidden" id="id" name="id" value=""  >
                                    </div>
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="valor">Valor</label>
                                        <input class="form-control" id="valor" name="valor" type="text" value="{{old('valor')}}">
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
                <div class="card asignaturas_registrados" name="asignaturas_registrados">
                    <div class="card-main">
                        <div class="card-inner margin-bottom-no">
                            <p class="card-heading">Asignaturas Registradas</p>

                            <div class="card-table">
                                <div class="">
                                    <table class="table" title="Asignaturas Registradas">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Valor</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($asignaturas as $asignatura)
                                                <tr>
                                                    <td id="{{$asignatura->id}}">{{$asignatura->nombre}}</td>
                                                    <td id="{{$asignatura->id}}">{{$asignatura->valor}}</td>
                                                    <td id="{{$asignatura->id}}">
                                                        <ul class="nav nav-list margin-no pull-right">
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle text-black waves-attach" data-toggle="dropdown"><span style="z-index: 0" class="icon">view_module</span></a>
                                                                <ul class="dropdown-menu dropdown-menu-right" style="   ">
                                                                    <li>
                                                                        <a class="waves-attach modificarAsignatura" data-id="{{$asignatura->id}}" data-nombre="{{$asignatura->nombre}}" data-valor="{{$asignatura->valor}}"><span class="icon margin-right-sm">build</span>&nbsp;Modificar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="waves-attach" onclick='{{$mensaje="¿Está seguro de eliminar esta Asignatura?"}};{{$accion=route('eliminarAsignatura', ['id'=>$asignatura->id])}};' href="#msgbox" data-backdrop="static" data-toggle="modal"><span class="icon margin-right-sm">delete</span>&nbsp;Eliminar</a>
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
