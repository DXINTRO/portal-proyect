<?php

session_start();
if (!isset($_SESSION['nombre'])) {
    header("location:login.php?error=1");
}

require_once("../conection/fun_inicio.php");
$fun = new fun_inicio();

if ($fun->PaginaActual() !== "fc_new_egreso") {
    if ($fun->PaginaActual() !== "fv_new_ingreso") {
        if (isset($_GET['emp'])) {
            $idempresa = $_GET['emp'];
            $datos = $fun->getDatosEmpresa($_SESSION['idusuario'], $idempresa);
            if ($datos) {
                $_SESSION['empresa_def_id'] = $datos['id'];    //empresa por defecto : ID
                $_SESSION['empresa_def_nom'] = $datos['nombre'];
                $_SESSION['empresa_def_logo'] = $datos['logo'];
            }
        }
    }
}