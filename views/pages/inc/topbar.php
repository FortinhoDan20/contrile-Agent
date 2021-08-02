    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php?p=home">Control System</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> Welcome :   <?= $user; ?></a> </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php?p=profile&id=<?=$id?>">
                            <span class="text-success">
                                <i class="fas fa-user"></i>
                            </span> 
                            Profil
                        </a>
                        <a class="dropdown-item" 
                        href="index.php?p=edit_password&id=<?php echo $id?>">
                        <span class="text-info"><i class="fas fa-lock"></i></span>
                         Changer Mot de passe</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logout.php"><span class="text-danger"><i class="fas fa-power-off"></i></span> Se Déconnecter</a>
                    </div>
                </li>
            </ul>
    </nav>
<div id="layoutSidenav">