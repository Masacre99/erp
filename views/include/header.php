<!-- Tab Mobile View Header -->
<header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="inicio" class=""> </a>
        </div>
       <!--  <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul> -->
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
        
     



        <ul class="navbar-nav flex-row ml-lg-auto">
            
           <!--  <li class="nav-item  d-lg-block d-none">
                <form class="form-inline" role="search">
                    <input type="text" class="form-control search-form-control" placeholder="Search...">
                </form>
            </li> -->

         <!--    <li class="nav-item dropdown app-dropdown  ml-lg-4 mr-lg-2 order-lg-0 order-2">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="appDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bulb"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="appDropdown">
                    <a class="dropdown-item" href="ordenes">
                        <i class="flaticon-commerce"></i><span>Mis ordenes</span>
                    </a>
                    <a class="dropdown-item" href="usuarios">
                        <i class="flaticon-users"></i><span>Usuarios</span>
                    </a>
                    <a class="dropdown-item" href="productos">
                        <i class="flaticon-package"></i><span>Productos</span>
                    </a>
                </div>
            </li> -->


            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <!-- <a class="dropdown-item" href="miPerfil">
                        <i class="mr-1 flaticon-user-6"></i> <span>Mi perfil</span>
                    </a>
                    <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="<?php echo $server?>salir">
                        <i class="mr-1 flaticon-power-button"></i> <span>Cerrar sesión</span>
                    </a>
                </div>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->