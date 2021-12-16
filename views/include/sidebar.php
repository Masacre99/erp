<div class="sidebar-wrapper sidebar-theme">

    <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

    <nav id="sidebar">
        <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
            <li class="nav-item d-flex">
                <a href="inicio" class="navbar-brand">
                    <img src="<?php echo $server;?>views/src/assets/img/logo.svg" alt="logo" id="imgLogo">
                </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu"></li>

            <li class="menu">
                <a href="<?php echo $server ?>inicio" <?php echo ($url[0] == 'inicio') ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-computer-6"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <?php if ($_SESSION['id_rol'] == 1) : ?>

                <li class="menu">
                    <a href="<?php echo $server ?>usuarios" <?php echo ($url[0] == 'usuarios') ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-users"></i>
                            <span>Usuarios</span>
                        </div>
                    </a>
                </li>


                <li class="menu">
                    <a href="<?php echo $server ?>clientes" <?php echo ($url[0] == 'clientes' || $url[0] == 'addCliente' || $url[0] == 'alumnos' || $url[0] == 'verCompania') ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-building-1"></i>
                            <span>Clientes</span>
                        </div>
                    </a>
                </li>
                
            <?php else : ?>
               


            <?php endif; ?>

        </ul>
    </nav>

</div>