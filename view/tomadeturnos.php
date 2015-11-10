<?php
session_start();
if (!isset($_SESSION['piochaid'])) {
header("location:../index.php");
} else {
$subcrip=$_SESSION['substatus'];
$suspenc=$_SESSION['released'];
if ($subcrip==="0"||$suspenc==="1") {
 header("location:account.php");
}
$header = $_SESSION['piochaid'];
$name = $_SESSION['displayname'];
$correo = $_SESSION['email'];
include_once ("../controller/clock.php");

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
                <form   id="formPrimary" class="form-horizontal" action="../controller/fun_setTurn.class.php" method="POST"  onsubmit="return validateT()">
                    <fieldset>
                        <!-- Form Name -->
                        <legend><?php echo $name . " " . $correo ?>
                            <br>Mis turnos son:</legend>
                        <ul id="myDiv" class="actions fit ">
                            <li> <div  class="select-wrapper" >
                                        <select name="category1" onchange="cargarT(this);" class="category">
                                          <option selected hidden value="">- Dias -</option>
                                            <option value="0">Lunes</option><option value="1">Martes</option><option value="2">Miércoles</option><option value="3">Jueves</option><option value="4">Viernes</option><option value="5">Sábado</option><option value="6">Domingo</option>
                                        </select>

                                </div></li>
                            <li class="imgfila"><center><img alt="primary"    SRC="images/pri1.gif" /></center></li>
                            <li>  <div  class="select-wrapper">
                                        <select name="category1-right"  onchange="cargarNext(this);" class="category" id="1">
                                            <option selected hidden value="">- Turnos -</option>

                                         </select>
                                    </div></li>
                        </ul>
                        <ul class="actions fit">
                            <li><div  class="select-wrapper">
                                        <select name="category2" onchange="cargarT(this);" class="category">
                                           <option selected hidden value="">- Dias -</option>
                                            <option value="0">Lunes</option><option value="1">Martes</option><option value="2">Miércoles</option><option value="3">Jueves</option><option value="4">Viernes</option><option value="5">Sábado</option><option value="6">Domingo</option>
                                        </select>
                                </div></li>
                            <li class="imgfila"><center><img alt="primary"    SRC="images/pri2.gif" /></center></li>
                            <li>
                                    <div  class="select-wrapper">
                                        <select name="category2-right"  onchange="cargarNext(this);" class="category" id="2">
                                           <option selected hidden value="">- Turnos -</option>

                                        </select>
                                    </div></li>
                        </ul>
                        <ul class="actions fit">
                                          <li>
                                    <div  class="select-wrapper">
                                        <select name="category3" onchange="cargarT(this);" class="category">
                                             <option selected hidden value="">- Dias -</option>
                                            <option value="0">Lunes</option><option value="1">Martes</option><option value="2" >Miércoles</option><option value="3">Jueves</option><option value="4">Viernes</option><option value="5">Sábado</option><option value="6">Domingo</option>
                                        </select>
                                    </div></li>
                            <li class="imgfila"><center><img alt="primary"    SRC="images/pri3.gif" /></center></li>
                        <li>
                            <div  class="select-wrapper">
                                <select name="category3-right" onchange="cargarNext(this);" class="category" id="3">
                                    <option selected hidden value="">- Turnos -</option>
                                </select>
                            </div> </li>
                        </ul>
                        <hr>
                        <span>Turnos opcionales&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="button_more();"><i class="fa fa-arrow-circle-down fa-lg"></i></a></span>
                        <hr>
                        <ul class="actions fit" id="one" >
                                          <li>
                                    <div  class="select-wrapper">
                                        <select name="category4" onchange="cargarT(this);" class="category">
                                             <option selected hidden value="">- Dias -</option>
                                            <option value="0">Lunes</option><option value="1">Martes</option><option value="2">Miércoles</option><option value="3">Jueves</option><option value="4">Viernes</option><option value="5">Sábado</option><option value="6">Domingo</option>
                                        </select>
                                    </div></li>
                                    <li class="imgfila"><center><img alt="opcional"    SRC="images/opc0.gif" /><button type="button" class="close"  onclick="$('#one').hide(300);$('select[name=category4]').prop('selectedIndex',0);$('select[name=category4-right]').prop('selectedIndex',0);" aria-hidden="true">&times;</button></center></li>
                        <li>
                          <div  class="select-wrapper">
                                <select name="category4-right" onchange="cargarNext(this);" class="category" id="4">
                                    <option selected hidden value="">- Turnos -</option>
                                </select>
                            </div> </li>
                        </ul>

                        <ul class="actions fit" id="two">
                                          <li>
                                    <div  class="select-wrapper">
                                        <select name="category5" onchange="cargarT(this);" class="category">
                                             <option selected hidden value="">- Dias -</option>
                                            <option value="0">Lunes</option><option value="1">Martes</option><option value="2">Miércoles</option><option value="3">Jueves</option><option value="4">Viernes</option><option value="5">Sábado</option><option value="6">Domingo</option>
                                        </select>
                                    </div></li>
                                    <li class="imgfila"><center><img alt="opcional"    SRC="images/opc0.gif" /><button type="button" class="close" onclick="$('#two').hide(300);$('select[name=category5]').prop('selectedIndex',0);$('select[name=category5-right]').prop('selectedIndex',0);" aria-hidden="true">&times;</button></center></li>
                        <li>
                            <div  class="select-wrapper">
                                <select name="category5-right" onchange="cargarNext(this);" class="category" id="5">
                                    <option selected hidden value="">- Turnos -</option>
                                </select>
                            </div> </li>
                        </ul>
                        <ul class="actions fit" id="three" >
                                          <li>
                                    <div  class="select-wrapper">
                                        <select name="category6" onchange="cargarT(this);" class="category">
                                             <option selected hidden value="">- Dias -</option>
                                            <option value="0">Lunes</option><option value="1">Martes</option><option value="2">Miércoles</option><option value="3">Jueves</option><option value="4">Viernes</option><option value="5">Sábado</option><option value="6">Domingo</option>
                                        </select>
                                    </div></li>
                                    <li class="imgfila"><center><img alt="opcional"  SRC="images/opc0.gif" /><button type="button" class="close" onclick="$('#three').hide(300);$('select[name=category6]').prop('selectedIndex',0);$('select[name=category6-right]').prop('selectedIndex',0);" aria-hidden="true">&times;</button></center></li>
                        <li>
                            <div  class="select-wrapper">
                                <select name="category6-right" onchange="cargarNext(this);" class="category" id="6">
                                    <option selected hidden value="">- Turnos -</option>
                                </select>
                            </div> </li>
                        </ul>

                       <ul class="actions fit" id="four" >
                                          <li>
                                    <div  class="select-wrapper">
                                        <select name="category7" onchange="cargarT(this);" class="category">
                                             <option selected hidden value="">- Dias -</option>
                                            <option value="0">Lunes</option><option value="1">Martes</option><option value="2">Miércoles</option><option value="3">Jueves</option><option value="4">Viernes</option><option value="5">Sábado</option><option value="6">Domingo</option>
                                        </select>
                                    </div></li>
                                    <li class="imgfila"><center><img alt="opcional"    SRC="images/opc0.gif" /><button type="button" class="close" onclick="$('#four').hide(300);$('select[name=category7]').prop('selectedIndex',0);$('select[name=category7-right]').prop('selectedIndex',0);" aria-hidden="true">&times;</button></center></li>
                        <li>
                            <div  class="select-wrapper">
                                <select name="category7-right" onchange="cargarNext(this);" class="category" id="7">
                                    <option selected hidden value="">- Turnos -</option>
                                </select>
                            </div> </li>
                        </ul>
                        <ul class="actions fit " id="five" >
                                          <li>
                                    <div  class="select-wrapper">
                                        <select name="category8" onchange="cargarT(this);" class="category">
                                             <option selected hidden value="">- Dias -</option>
                                            <option value="0">Lunes</option><option value="1">Martes</option><option value="2">Miércoles</option><option value="3">Jueves</option><option value="4">Viernes</option><option value="5">Sábado</option><option value="6">Domingo</option>
                                        </select>
                                    </div></li>
                                    <li class="imgfila"><center><img alt="opcional"    SRC="images/opc0.gif" /><button type="button" class="close" onclick="$('#five').hide(300);$('select[name=category8]').prop('selectedIndex',0);$('select[name=category8-right]').prop('selectedIndex',0);" aria-hidden="true">&times;</button></center></li>
                        <li>
                            <div  class="select-wrapper">
                                <select name="category8-right" onchange="cargarNext(this);" class="category" id="8">
                                    <option selected hidden value="">- Turnos -</option>
                                </select>
                            </div> </li>
                        </ul>
                        <div class="row-uniform" ><a href="javascript:void(0);" onclick="button_more();"><img id="more" SRC="images/more.png" onmouseover="this.src = 'images/more1.png';" onmouseout="this.src = 'images/more.png';" ALT="Agregar fila" ></a></div> 

                         <div class="row uniform">
                             <div class="actions align-center" ><img id="loading" draggable="false" SRC="images/loading.gif"  ALT="ok" ><div id="detalles"><a  class="button special small" onClick="verDetalle()" ><i class="fa fa-info-circle"></i>&nbsp;&nbsp;Información de Envío</a></div> </div>
                             <div  class="actions align-center">
                                 <div id="boxbuttons"> 
                                     
                                <input  id="primary" type="submit"  disabled="disabled" value="---Enviar---" />
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" id="toggle-demo"  data-toggle="toggle"  data-onstyle="success" data-offstyle="danger">
                                 </div>
                                
                            </div>
                            <br/>
                            <div class="actions align-center">
                                <iframe width="100%" height="320" id="frame" frameborder="0" scrolling="yes"  src="planilla/disponibilidad.php"></iframe>
                               <div class="btn-group">
                              <a class="btn btn-default"  onclick="document.getElementById('frame').contentWindow.location.reload()"><i class="fa fa-refresh fa-2x"></i></a>
                            </div>  </div>
                        </div>
                    </fieldset>
                </form>
            </div>
          </section>
        <!-- Footer -->
<?php include_once ("..//model/footer.php"); ?>
    </div>  
        <?php include_once ("modal/modal_showdetall.php"); ?>
    
    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap-toggle.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollgress.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/pace.min.js"></script>   <!--barra carga-->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>