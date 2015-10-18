<?php
session_start();
if (isset($_SESSION['piochaid'])) {
    header("location:index.php");
}
 $msg = "";
?>
<?php
require_once("..//controller/fun_inicio.php");

$fun = new fun_inicio();


if (isset($_POST['btnent'])) {
  
    if ($_POST['txtusu'] != "") {
     $log = $_POST['txtusu'];
     $pas = md5($_POST['txtpas']);
    
     $msg = $fun->validarusuario($log,$pas);   
    }else{$msg = "<font color='red'><sub>DEBE INICIAR SESION PARA ACCEDER.</sub></font>";}
    
    
}

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Portal Estudiantil Jumbo Rancagua</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/logo.png" />
        <link rel="stylesheet" href="assets/css/main.css" />

    </head>
    <body class="landing">
        <div id="page-wrapper"> 

            <!-- Header -->
            <header id="header" class="alt">
                <h1 id="logoo"><img width="56" height="56" src="images/logo.png" /></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>



                    </ul>
                </nav>
            </header>

            <!-- Banner -->
            <section id="banner">

                <div class="container mlogin">
                    <div id="login">
                        <h1><img width="100" height="100" src="images/logo2.png"  alt="logo"/></h1>
                        <h2>PortalEstudiantil.cl</h2>
                        <form name="loginform" id="loginform" action="index.php" method="POST">
                            <p>Inicia sesión con tu - Cuenta de Correo.<br/><?php echo $msg; ?> </p>
                           
                            <p>
                                <input type="email"  name="txtusu" id="txtusu" class="input" value="" maxlength="74" placeholder="Correo electrónico"  />
                                <br/>
                            </p>
                            <p>

                                <input type="password" name="txtpas" id="txtpas" class="input" maxlength="24"  placeholder="Contraseña" />

                            </p>


                            <ul class="actions" >
                                <li> <input type="submit" name="btnent" id="btnent" class="button" value="Entrar" /></li>
                                <li><a href="#" class="button">¿Olvidaste tu contraseña?</a></li>
                            </ul>
                        </form>
                    </div>
                </div>



            </section>

            <!-- Main --> 

            <!-- CTA -->
            <section id="cta"></section>

            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; <a href="">DXintro</a> All rights reserved'15</li>
                    <li>Design: <a href="">HTML5 UP</a></li>
                </ul>
            </footer>
        </div>


        <script src="assets/js/jquery.min.js"></script> 

        <script src="assets/js/jquery.scrollgress.min.js"></script> 
        <script src="assets/js/skel.min.js"></script> 
        <script src="assets/js/util.js"></script> 
        <script src="assets/js/main.js"></script>

    </body>
</html>