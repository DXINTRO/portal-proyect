<?php
session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {
    if ($_SESSION['substatus'] == 0) {//si esta suspendido que lo envia aki
        header("enviaraHTMLsubcripcion para que pague.php");
    }
    $header = $_SESSION['piochaid'];
    require_once '../controller/fun_resize.class.php';
    $call = new fun_resize();
    $result_array = $call->getSelect();
    $rawdata = $call->getSelectMail();
}
?>
<!DOCTYPE HTML>
<html>
    <title>Resize</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/icon/table_gear.png" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>@import url('//cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.css');
        @import url('//cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.min.css');
    </style>

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
                        <ul><?php require_once ("..//model/menulayout.php"); //incluimos el archivo menulayout.php   ?></ul>
                    </li>
                    <li><a href="../controller/cerrar.php" class="button"><i class="fa fa-sign-out"></i> Salir&nbsp (Logout)</a></li>
                </ul>
            </nav>
        </header>
        <!-- Main -->
        <section id="main" class="container 75%" >
            <header>
                <h2>Redimencionado </h2>
                <p>Redimenciona la planilla.</p><br/>
                <i class="fa fa-pencil-square-o"></i>
            </header>
            <section class="box" id="boxresize" >
                <div class="row uniform">
                <fieldset>       
                    <!-- Form Name -->
                    <legend>Dimenciones actuales. Para <?php echo $rawdata[1] . "_al_" . $rawdata[2]; ?></legend>
<form  id="Formredi" action="../controller/fun_resize.class.php" method="POST"  accept-charset="UTF-8" onsubmit="return validateR()">
 <div class="table-responsive" id="tableResize">
 <table id="tableresize" class="table table-bordered table-striped">
    <thead>
  <tr>
    <th   colspan="2" class="th-ugh9">Domingo</th>
    <th   colspan="2" class="th-ugh9">Lunes</th>
    <th   colspan="2" class="th-ugh9">Martes</th>
    <th   colspan="2" class="th-ugh9">Miercoles</th>
    <th   colspan="2" class="th-ugh9">Jueves</th>
    <th   colspan="2" class="th-ugh9">Viernes</th>
    <th   colspan="2" class="th-ugh9">Sabado</th>
  </tr> </thead>
  <tr>
    <td class="tg-ugh9">turno</td>
    <td class="tg-ugh9">rows</td>
    <td class="tg-ugh9">turno</td>
    <td class="tg-ugh9">rows</td>
    <td class="tg-ugh9">turno</td>
    <td class="tg-ugh9">rows</td>
    <td class="tg-ugh9">turno</td>
    <td class="tg-ugh9">rows</td>
    <td class="tg-ugh9">turno</td>
    <td class="tg-ugh9">rows</td>
    <td class="tg-ugh9">turno</td>
    <td class="tg-ugh9">rows</td>
    <td class="tg-ugh9">turno</td>
    <td class="tg-ugh9">rows</td>
  </tr>
  <tr>
<td class="tg-031e" ><label for="dt0">09:00</label></td> <td class="tg-031e"><input type="text" id="dt0" maxlength="2" class="input-num" value="<?php echo $result_array[6][4] ?>" name="dt0" ></td> <td class="tg-031e" ><label for="lt0">08:00</label></td> <td class="tg-031e"><input type="text" id="lt0" maxlength="2" class="input-num" value="<?php echo $result_array[0][3] ?>" name="lt0" ></td> <td class="tg-031e"><label for="mt0">08:00</label></td> <td class="tg-031e"><input type="text" id="mt0" maxlength="2" class="input-num" value="<?php echo $result_array[1][3] ?>" name="mt0" ></td> <td class="tg-031e"><label for="mit0">08:00</label></td> <td class="tg-031e"><input type="text" id="mit0" maxlength="2" class="input-num" value="<?php echo $result_array[2][3] ?>"  name="mit0" ></td> <td class="tg-031e"><label for="jt0">08:00</label></td> <td class="tg-031e"><input type="text" id="jt0" maxlength="2" class="input-num" value="<?php echo $result_array[3][3] ?>" name="jt0" ></td> <td class="tg-031e"><label for="vt0">08:00</label></td> <td class="tg-031e"><input type="text" id="vt0" maxlength="2" class="input-num" value="<?php echo $result_array[4][3] ?>" name="vt0" ></td> <td class="tg-031e"><label for="st0">08:00</label></td> <td class="tg-031e"><input type="text" id="st0" maxlength="2" class="input-num" value="<?php echo $result_array[5][3] ?>" name="st0" ></td>
  </tr>
  <tr>
<td class="tg-ugh9"><label for="dt1">10:30</label></td> <td class="tg-ugh9"><input type="text" id="dt1" maxlength="2" class="input-num" value="<?php echo $result_array[6][5] ?>" name="dt1" ></td> <td class="tg-ugh9"><label for="lt1">10:30</label></td> <td class="tg-ugh9"><input type="text" id="lt1" maxlength="2" class="input-num" value="<?php echo $result_array[0][5] ?>" name="lt1" ></td> <td class="tg-ugh9"><label for="mt1">10:30</label></td> <td class="tg-ugh9"><input type="text" id="mt1" maxlength="2" class="input-num" value="<?php echo $result_array[1][5] ?>" name="mt1" ></td> <td class="tg-ugh9"><label for="mit1">10:30</label></td> <td class="tg-ugh9"><input type="text" id="mit1" maxlength="2" class="input-num" value="<?php echo $result_array[2][5] ?>" name="mit1" ></td> <td class="tg-ugh9"><label for="jt1">10:30</label></td> <td class="tg-ugh9"><input type="text" id="jt1" maxlength="2" class="input-num" value="<?php echo $result_array[3][5] ?>" name="jt1" ></td> <td class="tg-ugh9"><label for="vt1">10:30</label></td> <td class="tg-ugh9"><input type="text" id="vt1" maxlength="2" class="input-num" value="<?php echo $result_array[4][5] ?>" name="vt1" ></td> <td class="tg-ugh9"><label for="st1">10:30</label></td> <td class="tg-ugh9"><input type="text" id="st1" maxlength="2" class="input-num" value="<?php echo $result_array[5][5] ?>" name="st1" ></td>
  </tr>
  <tr>
<td class="tg-031e"><label for="dt2">12:30</label></td> <td class="tg-031e"><input type="text" id="dt2" maxlength="2" class="input-num" value="<?php echo $result_array[6][7] ?>" name="dt2" ></td> <td class="tg-031e"><label for="lt2">12:00</label></td> <td class="tg-031e"><input type="text" id="lt2" maxlength="2" class="input-num" value="<?php echo $result_array[0][6] ?>" name="lt2" ></td> <td class="tg-031e"><label for="mt2">12:00</label></td> <td class="tg-031e"><input type="text" id="mt2" maxlength="2" class="input-num" value="<?php echo $result_array[1][6] ?>" name="mt2" ></td> <td class="tg-031e"><label for="mit2">12:00</label></td> <td class="tg-031e"><input type="text" id="mit2" maxlength="2" class="input-num" value="<?php echo $result_array[2][6] ?>" name="mit2" ></td> <td class="tg-031e"><label for="jt2">12:00</label></td> <td class="tg-031e"><input type="text" id="jt2" maxlength="2" class="input-num" value="<?php echo $result_array[3][6] ?>" name="jt2" ></td> <td class="tg-031e"><label for="vt2">12:00</label></td> <td class="tg-031e"><input type="text" id="vt2" maxlength="2" class="input-num" value="<?php echo $result_array[4][6] ?>" name="vt2" ></td> <td class="tg-031e"><label for="st2">12:00</label></td> <td class="tg-031e"><input type="text" id="st2" maxlength="2" class="input-num" value="<?php echo $result_array[5][6] ?>" name="st2" ></td>
  </tr>
  <tr>
<td class="tg-ugh9"><label for="dt3">14:00</label></td> <td class="tg-ugh9"><input type="text"  id="dt3" maxlength="2" class="input-num" value="<?php echo $result_array[6][8] ?>"  name="dt3" ></td> <td class="tg-ugh9"><label for="lt3">14:00</label></td> <td class="tg-ugh9"><input type="text" id="lt3" maxlength="2" class="input-num" value="<?php echo $result_array[0][8] ?>"  name="lt3" ></td> <td class="tg-ugh9"><label for="mt3">14:00</label></td> <td class="tg-ugh9"><input type="text" id="mt3" maxlength="2" class="input-num" value="<?php echo $result_array[1][8] ?>" name="mt3" ></td> <td class="tg-ugh9"><label for="mit3">14:00</label></td> <td class="tg-ugh9"><input type="text" id="mit3" maxlength="2" class="input-num" value="<?php echo $result_array[2][8] ?>" name="mit3" ></td> <td class="tg-ugh9"><label for="jt3">14:00</label></td> <td class="tg-ugh9"><input type="text" id="jt3" maxlength="2" class="input-num" value="<?php echo $result_array[3][8] ?>" name="jt3" ></td> <td class="tg-ugh9"><label for="vt3">14:00</label></td> <td class="tg-ugh9"><input type="text" id="vt3" maxlength="2" class="input-num" value="<?php echo $result_array[4][8] ?>" name="vt3" ></td> <td class="tg-ugh9"><label for="st3">14:00</label></td> <td class="tg-ugh9"><input type="text" id="st3" maxlength="2" class="input-num" value="<?php echo $result_array[5][8] ?>"  name="st3" ></td>
  </tr>
  <tr>
<td class="tg-031e"><label for="dt4">15:30</label></td> <td class="tg-031e"><input type="text" id="dt4" maxlength="2" class="input-num" value="<?php echo $result_array[6][9] ?>"  name="dt4" ></td> <td class="tg-031e"><label for="lt4">15:30</label></td> <td class="tg-031e"><input type="text" id="lt4" maxlength="2" class="input-num" value="<?php echo $result_array[0][9] ?>" name="lt4" ></td> <td class="tg-031e"><label for="mt4">15:30</label></td> <td class="tg-031e"><input type="text" id="mt4" maxlength="2" class="input-num" value="<?php echo $result_array[1][9] ?>" name="mt4" ></td> <td class="tg-031e"><label for="mit4">15:30</label></td> <td class="tg-031e"><input type="text" id="mit4" maxlength="2" class="input-num" value="<?php echo $result_array[2][9] ?>" name="mit4" ></td> <td class="tg-031e"><label for="jt4">15:30</label></td> <td class="tg-031e"><input type="text" id="jt4" maxlength="2" class="input-num" value="<?php echo $result_array[3][9] ?>" name="jt4" ></td> <td class="tg-031e"><label for="vt4">15:30</label></td> <td class="tg-031e"><input type="text" id="vt4" maxlength="2" class="input-num" value="<?php echo $result_array[4][9] ?>" name="vt4" ></td> <td class="tg-031e"><label for="st4">15:30</label></td> <td class="tg-031e"><input type="text" id="st4" maxlength="2" class="input-num" value="<?php echo $result_array[5][9] ?>" name="st4"></td>
  </tr>
  <tr>
<td class="tg-ugh9"><label for="dt5">17:30</label></td> <td class="tg-ugh9"><input type="text" id="dt5" maxlength="2" class="input-num" value="<?php echo $result_array[6][10] ?>" name="dt5" ></td> <td class="tg-ugh9"><label for="lt5">17:30</label></td> <td class="tg-ugh9"><input type="text" id="lt5" maxlength="2" class="input-num" value="<?php echo $result_array[0][10] ?>" name="lt5" ></td> <td class="tg-ugh9"><label for="mt5">17:30</label></td> <td class="tg-ugh9"><input type="text" id="mt5" maxlength="2" class="input-num" value="<?php echo $result_array[1][10] ?>"  name="mt5" ></td> <td class="tg-ugh9"><label for="mit5">17:30</label></td> <td class="tg-ugh9"><input type="text" id="mit5" maxlength="2" class="input-num" value="<?php echo $result_array[2][10] ?>"  name="mit5" ></td> <td class="tg-ugh9"><label for="jt5">17:30</label></td> <td class="tg-ugh9"><input type="text" id="jt5" maxlength="2" class="input-num" value="<?php echo $result_array[3][10] ?>"  name="jt5" ></td> <td class="tg-ugh9"><label for="vt5">17:30</label></td> <td class="tg-ugh9"><input type="text" id="vt5" maxlength="2" class="input-num" value="<?php echo $result_array[4][10] ?>" name="vt5" ></td> <td class="tg-ugh9"><label for="st5">17:30</label></td> <td class="tg-ugh9"><input type="text" id="st5" maxlength="2" class="input-num" value="<?php echo $result_array[5][10] ?>"  name="st5"> </td>
  </tr>
  <tr>
<td class="tg-031e"><label for="dt6">19:00</label></td> <td class="tg-031e"><input type="text" id="dt6" maxlength="2" class="input-num" value="<?php echo $result_array[6][11] ?>" name="dt6" ></td> <td class="tg-031e"><label for="lt6">19:00</label></td> <td class="tg-031e"><input type="text" id="lt6" maxlength="2" class="input-num" value="<?php echo $result_array[0][11] ?>" name="lt6" ></td> <td class="tg-031e"><label for="mt6">19:00</label></td> <td class="tg-031e"><input type="text" id="mt6" maxlength="2" class="input-num" value="<?php echo $result_array[1][11] ?>" name="mt6" ></td> <td class="tg-031e"><label for="mit6">19:00</label></td> <td class="tg-031e"><input type="text" id="mit6" maxlength="2" class="input-num" value="<?php echo $result_array[2][11] ?>" name="mit6" ></td> <td class="tg-031e"><label for="jt6">19:00</label></td> <td class="tg-031e"><input type="text" id="jt6" maxlength="2" class="input-num" value="<?php echo $result_array[3][11] ?>" name="jt6" ></td> <td class="tg-031e"><label for="vt6">19:00</label></td> <td class="tg-031e"><input type="text" id="vt6" maxlength="2" class="input-num" value="<?php echo $result_array[4][11] ?>" name="vt6" ></td> <td class="tg-031e"><label for="st6">19:00</label></td> <td class="tg-031e"><input type="text" id="st6" maxlength="2" class="input-num" value="<?php echo $result_array[5][11] ?>" name="st6"></td>
  </tr>
</table>
            </div><hr>
            <div class="table-responsive">
                <div class="4u 12u(narrower)">
                    <input id="priority-low" name="priority" value="0" type="radio">
                    <label for="priority-low"><i class="fa fa-angle-right"></i>Bajo</label>
                </div>
                <div class="4u 12u(narrower)">
                    <input id="priority-normal" name="priority" value="1" type="radio">
                    <label for="priority-normal"><i class="fa fa-angle-right"></i>Normal</label>
                </div>
                <div class="4u 12u(narrower)">
                    <input id="priority-high" name="priority" value="2" type="radio">
                    <label for="priority-high"><i class="fa fa-angle-right"></i>Alto</label>
                </div>
                <div class="4u 12u(narrower)">
                    <input id="priority-personalize" value="3" name="priority" type="radio">
                    <label for="priority-personalize"><i class="fa fa-cog"></i>Personalizar</label>
                </div>
            </div>
            <div class="row uniform">
                <ul class="actions align-center">
                    <li><img class="loading" id="loading1" width="122" height="66" draggable="false" SRC="images/loading.gif"  ALT="ok" ></li>
                    <li id="aplicar"><input  type="submit" value="- - Aplicar - -" /></li>
                </ul>   
            </div>
</form></fieldset>
         <fieldset> 
             <legend>Describa la planilla o agregue un enunciado.</legend>
             <div class="mail-container" >
                 <form action="../controller/fun_resize.class.php" id="formmail" class="new-mail-form form-horizontal" >
                     <div class="row form-group">
                         <div class="col-xs-12 col-md-8"><input class="form-control"   id="mail-subject" value="<?php echo $rawdata[3]; ?>" placeholder="Asunto"></div>
                         <div style="text-align: center" id="boxsabe" class="col-xs-6 col-md-4 "><button type="submit" id="save" class="button special small" > <i class="fa fa-database"></i> - GUARDAR -</button><i id="loading2" class="fa fa-spinner fa-pulse fa-2x loading"></i></div>
                     </div>
                     <div class="row form-group">
                         <textarea class="form-control" rows="5"   id="mail-body"></textarea>
                     </div>
                 </form>
             </div>
         </fieldset>
                </div> </section> </section>
    <!-- Footer -->
    <?php include_once ("..//model/footer.php"); ?>
</div>
  <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>  <script src="assets/js/jquery.dropotron.min.js"></script> <script src="assets/js/jquery.scrollgress.min.js"></script> <script src="assets/js/skel.min.js"></script> <script src="assets/js/util.js"></script> <script src="assets/js/jquery.numeric.js"></script> <script type="text/javascript" >  $(".input-num").numeric({ decimal: false, negative: false }, function() { this.value = ""; this.focus(); });  </script> <script src="assets/js/main.js"></script> <script src="assets/js/ajax.js"></script> <script src="assets/js/bootstrap.min.js"></script> <script>  $.getScript('//cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.min.js',function(){ $('#mail-body').summernote({ height: 200, minHeight: 100, maxHeight: 400, toolbar: [ ['style', ['style','bold', 'italic', 'underline', 'clear']], ['fontsize', ['fontsize']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['height', ['height']], ['Insert', ['table', 'hr', 'link']], ['Misc',['codeview','undo','redo','help']]] }); $("#mail-body").code('<?php echo $rawdata[4]?>'); });</script>
         </body>
</html>