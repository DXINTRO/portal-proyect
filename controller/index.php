<?php

if (isset($_POST['facturas'])) {
    require("fun_sistema.php");
    $ad = new fun_sistema();
    $conexion = $ad->conectarBD();
    $consulta = "select*from documento where estado=1";
    mysqli_set_charset($conexion, "utf8");
    $registro = mysqli_query($conexion, $consulta);
    $compra=0;
    $venta=0;
    while ($row = mysqli_fetch_array($registro)) {
        $tipo = $row['tipo'];
        if($tipo==1){
            $compra++;
        }else if($tipo==2){
            $venta++;
        }
    }
    echo '{"compra":' . $compra . ',"venta":' . $venta . '}';
}
