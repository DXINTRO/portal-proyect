<div id="main-menu" role="navigation">
    <div id="main-menu-inner">
        <!--        <div class="menu-content top" id="menu-content-empresa">
                     Menu custom content demo
                             Javascript: html/assets/demo/demo.js
                    
                    <div>
                        <div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold">John</span></div>
        
        <?php // echo "<img src=\"" . $_SESSION['empresa_def_logo'] . "\" alt=\"logo sistema\" id=\"logo_empresa\">" ?>
        
                        <br>
                    </div>
                </div>-->
        <ul class="navigation">
            <?php
            if ($_SESSION['transporte'] == 0) {
                echo'<li>
                <a href="index.php"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Inicio</span></a>
                 </li>';
            }

            if ($_SESSION['fact_add'] == 1) {
                echo '<li class="mm-dropdown">
                <a href="#"><i class="menu-icon fa fa-pencil-square-o fa-fw"></i><span class="mm-text">Factura Compra</span></a>
                <ul>
                    <li>
                        <a tabindex="-1" href="fc_compra.php"><i class="fa fa-plus-circle fa-fw"></i><span class="mm-text">Agregar</span></a>
                    </li>
                    <li>
                        <a href="fc_listado.php"><i class="fa fa-list fa-fw"></i> Listado</a>
                    </li>
                    <li>
                        <a href="fc_egresos.php"><i class="fa fa-table fa-fw"></i> Egresos</a>
                    </li>
                </ul>
            </li>';
            }

            if ($_SESSION['fact_add'] == 1) {
                echo '<li class="mm-dropdown">
                <a href="#"><i class="menu-icon  fa fa-pencil-square-o fa-fw"></i><span class="mm-text">Factura Venta</span></a>
                <ul>
                    <li>
                        <a href="fv_venta.php"><i class="fa fa-plus-circle fa-fw"></i> Agregar</a>
                    </li>
                    <li>
                        <a href="fv_listado.php"><i class="fa fa-list fa-fw"></i> Listado</a>
                    </li>
                    <li>
                        <a href="fv_ingresos.php"><i class="fa fa-table fa-fw"></i> Ingresos</a>
                    </li>
                </ul>
            </li>';
            }

            if ($_SESSION['tr_planilla'] == 1) {
                echo '<li id="menu_tr" class="mm-dropdown">
                <a href="#"><i class="menu-icon fa fa-truck fa-fw"></i><span class="mm-text">Transporte</span></a>
                <ul>
                    <li>
                        <a href="tr_planilla.php"><i class="fa fa-file-text fa-fw"></i> Planilla</a>
                    </li>
                    <li>
                        <a href="tr_chofer.php"><i class="fa fa-user  fa-fw"></i> Chofer</a>
                    </li>
                </ul>
            </li>';
            }

            if ($_SESSION['reporte'] == 1) {
                echo ' <li class="mm-dropdown">
                <a href="#"><i class="menu-icon fa  fa-calendar-o fa-fw"></i><span class="mm-text">Reportes</span></a>
                <ul>
                    <li>
                        <a href="rep_historial.php"><i class="fa fa-list-alt fa-fw"></i> Historial</a>
                    </li>
                    <li>
                        <a href="rep_compras.php"><i class="fa fa-chevron-circle-right fa-fw"></i> Compras</a>
                    </li>
                    <li>
                        <a href="rep_ventas.php"><i class="fa fa-chevron-circle-left fa-fw"></i> Ventas</a>
                    </li>
                    <li>
                        <a href="rep_transporte.php"><i class="fa fa-list-alt fa-fw"></i> Transporte</a>
                    </li>
                    <li>
                        <a href="rep_combustible.php"><i class="fa fa-fire fa-fw"></i> Combustible</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-slack fa-fw"></i><i>Pendiente</i></a>
                    </li>
                </ul>
            </li>';
            }

            if ($_SESSION['config'] == 1) {
                echo '<li class="mm-dropdown">
                <a href="#"><i class="menu-icon fa fa-wrench fa-th"></i><span class="mm-text">Configuracion</span></a>
                <ul>
                    <li>
                        <a href="conf_usuario.php"><i class="fa fa-user fa-fw"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="conf_clieprove.php"><i class="fa fa-users fa-fw"></i> Clientes y Proveedores</a>
                    </li>
                    <li>
                        <a href="conf_choferclasi.php"><i class="fa fa-users fa-fw"></i> Choferes y Clasificacion</a>
                    </li>
                    <li>
                        <a href="conf_vehiculo.php"><i class="fa fa-truck fa-fw"></i> Vehiculos </a>
                    </li>
                    <li>
                        <a href="conf_empresa.php"><i class="fa fa-hospital-o fa-fw"></i> Empresas</a>
                    </li>
                </ul>
            </li>';
            }
            if ($_SESSION['develop'] == 1) {
                echo '<li class="mm-dropdown">
                <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Develop</span></a>
                <ul>
                    <li>
                        <a href="dev_respaldo.php"><i class="fa fa-gears fa-fw"></i> Respaldos</a>
                    </li>
                </ul>
            </li>';
            }
            ?>
        </ul> <!-- / .navigation -->
        <div class="menu-content">
            <!--            <a href="pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</a>-->
        </div>
    </div> <!-- / #main-menu-inner -->
</div>