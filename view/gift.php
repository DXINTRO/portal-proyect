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
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/mainbody.css" />

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
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php  ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
            <section id="main" class="container 75%">
                <header>
                    <h2>Cambio de turno</h2>
                    <p>Aquí podrás cambiar el turno de 17:30 o de 19:00 del día domingo.</p><br/>
                    <p>Recuerda le a tu compañero que puede  enviar los turnos desde las 12:00 hasta 21.00 del día domingo.</p>
                </header>
                <div class="12u">
                    <!-- Lists -->
                    <section class="box">
                        <form action="#" method="post" accept-charset="UTF-8">
                            <div class="row uniform 50%">
                                <div class="6u 12u(mobilep)">
                                    <ul class="alt">
                                        <li><input type="text" name="name"  value="juan perez" readonly placeholder="Name" /></li>
                                        <li><label>&nbsp Cambia turno a:</label></li></ul>
                                </div>
                                <div class="6u 12u(mobilep)"><!-- 347.133 x 139.05 -->
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">Error:</span>
                                        Enter a valid email address
                                    </div>
                                </div>

                            </div>
                            <div class="row uniform 50%">
                                <ul class="actions">
                                    <li><input type="email" name="email" id="email" size="30" value=""  placeholder="Email" /></li>
                                    <li><input type="text" name="subject" id="subject" size="6" value="" placeholder="Piocha" /></li>
                                    <li><button class="btn btn-info btn-large"> Buscar empaque  <i class="fa fa-search"></i></button></li>

                                </ul>
                            </div>
                            <hr></hr>

                            <div class="row uniform">
                                <div class="12u">
                                    <ul class="actions align-center">
                                        <li><input type="submit" value="Cambiar" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <hr></hr>				
                        <div class="row uniform 50%">
                            <div class="table-responsive">
                                <table class="table table-condensed" >
                                    <thead>
                                        <tr class="success">
                                            <th >#</th>
                                            <th>Piocha</th>
                                            <th>Usuario</th>
                                            <th>Correo</th>
                                            <th>ID liberacion</th>
                                            <th>Tiempo</th>
                                            <th class="danger">Cancelar</th>
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
                                            <td align="right"><button class="btn btn-danger btn-small"><i class="icon-repeat"></i> Cancelar</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div></div>
                    </section>
                </div>
            </section>

            <!-- Footer -->
            <?php include_once ("..//model/footer.php"); ?>
        </div>
        <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
    </body>
</html>	