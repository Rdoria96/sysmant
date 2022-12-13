    <li class="side-menus">
        <a class="nav-link" href="/">
            <i class=" fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span>
        </a>
    </li>
    @can('crear-rol')
    <li class="nav-item">
        <a class="nav-link collapsed" href="/roles" >
        <i class="fas fa-fw fa-user-lock"></i>
        <span>Roles</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/usuarios" >
        <i class="fas fa-fw fa-users-cog"></i>
        <span>Usuarios</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/tecnicos" >
            <i class="fab fa-fw  fa-black-tie"></i>
            <span>Tecnicos</span>
        </a>
    </li>
    @endcan
    <li class="nav-item">
        <a class="nav-link collapsed" href="/solicitudes" >
        <i class="fas fa-columns"></i>
        <span>Solicitudes</span>
        </a>
    </li>




