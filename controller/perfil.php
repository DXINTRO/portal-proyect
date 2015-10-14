<?php
session_start();
if (isset($_POST["getUsuario"])) {
    $idusuario = $_SESSION['idusuario'];
    require_once("fun_sistema.php");
    $ad = new fun_sistema();
    $conexion = $ad->conectarBD();
    $consulta = "select*from usuario where idusuario=$idusuario;";
    mysqli_set_charset($conexion, "utf8");
    $registro = mysqli_query($conexion, $consulta);
    if ($registro) {
        while ($rs = mysqli_fetch_array($registro)) {
            $datos_array['rut'] = $rs['rut'];
            $datos_array['login'] = $rs['login'];
            $datos_array['nombre'] = $rs['nombre'];
            $datos_array['correo'] = $rs['correo'];
            $datos_array['fono'] = $rs['fono'];
        }
        echo json_encode($datos_array);
    }
}


