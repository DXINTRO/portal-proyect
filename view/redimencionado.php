<!DOCTYPE HTML>
<html>
    <head>
        <title>redimencionado</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />

    </head>
    <body>
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1><a href="index.html"></a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.html"><img width="20" height="20" src="images/home.png" /> Home</a></li>
                        <li> <a href="#" class="icon fa-angle-down">= Menu</a>
<ul><?php include("..//controller/menulayout.php"); //incluimos el archivo menulayout.php ?></ul>
                        </li>
                        <li><a href="https://www.google.com/" class="button">Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>

            <!-- Main -->
            <section id="main" class="container 75%">
                <header>
                    <h2>Redimencionado </h2>
                    <p>Aqui podras cambiar la cantidad de empaques por turno.</p><br/>


                </header>
                <div class="box">
                    <form method="post" action="#">
                        <div class="row uniform 50%">
                            <iframe width="100%" height="435" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"  src="redime.html"></iframe> 
                        </div>


                        <div class="row uniform">
                            <div class="12u">
                                <ul class="actions align-center">
                                    <li><input type="submit" value="Redimencionar ahora" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

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
                    <li>&copy; dxintro. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </footer>

          </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="gdaniloassets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>