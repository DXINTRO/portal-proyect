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
        <title>Cuenta</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="images/icon/settings.png" />
        <link rel="stylesheet" href="assets/css/datepicker.css" />
        <link rel="stylesheet" href="assets/css/form.css" />
        <link rel="stylesheet" href="assets/css/mainbody.css" />
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
                            <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php  ?></ul>
                        </li>
                        <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
            <!-- Main -->
            <section id="main" class="container 75%">
                       <!-- Lists -->
                        <section class="box">
                            <div class="panel panel-success">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <!-- Form Name -->
                                        <legend>&nbsp Cuenta..&nbsp </legend>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="piochaid">Piocha</label>  
                                            <div class="col-md-2">
                                                <input id="piochaid" name="piochaid" placeholder="" class="form-control input-md" type="text">
                                                <span class="help-block">help</span>  
                                            </div>
                                        </div>
                                        <!-- Appended Input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="email">Correo</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <input id="email" name="email" class="form-control" placeholder="" type="text">
                                                    <span class="input-group-addon">Cambiar</span>
                                                </div>
                                                <p class="help-block"><a href="#" onclick="document.getElementById('tr').style.display='block'; this.focus(); return false;" > - Cambiar Password - </a></p>
                                            </div>
                                        </div>
                                        <!-- Password input-->
                                       <div id="tr" style="display:none">
                                        
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="passwordinput">Contraseña actual</label>
                                            <div class="col-md-4">
                                                <input id="password" name="password" placeholder="" class="form-control input-md" type="password">
                                                
                                            </div>
                                        </div>
                                        <!-- Password input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="passwordinput">Contraseña nueva</label>
                                            <div class="col-md-4">
                                                <input id="newpassword" name="newpassword" placeholder="" onkeyup="msjpass(this)" class="form-control input-md" type="password">
                                               <span class="msj">Minimo 8 caracteres de longitud</span>
                                            </div>
                                        </div>
                                        <!-- Password input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="passwordinput">Confirmar contraseña nueva</label>
                                            <div class="col-md-4">
                                                <input id="confirm_password" name="confirm_password" placeholder="" onkeyup="msjpass(this)" class="form-control input-md" type="password">
                                                <span class="msj" >Por favor confirme su password</span><br>
                                                 <button id="save" disabled="disabled" class="btn btn-info col-md-4">Aceptar</button><button id="cancel" class="btn btn-danger col-md-4">Cancelar</button>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </fieldset>
                                </form></div>
                            <hr>				
                            <div class="row uniform 50%">
                                <div class="table-responsive">
                                    <span class="label label-primary">Suspenciones.</span>
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
                                                <td align="right"><a href="#" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span> </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></div>
                            <hr>			
                            <div class="row uniform 50%">
                                <div class="table-responsive">
                                    <span class="label label-success">Tiempo de envio.</span>
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
                                                <td align="right"><a href="#" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span> </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></div>
                            <hr>			
                            <div class="row uniform 50%">
                                <div class="table-responsive">
                                    <span class="label label-success">Subcripcion.</span>
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
                                                <td align="right"><a href="#" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span> </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></div>
                            <div class="panel panel-primary">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <!-- Form Name -->
                                        <legend>Informacion personal</legend>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="displayn">Nombre</label>  
                                            <div class="col-md-2">
                                                <input id="displayn" name="displayn" placeholder="" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="disape1">Apellidos</label>  
                                            <div class="col-md-4">
                                                <input id="disape1" name="disape1" placeholder="" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="fechanaci">Fecha Nacimiento</label>  
                                            <div class="col-md-3">
                                                <div class="input-group"  data-date="12-12-1989" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control"  id="datetime" value="" readonly="" type="text">
                                                    <span    class="input-group-addon"><i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Appended Input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="cell2">Celular</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <input id="cell2" name="cell2" class="form-control" placeholder="" type="tel">
                                                    <span class="input-group-addon">Cambiar</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Appended Input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="cell1">Telefono</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <input id="cell1" name="cell1" class="form-control" placeholder="" type="tel">
                                                    <span class="input-group-addon">Cambiar</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Appended Input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="direccion">Direccion</label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input id="direccion" name="direccion" class="form-control" placeholder="" type="text">
                                                    <span class="input-group-addon">Cambiar</span>
                                                </div>
                                                <p class="help-block"><a href="#" >Ayuda?</a></p>
                                            </div>
                                        </div>
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="carrera">Carrera</label>
                                            <div class="col-md-4">
                                                <select id="carrera" name="carrera" class="form-control">
                                                    <option value="1">Option one</option>
                                                    <option value="2">Option two</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </section>
            
            </section>
            <!-- Footer -->
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
            $(document).ready(function () { $('#datetime').datepicker({startView: 2});});
        </script>
        <script src="assets/js/main.js"></script>
         <script src="assets/js/ajax.js"></script>
          <script src="assets/js/pace.min.js"></script>   <!--barra carga-->
    </body>
</html>	