<?php
session_start();
include_once ("..//controller/clock.php");

if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {
    if ($_SESSION['substatus'] == 0) {//si esta suspendido que lo envia aki
        header("enviaraHTMLsubcripcion para que pague.php");
    }
    $header = $_SESSION['piochaid'];
    $name = $_SESSION['displayname'];
    $correo = $_SESSION['email'];
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Toma de turnos</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/icon/clock.png" />
        <link href="assets/css/bootstrap-toggle.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body onload="clockInit(clockLocalStartTime, clockServerStartTime);clockOnLoad();">
        <div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress"></div>
        <div id="page-wrapper"> 
            <!-- Header -->
            <header id="header">
<?php echo "<input id='piocha'  type='text'  value=' " . $header . "' readonly />" ?>  
                <nav id="nav">
                    <ul>
                        <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                        <li> <a href="#" class="icon fa-angle-down"><i class="fa fa-bars"></i> Menu</a>
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php  ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
            <section id="main" class="container 75%">
                <header>
                    <h2 style="font-weight: bold; text-shadow: 0px 0;">Toma de turnos</h2>
                    <br>
                    <span id="liveclock" ><?php echo(clockTimeString($Today))?></span> </header>
                <div class="box">
                    <form action="../controller/tomadeturnos.class.php" class="form-horizontal" method="post" accept-charset="UTF-8">
                        <fieldset>
                            <!-- Form Name -->
                            <legend><?php echo $name . " " . $correo ?>
                                <br>Mis turnos son:</legend>
                            <ul class="actions fit ">
                                <li><div class="form-group">
                                        <div  class="select-wrapper left">
                                            <select name="category" class="category">
                                                <option value="">- Dias -</option>
                                                <option value="0">Lunes</option>
                                                <option value="1">Martes</option>
                                                <option value="2">Miercoles</option>
                                                <option value="3">Jueves</option>
                                                <option value="4">Viernes</option>
                                                <option value="5">Sabado</option>
                                                <option value="6">Domingo</option>
                                            </select>
                                        </div>
                                    </div></li>
                                <li class="imgfila"><center><img alt="primary"    SRC="images/pri1.gif" /></center></li>
                                <li><div class="form-group">
                                        <div  class="select-wrapper right">
                                            <select name="category" class="category">
                                                <option value="">- Turnos -</option>
                                            </select>
                                        </div></div></li>
                            </ul>
                            <ul class="actions fit">
                                <li><div class="form-group">
                                        <div  class="select-wrapper left">
                                            <select name="category" class="category">
                                                <option value="">- Dias -</option>
                                                <option value="0">Lunes</option>
                                                <option value="1">Martes</option>
                                                <option value="2">Miercoles</option>
                                                <option value="3">Jueves</option>
                                                <option value="4">Viernes</option>
                                                <option value="5">Sabado</option>
                                                <option value="6">Domingo</option>
                                            </select>
                                        </div>
                                    </div></li>
                                <li class="imgfila"><center><img alt="primary"    SRC="images/pri2.gif" /></center></li>
                                <li><div class="form-group">
                                        <div  class="select-wrapper right">
                                            <select name="category" class="category">
                                                <option value="">- Turnos -</option>
                                            </select>
                                        </div></div></li>
                            </ul><ul class="actions fit">
                                <li><div class="form-group">
                                        <div  class="select-wrapper left">
                                            <select name="category" class="category">
                                                <option value="">- Dias -</option>
                                                <option value="0">Lunes</option>
                                                <option value="1">Martes</option>
                                                <option value="2">Miercoles</option>
                                                <option value="3">Jueves</option>
                                                <option value="4">Viernes</option>
                                                <option value="5">Sabado</option>
                                                <option value="6">Domingo</option>
                                            </select>
                                        </div>
                                    </div></li>
                                <li class="imgfila"><center><img alt="primary"    SRC="images/pri3.gif" /></center></li>
                                <li><div class="form-group">
                                        <div  class="select-wrapper right">
                                            <select name="category" class="category">
                                                <option value="">- Turnos -</option>
                                            </select>
                                        </div></div></li>
                            </ul>
                            <hr>
                            /*turnos opcionales*/
                            <hr>
                            <div class="row-uniform"><img id="more" SRC="images/more.png" onmouseover="this.src = 'images/more1.png';" onmouseout="this.src = 'images/more.png';" ALT="Agregar fila" ></div>
                            <div class="row uniform">
                                <div class="actions align-center">
                                    <input type="submit" value="---Enviar---" />
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="toggle-trigger" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                </div>
                                <br />
                                <div class="actions align-center">
                                    <iframe width="100%" height="315" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"  src="planilla/disponibilidad.php"></iframe>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </section>
            <!-- Footer -->
<?php include_once ("..//model/footer.php"); ?>
        </div>
        <!-- Scripts -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap-toggle.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
        <script src= "assets/js/clock.js"></script>
        <script src="assets/js/pace.min.js"></script>
    </body>
</html>