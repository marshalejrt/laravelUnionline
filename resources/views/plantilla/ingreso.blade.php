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
    @yield('style')
    @yield('script')
</head>
<body class="page-brand">
@include('contenidos.encabezado_login')
<main class="content">
    @yield('contenido')
</main>
<!-- js -->
@include('contenidos.pie')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/base.min.js"></script>
<script src="js/project.min.js"></script>
</body>
</html>