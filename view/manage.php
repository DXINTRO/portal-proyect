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

            </section>

            <!-- Footer -->
             <!-- Footer -->
<?php include_once ("..//model/footer.php");?>
</div>
  <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/jquery.scrollgress.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
