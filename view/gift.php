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
        <title>Gift</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/icon/gift.png" />
        <link rel="stylesheet" href="assets/css/form.css" />
        <link rel="stylesheet" href="assets/dist/bootstrap-table.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body onload="verMiscambios();">
        <div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress"></div>
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                <?php echo "<input id='piocha'  type='text'  value=' " . $header . "' readonly />" ?>  
                <nav id="nav">
                    <ul>
                        <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                        <li> <a href="#" class="icon fa-angle-double-down"><i class="fa fa-bars"></i> Menu</a>
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php      ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
            <section id="main" class="container 75%">
                <header >
                    <header>
                        <h2>Cambio de turno</h2>
                        <p>Aquí podrás cambiar el turno de 17:30 o de 19:00 del día domingo.<br/><small>Recuerda le a tu compañero que puede  enviar los turnos desde las 12:00 hasta 21.00 del día domingo.</small></p><br/>
                    </header>
                    <img style="width:133px" src="images/gift-world-blue.png">
                </header>
                <!-- Lists -->
                <section class="box">
                    <div class="row uniform">
                        <!-- Appended checkbox -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" id="lblSearh" for="buscar">Buscar por ?</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="search" onclick="oneclick(this)" class="form-control" id="buscar" name="buscar" onkeyup="keyup(this)" placeholder="Ingrese un dato">
                                    <span class="msj"  id="errormsj" >No se encontro nada :(</span>  
                                    <span class="input-group-btn">    
                                        <button class="btn btn-default" id="btnSearh" disabled="disabled" onclick="FormGiftYlayoll($('#buscar'))" type="button"><i class="fa fa-search"></i>&nbsp;Buscar</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                     
                        <div class="form-group">
                            </br>
                            <label class="col-md-4 control-label" id="hand" for="Sradio"><i class="fa fa-hand-o-right"></i></label>
                            <div class="col-md-4">
                                <div class="radio"><i  data-toggle="tooltip" data-placement="top" title="Filtra la busqueda, hazlo por piocha o por correo ;)" class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label for="radios-1" class="checkbox-inline">
                                        <input name="Sradio" id="radios-1"  onclick="Tbusqueda(this)" value="1" type="radio">Correo</label>
                                    <label for="radios-2" class="checkbox-inline">
                                        <input name="Sradio" id="radios-2"  onclick="Tbusqueda(this)" value="2" type="radio">Piocha </label>
                                </div><span class="msj"  id="errormsjradio" >Seleccione un filtro de Búsqueda</span>
                            </div>
                        </div>
                    </div> 

                    </br>
                    <div id="tabledetalles" class="table-responsive">
                        <table id="getmischangers" class="table table-condensed "  data-click-to-select="true"
                               data-single-select="true">
                            <thead>
                                <tr >
                                    <th data-field="state" data-checkbox="true"></th>
                                    <th  data-field="id">Codigo</th>
                                    <th  data-field="Piocha">Piocha</th>
                                    <th   data-field="Nombre">Nombre</th>
                                    <th  data-field="Apellido">Apellido</th>
                                    <th   data-field="Tiempo">Tiempo</th>
                                    <th   data-field="boton">Cancelar</th>
                                </tr></thead>
                               </table>  </div></br>

                    <hr>
                    <div id="disqus_thread"></div>
                    <script>
                        (function () { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = '//portalup.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script></section>
                <!-- Footer -->
            </section>
            <?php include_once ("modal/modal_showDatos.php"); ?>
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
        <script src="assets/dist/bootstrap-table.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
        <script src="assets/js/pace.min.js"></script>   <!--barra carga-->
    </body>
</html>	