    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <a class="nav-link" href="index.php?p=home">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de board
                    </a>
                    <div class="sb-sidenav-menu-heading">GESTION AGENT</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFaculte"
                                aria-expanded="false" aria-controls="collapseFaculte">
                            <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                                Agents
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFaculte" aria-labelledby="headingOne"
                                data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                                    <a class="nav-link" href="index.php?p=agent">
                                        <i class="fa fa-university"></i>
                                        &nbsp;Liste des agents
                                    </a>

                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">
                                GESTION UTILISATEUR
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                                aria-expanded="false" aria-controls="collapseUsers">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i>
                                </div>
                                Utilisateurs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseUsers" aria-labelledby="headingOne"
                                data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?p=role">
                                        <span class="text-warning">
                                            <i class="fas fa-user"></i>
                                        </span>&nbsp; Rôle Utilisateur</a>                                    <a class="nav-link" href="index.php?p=home">
                                        <span class="text-primary"><i class="fas fa-list"></i></span>&nbsp; Liste
                                        utilisateurs</a>

                                </nav>
                            </div>

                        </div>
                    </div>

        </nav>
    </div>
</div>

