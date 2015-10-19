<?php

class fun_inicio {


    function validarusuario($log, $pas) {
          
        require 'Db.class.php';
       require 'Conf.class.php';
       /*Creamos la instancia del objeto. Ya estamos conectados*/
         $bd=Db::getInstance();
       
        $sql = "call getUsuarioValido('" . $log . "','" . $pas . "',1);";
        
         $stmt = $bd->ejecutar($sql);
         
       $rawdata=$bd->obtener_fila($stmt,0);
      
        if ($rawdata) {
           
            session_start();
            $_SESSION['id'] = $rawdata[0];   //
            $_SESSION['piochaid'] = $rawdata[1];   //
            $_SESSION['email'] = $rawdata[2];   //
            $_SESSION['user_passwd'] = $rawdata[3];
            $_SESSION['disabled'] = $rawdata[4];
            $_SESSION['suspencion_idsuspencion'] = $rawdata[5];
            $_SESSION['groups_groupid'] = $rawdata[6];
            $_SESSION['displayname'] = $rawdata[7];
            $_SESSION['displayapellidom'] = $rawdata[8];
            $_SESSION['displayapellidop'] = $rawdata[9];
            $_SESSION['substatus'] = $rawdata[10];
           
             header("location:../index.php");
            
            
        } else {
            return "<font color='orange'><sub>Has introducido un correo electrónico o una contraseña incorrecta..</sub></font>";
            
        }
      
}}
//    function FacturasPendientes() {
//        require_once("fun_sistema.php");
//        $ad = new fun_sistema();
//
//        $sql = "select count(*) from documento where estado=2";
//
//        $rawdata = $ad->getArraySQL($sql);
//
//        if ($rawdata) {
//            $contador = $rawdata[0][0];
//        }
//        return $contador;
//        $ad->desconectarBD();
//    }

//    function getTipoPago() {
//        require_once("fun_sistema.php");
//        $ad = new fun_sistema();
//        $conexion = $ad->conectarBD();
//        $consulta = "select * from tipo_pago";
//        mysqli_set_charset($conexion, "utf8");
//        $registro = mysqli_query($conexion, $consulta);
//        $i = 0;
//        $tabla = "";
//        while ($row = mysqli_fetch_array($registro)) {
//            echo "<option value='" . $row['idtipo_pago'] . "'>" . $row['nombre'] . "</option>";
//        }
//    }
//
//    function getRolesDeUsuario() {
//        require_once("fun_sistema.php");
//        $ad = new fun_sistema();
//        $conexion = $ad->conectarBD();
//        $consulta = "select idrol,nombre from rol;";
//        mysqli_set_charset($conexion, "utf8");
//        $registro = mysqli_query($conexion, $consulta);
//        $i = 0;
//        $tabla = "";
//        while ($row = mysqli_fetch_array($registro)) {
//            echo "<option value='" . $row['idrol'] . "'>" . $row['nombre'] . "</option>";
//        }
//    }
//
//    function getListadoEmpresas() {
//        require_once("fun_sistema.php");
//        $ad = new fun_sistema();
//        $conexion = $ad->conectarBD();
//        $consulta = "select idempresa,nombre from empresa ;";
//        mysqli_set_charset($conexion, "utf8");
//        $registro = mysqli_query($conexion, $consulta);
//        $i = 0;
//        $tabla = "";
//        while ($row = mysqli_fetch_array($registro)) {
//            echo "<option value='" . $row['idempresa'] . "'>" . $row['nombre'] . "</option>";
//        }
//    }
//
//    function getListadoEmpresasDisponibles($usuario) {
//        require_once("fun_sistema.php");
//        $ad = new fun_sistema();
//        $conexion = $ad->conectarBD();
//        $consulta = "select*from empresa where idempresa not in(select empresa from usu_emp where usuario=$usuario);";
//        mysqli_set_charset($conexion, "utf8");
//        $registro = mysqli_query($conexion, $consulta);
//        $i = 0;
//        $tabla = "";
//        while ($row = mysqli_fetch_array($registro)) {
//            echo "<option value='" . $row['idempresa'] . "'>" . $row['nombre'] . "</option>";
//        }
//    }
//
//    function PaginaActual() {
//        $nombre_archivo = $_SERVER['SCRIPT_NAME'];
////verificamos si en la ruta nos han indicado el directorio en el que se encuentra
//        if (strpos($nombre_archivo, '/') !== FALSE)
//        //de ser asi, lo eliminamos, y solamente nos quedamos con el nombre sin su extension
//            $nombre_archivo = preg_replace('/\.php$/', '', array_pop(explode('/', $nombre_archivo)));
//
//        return $nombre_archivo;
//    }}
?>