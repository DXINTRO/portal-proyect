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
    <title>Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/icon/e_mail.png" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
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
                <h2>Contáctese con nosotros</h2>
                <p>Describe el problema con todo el detalle.</p>
                <p>Aviso: Este formulario solo sirve para informar de problemas técnicos y otros errores de la página.</br>Si necesita atencion urgente llame a este numero:</p>
            </header>
            <div class="box">
                <form method="post" action="#">
                    <div class="row uniform 50%">
                        <div class="6u 12u(mobilep)">
                            <label for="name" >Nombre</label>
                            <input type="text" name="name" id="name" value="" placeholder="Name" /></br>
                        </div>
                        <label for="form_email" >Email</label>
                        <div class="6u 12u(mobilep)">
                            <select id="form_email" name="form[email]"><option value="DXINTRO@HOTMAIL.COM">DXINTRO@HOTMAIL.COM</option></select></br>
                        </div>
                    </div>
                    <div class="row uniform 50%">
                        <label for="form_subject" >Asunto</label>
                        <div class="12u">
                            <input  type="text" id="form_subject" name="form_subject" maxlength="72"  size="40"  placeholder="Asunto"></br>
                        </div>
                    </div>
                    <div class="row uniform 50%">
                        <div class="12u">
                            <textarea name="message" id="message" placeholder="Enter &nbsp your &nbsp message" maxlength="600" ></textarea>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="12u">
                            <ul class="actions align-center">
                                <li><input type="submit" value="Send Message" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer -->
        <!-- Footer -->
        <?php include_once ("..//model/footer.php"); ?>
    </div>
    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollgress.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
</body>
</html>