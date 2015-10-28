<?php
session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
}else  {
if ($_SESSION['substatus'] == 0) {//si esta suspendido que lo envia aki
    header("enviaraHTMLsubcripcion para que pague.php");
}
$header= $_SESSION['piochaid'] ;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>titulo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/icon/users.png" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <div id="page-wrapper">

  <!-- Header -->
  <header id="header">
          <?php echo "<input id='piocha'  type='text'  value=' ". $header."' readonly />" ?>  
	                <nav id="nav">
                    <ul>
                        <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                        <li> <a href="#" class="icon fa-angle-down"><i class="fa fa-bars"></i> Menu</a>
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
  </header>

            <!-- Main -->
            <section id="main" class="container 75%">
                <header>
                    <h2>Cambio de turno </h2>
                    <p>Aqui podras cambiar el turno de 17:30 o de 19:00 del dia domingo.</p><br/>
                    <p>Recuerdale a tu compañero que púede  enviar los turnos desde las 12:00 hasta 21.00 del dia domingo.</p>

                </header>
                <div class="box">
                    <form method="post" action="#">
                        <div class="row uniform 50%">
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="name" id="name" value="juan perez" placeholder="Name" />.
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="email" name="email" id="email" value="" placeholder="Email" />
                            </div>
                        </div>
                        <div class="row uniform 50%">
                            <div class="12u">
                                <input type="text" name="subject" id="subject" value="" placeholder="piocha" /><img src="images/boton_busca_2012.gif"/>
                            </div>
                        </div>
                        <div class="row uniform 50%">
                            <div class="12u">

                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="12u">
                                <ul class="actions align-center">
                                    <li><input type="submit" value="cambiar" /></li>
                                </ul>
                            </div><div class="12u">
                               
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!-- Footer -->
             <!-- Footer -->
<?php include_once ("..//model/footer.php");?>
</div>
  <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/jquery.scrollgress.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>
