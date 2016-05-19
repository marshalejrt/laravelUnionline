@extends('plantilla.ingreso')
@section('title')
    <title>UNIONLINE - Universidad del Futuro</title>
@endsection
@section('tituloencabezado')
    Bienvenido
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
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-push-4 col-sm-6 col-sm-push-3">
                <section class="content-inner">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-header">
                                <div class="card-inner">
                                    <h1 class="card-heading">Ingreso</h1>
                                </div>
                            </div>
                            <div class="card-inner">
                                <p class="text-center">
										<span class="avatar avatar-inline avatar-lg">
											<img alt="Login" src="images/users/avatar-001.jpg">
										</span>
                                </p>
                                <form class="form" action="{{route('ingresar')}}" method="post" >
                                    <div class="form-group form-group-label">
                                        <div class="row">
                                            <div class="col-md-10 col-md-push-1">
                                                <label class="floating-label" for="email">Usuario</label>
                                                <input class="form-control" id="email" name="email" type="text" value="{{old('email')}}">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-label">
                                        <div class="row">
                                            <div class="col-md-10 col-md-push-1">
                                                <label class="floating-label" for="password">Clave</label>
                                                <input class="form-control" id="password" name="password" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-10 col-md-push-1">
                                                {{--<a class="btn btn-block btn-brand waves-attach waves-light">Ingresar</a>--}}

                                                <button type="submit"  class="btn btn-block btn-brand waves-attach waves-light">Ingresar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-10 col-md-push-1">
                                                <div class="checkbox checkbox-adv">
                                                    <label for="ui_login_remember">
                                                        <input class="access-hide" id="ui_login_remember" name="ui_login_remember" type="checkbox">Recordarme
                                                        <span class="checkbox-circle"></span><span class="checkbox-circle-check"></span><span class="checkbox-circle-icon icon">done</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        {{--<p class="margin-no-top pull-left"><a class="btn btn-flat btn-brand waves-attach" href="javascript:void(0)">Need help?</a></p>--}}
                        <p class="margin-no-top pull-right"><a class="btn btn-flat btn-brand waves-attach" href="javascript:void(0)">Crear Una Cuenta</a></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('titulopie')
    Copyright Ejrodriguez - 2016
@endsection