<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
    <!-- Main menu toggle -->
    <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">Ocultar Menu</span></button>

    <div class="navbar-inner">
        <!-- Main navbar header -->
        <div class="navbar-header">

            <!-- Logo -->
            <a href="index.php" class="navbar-brand">
                <strong>Sofnet</strong>ERP
            </a>

            <!-- Main navbar toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

        </div> <!-- / .navbar-header -->

        <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
            <div>
                <ul class="nav navbar-nav">
                    <li>
                        <a id="nombre_empresa"><?php echo $_SESSION['empresa_def_nom']; ?></a>
                    </li>
                </ul> <!-- / .navbar-nav -->
                <div class="right clearfix">
                    <ul class="nav navbar-nav pull-right right-navbar-nav">

                        <!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================
                        
                                                                                Navbar Icon Buttons
                        
                                                                                NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.
                        
                                                                                Classes:
                                                                                * 'nav-icon-btn-info'
                                                                                * 'nav-icon-btn-success'
                                                                                * 'nav-icon-btn-warning'
                                                                                * 'nav-icon-btn-danger' 
                        -->

                        <!-- /3. $END_NAVBAR_ICON_BUTTONS -->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empresas Disponibles</a>

                            <?php if($fun->PaginaActual() != "fc_new_egreso"){echo $fun->getempresas(); }?>  

                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                <img src="../assets/img/usuario.png" alt="">
                                <span><?php echo $_SESSION['nombre']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                    <li><a href="perfil.php"><i class="dropdown-icon fa fa-user"></i>&nbsp;&nbsp;Perfil <!--<span class="label label-warning pull-right">new</span> --></a></li>
<!--                                <li><a href="#">Account <span class="badge badge-primary pull-right">new</span></a></li>-->
<!--                                <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>-->
                                <li class="divider"></li>
                                <li><a href="cerrar.php"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul> <!-- / .navbar-nav -->
                </div> <!-- / .right -->
            </div>
        </div> <!-- / #main-navbar-collapse -->
    </div> <!-- / .navbar-inner -->
</div>

