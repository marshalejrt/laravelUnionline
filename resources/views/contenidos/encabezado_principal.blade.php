<header class="header header-transparent header-waterfall ui-header">
    <ul class="nav nav-list pull-left">
        <li>
            <a data-toggle="menu" href="#ui_menu">
                <span class="icon icon-lg">menu</span>
            </a>
        </li>
    </ul>

    <a class="header-logo header-affix-hide margin-left-no margin-right-no" data-offset-top="213" data-spy="affix" href="{{route('index')}}">@yield('tituloencabezado')</a>
    <span class="header-logo header-affix margin-left-no margin-right-no" data-offset-top="213" data-spy="affix">@yield('TituloPrincipal')</span>
    <ul class="nav nav-list pull-right">
        <li class="dropdown margin-right">
            <a class="dropdown-toggle padding-left-no padding-right-no" data-toggle="dropdown">
                <span class="access-hide">@yield('usuario')</span>
                <span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a class="padding-right-lg waves-attach" href="javascript:void(0)"><span class="icon icon-lg margin-right">account_box</span>Configurar Perfil</a>
                </li>
                <li>
                    <a class="padding-right-lg waves-attach" href="javascript:void(0)"><span class="icon icon-lg margin-right">add_to_photos</span>Subir Foto</a>
                </li>
                <li>
                    <a class="padding-right-lg waves-attach" href="page-login.html"><span class="icon icon-lg margin-right">exit_to_app</span>Salir</a>
                </li>
            </ul>
        </li>
    </ul>
</header>