<ul class="nav nav-tabs nav-tabs-solid bg-transparent border-bottom mb-3">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('profile-settings') ? 'active' : '' }}
        {{ Request::is('notification-settings') ? 'active' : '' }}"
            href="{{ url('profile-settings') }}"><i class="ti ti-settings me-2"></i>Paramètres</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('detail-basique') ? 'active' : '' }}" href="detail-basique"><i
                class="ti ti-world-cog me-2"></i>Détail basique</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('resume-profile') ? 'active' : '' }}" href="resume-profile"><i
                class="ti ti-device-ipad-horizontal-cog me-2"></i>Résumé
            profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('info-pro') ? 'active' : '' }}" href="info-pro"><i
                class="ti ti-server-cog me-2"></i>Infos
            professionnelle</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('emploi-profile') ? 'active' : '' }}" href="emploi-profile"><i
                class="ti ti-settings-dollar me-2"></i>Emplois
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('education-profile') ? 'active' : '' }}" href="education-profile"><i
                class="ti ti-settings-2 me-2"></i>Éducation
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('project-profile') ? 'active' : '' }}" href="project-profile"><i
                class="ti ti-settings-2 me-2"></i>Projets
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('skills-profile') ? 'active' : '' }}" href="skills-profile"><i
                class="ti ti-settings-2 me-2"></i>Compétences clés
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('cv-profile') ? 'active' : '' }}" href="cv-profile"><i
                class="ti ti-settings-2 me-2"></i>CV (Curriculum Vitae)
        </a>
    </li>
</ul>
