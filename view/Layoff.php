<?php
session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {
    if ($_SESSION['substatus'] == 0) {//si esta suspendido que lo envia aki
        header("enviaraHTMLsubcripcion para que pague.php");
    }
    $header = $_SESSION['piochaid'];
}
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Layoff</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/icon/smile_sad.png" />
        <link rel="stylesheet" href="assets/css/form.css" />


    </head>
    <body>
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                <?php echo "<input id='piocha'  type='text'  value=' " . $header . "' readonly />" ?>  
                <nav id="nav">
                    <ul>
                        <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                        <li> <a href="#" class="icon fa-angle-double-down"><i class="fa fa-bars"></i> Menu</a>
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php   ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
            <section id="main" class="container 75%">
                <header>
                    <center><h2>Suspendidos</h2></center>
                </header>
                
                    <!-- Lists -->
                    <section class="box">
                        <div class="row uniform">
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Lista de Suspendidos.</legend>

                                <!-- Appended checkbox -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" id="lblSearh" for="buscar">Buscar por Nombre:</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                          <input type="search" class="form-control" id="buscar" name="buscar" onkeyup="keyup(this)" placeholder="Ingrese un dato">
                                            <span class="msj" onclick="$(this).hide();" id="errormsj" >No se encontro nada :(</span>
                                             <span class="input-group-btn">
                                               <button class="btn btn-default" id="btnSearh"  onclick="FormGift($('#buscar'))" type="button"><i class="fa fa-search"></i>&nbsp;Buscar</button>
                                            </span>
                                        </div>

                                    </div>
                                </div>

                                <!-- Multiple Radios -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Sradios"><i  data-toggle="tooltip" data-placement="top" title="Filtra la busqueda, hazlo por nombre,piocha o por correo ;)" class="fa fa-info-circle"></i>&nbsp;Buscar por :</label>
                                    <div class="col-md-4">
                                        <div class="radio">
                                            <label for="radios-0">
                                                <input name="Sradio" id="radios-0" onclick="Tbusqueda(this)" value="0" checked="checked" type="radio">Nombre</label>
                                        </div>
                                        <div class="radio">
                                            <label for="radios-1">
                                               <input name="Sradio" id="radios-1"  onclick="Tbusqueda(this)" value="1" type="radio">Correo</label>
                                        </div>
                                        <div class="radio">
                                            <label for="radios-2">
                                                <input name="Sradio" id="radios-2"  onclick="Tbusqueda(this)" value="2" type="radio">Piocha </label>
                                        </div>
                                    </div>

                                </div>

                            </fieldset>
</div>

                       <hr>				
                        <div class="row uniform 50%">
                         
                                <table class="table table-condensed" id="tableblock" >
                                    <thead>
                                        <tr class="success">
                                            <th >#</th>
                                            <th>Piocha</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Desde</th>
                                            <th>Asta</th>
                                            <th>Motivo</th>
                                            <th>Estado</th>
                                            <th  width="130">Opc de bloqueo.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Celda </td>
                                            <td>Celda </td>
                                            <td>Celda </td>
                                            <td>Celda </td>
                                            <td>Celda </td>
                                            <td>Celda </td>
                                            <td>Celda </td>
                                            <td align="right"><div class="btn-group" >   <button type="button" class="btn btn-warning">Action</button>   <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" >     <span class="caret"></span>     <span class="sr-only">Toggle Dropdown</span>   </button>   <ul class="dropdown-menu">     <li><a href="#">S*1 Semana</a></li>     <li><a href="#">S*2 Semana</a></li>     <li><a href="#">S*3 Semana</a></li>     <li><a href="#">Desbloquear</a></li> </ul> </div></td>
                                        </tr>

                                    </tbody>
                                </table> 
                            </div>
                    </section>
                
            </section>

            <!-- Footer -->
            <?php include_once ("..//model/footer.php"); ?>
        </div>
         <!-- Scripts -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/ajax.js"></script>
    
        </body>
        </html>	