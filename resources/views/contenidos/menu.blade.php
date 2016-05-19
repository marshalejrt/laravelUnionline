<nav aria-hidden="true" class="menu" id="ui_menu" tabindex="-1">
    <div class="menu-scroll">
        <div class="menu-content">
            <a class="menu-logo" >@yield('tituloencabezado')</a>
            <ul class="nav">
                <li>
                    <a class="collaosed waves-attach" data-toggle="collapse" href="#ui_menu_Inscripciones">Inscripciones</a>
                    <ul class="menu-collapse collapse" id="ui_menu_Inscripciones">
                        <li>
                            <a class="waves-attach" href="{{route('inscribirmaterias')}}">Inscribir Materias</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="collaosed waves-attach" data-toggle="collapse" href="#ui_menu_Monitores">Monitoreo</a>
                    <ul class="menu-collapse collapse" id="ui_menu_Monitores">
                        <li>
                            <a class="waves-attach" href="ui-button.html">Mis Asignaturas</a>
                        </li>
                        <li>
                            <a class="waves-attach" href="ui-button-fab.html">Monitorear<small class="margin-left-xs">(Responder Preguntas)</small></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="collapsed waves-attach" data-toggle="collapse" href="#ui_menu_reportes">Reportes</a>
                    <ul class="menu-collapse collapse" id="ui_menu_reportes">
                        <li>
                            <a class="waves-attach" href="ui-avatar.html">Mejores Estudiantes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="collapsed waves-attach" data-toggle="collapse" href="#ui_menu_admin">Administración</a>
                    <ul class="menu-collapse collapse" id="ui_menu_admin">
                        <li>
                            <a class="waves-attach" href="{{route('adminusuarios')}}">Administrar Usuarios</a>
                        </li>
                        <li>
                            <a class="waves-attach" href="{{route('adminasignaturas')}}">Administrar Asignaturas</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>