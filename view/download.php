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
        <title>Zona de descargas</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/icon/cloud_right.png" />
         <link rel="stylesheet" href="assets/css/form.css" />

    </head>
    <body>
        <div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress"></div>
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                <?php echo "<input id='piocha'  type='text'  value=' " . $header . "' readonly />" ?>  
                <nav id="nav">
                    <ul>
                        <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                        <li> <a href="#" class="icon fa-angle-double-down"><i class="fa fa-bars"></i> Menu</a>
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php     ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
            <section id="main" class="container 75%">
                <header >
                    <img style="width:333px" src="images/nube2.png">
                 
                </header>
                             <!-- Lists -->
                    <section class="box">
                        <div class="row uniform">
                            <div class="12u">
                                <div class="actions align-center">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-lg"> <img src="images/icon/csv.png" alt="csv"  width="52"> </button>
                                                <button type="button" class="btn btn-default btn-lg"><img src="images/icon/exel.png" alt="exel"  width="52"></button>
                                                <button type="button" class="btn btn-default btn-lg"><img src="images/icon/pdf.png" alt="pdf"  width="52"></button>
                                            </div>
                                        </div>
                                        <div class="panel-footer">  <label class="checkbox-inline ">Enviar directamente al correo?: </label> &nbsp;     <input type="checkbox" id="toggle-trigger" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> 
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-footer">Planilla de la semana del xxxxxx asta xxxxx  </div>
                                <div class="panel-body">
                                    <iframe id="ifreim" width="100%" height="853" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"  src="planilla/PLANILLA.html"></iframe>
                                </div>
                                <nav>
                                    <!--                                <ul class="pager">
                                                                        <li><a href="" onClick=""  >Previous</a></li>
                                                                        <li><a href="" onClick="" >Next</a></li>
                                                                    </ul>-->
                                </nav>
                            </div>
                        </div> 
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
        <script src="assets/js/main.js"></script>
        <script src="assets/js/ajax.js"></script>
        <script src="assets/js/pace.min.js"></script>   <!--barra carga-->
        </body>
        </html>	