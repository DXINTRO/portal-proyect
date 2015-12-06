<?php
session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {
    if ($_SESSION['substatus'] == 0) {//si esta suspendido que lo envia aki
        header("enviaraHTMLsubcripcion para que pague.php");
    }
    $DataAcoount = array();
    $DataAcoount = [
        0 => (isset($_SESSION['piochaid']) ? $_SESSION['piochaid'] : ""),
        1 => (isset($_SESSION['email']) ? $_SESSION['email'] : ""),
        2 => (isset($_SESSION['displayname']) ? $_SESSION['displayname'] : ""),
        3 => (isset($_SESSION['displayapellidom']) ? $_SESSION['displayapellidom'] : ""),
        4 => (isset($_SESSION['displayapellidop']) ? $_SESSION['displayapellidop'] : ""),
        5 => (isset($_SESSION['fechanaciminto']) ? $_SESSION['fechanaciminto'] : ""),
        6 => (isset($_SESSION['carrera_idcarrera']) ? $_SESSION['carrera_idcarrera'] : ""),
        7 => (isset($_SESSION['cellphone']) ? $_SESSION['cellphone'] : ""),
        8 => (isset($_SESSION['otrophone']) ? $_SESSION['otrophone'] : ""),
        9 => (isset($_SESSION['direccion']) ? $_SESSION['direccion'] : "")
    ];
    
   
 
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Cuenta</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/icon/settings.png" />
        <link rel="stylesheet" href="assets/css/datepicker.css" />
        <link rel="stylesheet" href="assets/css/form.css" />
       </head>
    <body>
        <div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress"></div>
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                
                <?php echo "<input id='piocha'  type='text'  value=' " . $DataAcoount[0] . "' readonly />" ?>  
                <nav id="nav">
                    <ul>
                        <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                        <li> <a href="#" class="icon fa-angle-double-down"><i class="fa fa-bars"></i> Menu</a>
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php    ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
<section id="main" class="container 75%">
    <!-- Lists -->
    <section class="box">
        
        <div class="panel panel-success">
            <form class="form-horizontal" > <div class="panel panel-default">
                    <span class="dot-online-offline" style="float: left; width: 16px; height: 16px; background: url('http://o1.t26.net/images/big2v1.png'); background-position: 0 -792px" data-toggle="tooltip"  title="Online"></span>
                    <div class="panel-heading"><i class="fa fa-key"></i> Acceso a Mi cuenta  </div> <br> <div class="form-group"> <label class="col-md-4 control-label" for="piochaid">Piocha</label> <div class="col-md-2"> <input id="piochaid" name="piochaid" disabled="disabled" value="<?php echo $DataAcoount[0]; ?>" class="form-control input-md" type="text"> </div> </div> <!-- Appended Input--> <div class="form-group"> <label class="col-md-4 control-label" for="email">Correo</label> <div class="col-md-6"> <div class="input-group"> <input type="email" class="form-control" id="email" disabled name="email" value="<?php echo $DataAcoount[1]; ?>"  > <span class="msj" id="errormsj2">El correo Ingresado ya esta en uso o es incorrecto</span> <span class="input-group-btn"> <button class="btn btn-default" id="boton1" onclick="FormAccount($('#email'));" type="button"><i id="loadin1" class="fa fa-spinner fa-pulse"></i>&nbsp;Cambiar</button> </span> </div> <p class="help-block"><a  href="" data-toggle="tooltip" data-placement="right" title="Cambie tu clave de acceso aqui" onclick="document.getElementById('tr').style.display = 'block'; this.focus(); return false;" > - Cambiar Password - </a></p> </div> <!-- Password input--> <div id="tr" style="display:none; margin-left: 19px;width: auto;" > <div class="form-group"> <label class="col-md-4 control-label" for="passwordinput">* Contraseña actual</label> <div class="col-md-5"> <div class="input-group"> <input id="password" name="password" placeholder="Escriba su clave actual" class="form-control input-md pass" type="password"> <span class="msj" id="errormsj1">Su clave actual no es la ingresada</span><span class="input-group-addon"> <i class="fa fa-eye" onmouseout="$('#password').hideShowPassword(false); $(this).removeClass('fa-eye-slash');" onclick="  $('#password').hideShowPassword(true); $(this).addClass('fa-eye-slash');"></i> </span> </div>       </div> </div> <!-- Password input--> <div class="form-group"> <label class="col-md-4 control-label" for="passwordinput"> * Contraseña nueva</label> <div class="col-md-5"> <div class="input-group"> <input id="newpassword" name="newpassword" placeholder="Escriba su clave nueva" onkeyup="ValitatePass(this)" class="form-control input-md pass" type="password"> <span class="msj">Minimo 8 caracteres de longitud</span>  <span class="input-group-addon"> <i class="fa fa-eye" onmouseout="$('#newpassword').hideShowPassword(false); $(this).removeClass('fa-eye-slash');" onclick="  $('#newpassword').hideShowPassword(true); $(this).addClass('fa-eye-slash');"></i>   </span> </div></div> </div> <!-- Password input--> <div class="form-group"> <label class="col-md-4 control-label" for="passwordinput">* Confirmar contraseña </label> <div class="col-md-5"> <div class="input-group"> <input id="confirm_password" name="confirm_password" placeholder="Vuelva a escribirla" onkeyup="ValitatePass(this)" class="form-control input-md pass" type="password"> <span class="msj" >Por favor confirme su password</span> <span class="input-group-addon"> <i class="fa fa-eye" onmouseout="$('#confirm_password').hideShowPassword(false); $(this).removeClass('fa-eye-slash');" onclick="  $('#confirm_password').hideShowPassword(true); $(this).addClass('fa-eye-slash');"></i>   </span> </div> <br> <button id="boton2" disabled="disabled" onclick="FormAccount($('#confirm_password'));"  type="button" class="btn btn-info col-md-5"><i id="loadin2" class="fa fa-spinner fa-pulse"></i>&nbsp;Aceptar</button><button id="cancel" class="btn btn-danger col-md-5">Cancelar</button> </div> </div> </div></div></div> </form></div>
      
      

        <div class="panel panel-primary">
            <form class="form-horizontal">
                 <div class="panel panel-default">
                 <div class="panel-heading"><i class="fa fa-user"></i> Informacion personal </div>
                 <br>
                    
                    <!-- Form Name -->
                
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="displayn">Nombre</label>  
                        <div class="col-md-4">
                            <input id="displayn" readonly name="displayn" value="<?php echo $DataAcoount[2]; ?>" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label"  for="disape1">Apellidos</label>  
                        <div class="col-md-5">
                            <input id="disape1" name="disape1" readonly value="<?php echo $DataAcoount[4]."  ".$DataAcoount[3]; ?>" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="fechanaci">Fecha Nacimiento</label>  
                        <div class="col-md-4">
                            <div class="input-group" data-toggle="tooltip" data-placement="top" title="ClickMe" data-date="12-12-1989" data-date-format="dd-mm-yyyy">
                                <input class="form-control"  id="datetime" value="<?php echo $DataAcoount[5]; ?>" readonly="" type="text">
                                <span  class="input-group-btn">
                                    <button class="btn btn-default" id="boton3" onclick="FormAccount($('#datetime'));" type="button"><i id="loadin3" class="fa fa-spinner fa-pulse"></i><i class="fa fa-calendar"></i></button>
                                </span>
                              
                            </div>
                        </div>
                    </div>
                    <!-- Appended Input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cell2">Celular <i data-toggle="tooltip" data-placement="bottom" title="Ejemplo +569-987653" class="fa fa-info-circle"></i></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="search" maxlength="11" disabled class="form-control numbersOnly" id="celu"  value="<?php echo $DataAcoount[7]; ?>" name="celu"  placeholder="Ingrese un dato">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="boton4" onclick="FormAccount($('#celu'));" type="button"><i id="loadin4" class="fa fa-spinner fa-pulse"></i>&nbsp;Cambiar</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Appended Input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cell1">Telefono <i data-toggle="tooltip" data-placement="bottom" title="Ejemplo 072-2235689" class="fa fa-info-circle"></i></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="search" maxlength="11" disabled class="form-control numbersOnly" id="tle"  value="<?php echo $DataAcoount[8]; ?>" name="tle" placeholder="Ingrese un dato">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="boton5" onclick="FormAccount($('#tle'));" type="button"><i id="loadin5" class="fa fa-spinner fa-pulse"></i>&nbsp;Cambiar</button>
                                </span>
                            </div>
                        </div></div>
                    <!-- Appended Input-->
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="direccion">Carrera <i data-toggle="tooltip" data-placement="bottom" title="Elija una carrera de la lista si no esta la suya elija (otra)" class="fa fa-info-circle"></i></label>
                        <div class="col-md-7">
                            <div class="input-group" >
                                <select id="carrera" name="carrera" class="form-control"> <option selected hidden value="">Seleccione su carrera</option> <option value="2">No disponible</option>
                                </select>
                                <span class="input-group-btn"   >
                                    <button class="btn btn-default" id="boton6" disabled  type="button"><i id="loadin6" class="fa fa-spinner fa-pulse"></i>&nbsp;Cambiar</button>
                                </span>
                            </div>
                        </div></div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="direccion">Direccion <i data-toggle="tooltip" data-placement="bottom" title="vila/calle/numero" class="fa fa-info-circle"></i></label>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="search" maxlength="240" disabled class="form-control" id="dire" name="dire"  value="<?php echo $DataAcoount[9]; ?>" placeholder="Ingrese un dato">
                                <span class="input-group-btn"  >
                                    <button class="btn btn-default" id="boton7" onclick="FormAccount($('#dire'));" type="button"><i id="loadin7" class="fa fa-spinner fa-pulse"></i>&nbsp;Cambiar</button>
                                </span>
                            </div>
                            <p class="help-block"><a  data-toggle="tooltip" data-placement="right" title="Estos campos son de caracter personal rellenalos lo mejor que puedas [presione cambiar para editar y guardar]" >Ayuda?</a></p>
                        </div></div>
        </div>
            </form>
        </div>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Cuenta activa! </strong>  Tu cuenta tiene activo todos los servicios..
        </div>
        <div class="alert alert-warning alert-dismissible" role="alert" style="display: none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Esta Cuenta esta suspendida! </strong>  Presione el botón suspensiones para ver los Detalles..
        </div>
        <div class="alert alert-danger alert-dismissible" role="alert" style="display: none">>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Esta cuenta esta Expirada! </strong>  Presione el botón Suscripcion para ver los Detalles..
        </div>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><i class="fa fa-info"></i> Panel de Servicios </div>
            <div class="navbar navbar-inverse">
                <div class="panel-body">

                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button disabled="disabled" type="button" id="tcta" class="btn btn-default"><i  data-toggle="tooltip" data-placement="top" title="privilegios de  acceso" class="fa fa-info-circle"></i> Tipo de Cuenta</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" id="sus" onclick="modalviewAcoount(this);" ><i data-toggle="tooltip" data-placement="top" title="Si has sido suspendido lo veras aqui" class="fa fa-info-circle"></i> Suspensiones</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" id="sub" onclick="modalviewAcoount(this);" ><i data-toggle="tooltip" data-placement="top" title="Estado de tu Suscripcion " class="fa fa-info-circle"></i> Suscripcion</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        </section>
        <!-- Footer -->
          <?php include_once ("modal/modal_showSusp.php"); ?>
        <?php include_once ("modal/modal_showSubcrip.php"); ?>
        <?php include_once ("..//model/footer.php"); ?>
       
        </div>
       
        
        <!-- Scripts -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script type="text/javascript" >
                      $(document).ready(function () { $('#datetime').datepicker({startView: 2}); });
        </script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/ajax.js"></script>
        <script src="assets/js/hideShowPassword.min.js"></script>
        <script src="assets/js/pace.min.js"></script>   <!--barra carga-->
        </body>
        </html>	