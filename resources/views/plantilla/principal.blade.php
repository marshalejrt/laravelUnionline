<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
    {{--<title>Login - Material</title>--}}
    @yield('title')
    <!-- css -->
    <link href="css/base.min.css" rel="stylesheet">
    <link href="css/project.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    @yield('style')
    @yield('javascript')
</head>
<body class="page-brand">
@include('contenidos.encabezado_principal')
@include('contenidos.menu')
<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
                    <h1 class="content-heading">@yield('TituloPrincipal')</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('contenido')
    </div>
</main>
@yield('mensaje')
<!-- js -->
@include('contenidos.pie')
<script src="js/base.min.js"></script>
<script src="js/project.min.js"></script>
</body>
</html>