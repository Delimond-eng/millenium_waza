<div class="widget settings-menu mb-0">
    <ul>
        <li class="nav-item">
            <a href="{{ url('/settings.users') }}" class="nav-link {{ request()->is("settings.users") ? "active": "" }}">
                <i class="fe fe-user"></i> <span>Utilisateurs</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="site-settings.html" class="nav-link">
                <i class="fe fe-settings"></i> <span>Sites</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/settings.fonctions') }}" class="nav-link {{ request()->is("settings.fonctions") ? "active": "" }}">
                <i class="fe fe-settings"></i> <span>Fonctions</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="role-settings.html" class="nav-link">
                <i class="fe fe-credit-card"></i> <span>Roles</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="acteurs-settings.html" class="nav-link">
                <i class="fe fe-file"></i> <span>Acteurs</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="ports-settings.html" class="nav-link">
                <i class="fe fe-layers"></i> <span>Ports</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="moyen-expedition-settings.html" class="nav-link">
                <i class="fe fe-layers"></i> <span>Moyen d'expedition</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="mission-setting.html" class="nav-link">
                <i class="fe fe-aperture"></i> <span>Missions</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="infos-settings.html" class="nav-link">
                <i class="fe fe-file-text"></i> <span>Mes infos</span>
            </a>
        </li>

    </ul>
</div>
