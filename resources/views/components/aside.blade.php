<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Inicio -->
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="bi bi-house"></i>
                <span>Inicio</span>
            </a>
        </li>

        <!-- Receta -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('receta') }}">
                <i class="bi bi-clipboard"></i><span>Crear Receta</span>
            </a>
        </li>

        <!-- Planes -->
        <li class="nav-item active">
            <a class="nav-link collapsed active" data-bs-target="#components-nav" data-bs-toggle="collapse"
                href="#">
                <i class="bi bi-flag"></i><span>Planes</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="dropdown-item">
                    <a href="{{ route('plan-nutricional') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Plan Nutricional</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('ejercicio') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Plan de Ejercicios</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Consulta -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('consultas') }}">
                <i class="bi bi-chat-square-text"></i><span>Consultas</span>
            </a>
        </li>


        <!-- Estadisticas -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-graph-up-arrow"></i><span>Estadisticas</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="dropdown-item">
                    <a href="{{ route('logros') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Logros y Metas</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('entrenamiento') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Entrenamiento</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('peso') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Peso</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Valor de alimentos -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('valor_nutricional') }}">
                <i class="bi bi-file-text"></i><span>Valor de alimentos</span>
            </a>
        </li>

        <!-- Configuracion -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Configuración</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="dropdown-item">
                    <a href="{{ route('alarma') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Configuar Alarma</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('cuenta') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Configuarar Cuenta</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('datos') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Datos fisicos</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('edit') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Actualizar d.fisicos</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('psicos') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Datos psicologicos</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('editp') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">Actualizar d.psicologicos</span>
                    </a>
                </li>
            </ul>
        </li> {{----}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-navi" data-bs-toggle="collapse" href="#">
                <i class="bi bi-clipboard2-data"></i><span>Especialista</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-navi" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="dropdown-item">
                    <a href="{{ route('entrenador') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">P.Entrenador</span>
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('nutricionistas') }}">
                        <i class="bi bi-circle"></i><span class="dropdown-item-color">P.nutricionistas</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside>
