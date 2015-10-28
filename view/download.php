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
        <title>Zona de descargas</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/icon/cloud_right.png" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Optional theme -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/main.css" />
		
    </head>
    <body>
	<div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress"></div>
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                   <?php echo "<input id='piocha'  type='text'  value=' ". $header."' readonly />" ?>  
	                <nav id="nav">
                    <ul>
                        <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                        <li> <a href="#" class="icon fa-angle-double-down"><i class="fa fa-bars"></i> Menu</a>
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
           <section id="main" class="container 75%">
                <header>
                    <h2>Zona de Descargas</h2>
                    <p><img style="width:333px" src="images/nube.png"></p>
                </header>
				<div class="12u">
				<!-- Lists -->
				<section class="box">
				      <div class="row uniform">
        <div class="12u">
          <div class="actions align-center">
		  <hr>
            <button type="button" class="btn btn-info  btn-lg"><span class="fa fa-cloud-download" aria-hidden="true"></span> - Descargar - </button>
          <hr><i class="fa fa-file-excel-o"> &nbsp <span id=":my" class="SaH2Ve">37 KB</span></i></hr>
            <input type="checkbox" id="toggle-trigger" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
          </div>
          </div>
          <br />
          <div class="12u">
            <iframe width="100%" height="850" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"  src="planilla/PLANILLA.html"></iframe>
          </div>
      </div>
           </section></div>
             <!-- Footer -->
<?php include_once ("..//model/footer.php");?>
</div>
  <!-- Scripts -->
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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