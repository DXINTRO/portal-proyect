<?php

class fun_inicio {

    function FacturasPendientes() {
        require_once("fun_sistema.php");
        $ad = new fun_sistema();

        $sql = "select count(*) from documento where estado=2";

        $rawdata = $ad->getArraySQL($sql);

        if ($rawdata) {
            $contador = $rawdata[0][0];
        }
        return $contador;
        $ad->desconectarBD();
    }

    function validarusuario($log, $pas) {
        require_once("fun_sistema.php");
        require_once("configuracion.php");
        $ad = new fun_sistema();
        $conf = new Configuracion();
        $datos = $conf->get_config();
         

        $sql = "call getUsuarioValido('" . $log . "','" . $pas . "',4);";

        $rawdata = $ad->getArraySQL($sql);
        echo $rawdata[0][0]; 
        if ($rawdata) {
            
            session_start();
            $_SESSION['idusuario'] = $rawdata[0][0];   //id del usuario
            $_SESSION['nombre'] = $rawdata[0][1];   //nombre del usuario
            $_SESSION['pass'] = $rawdata[0][2];   //contraseña del usuario
            $_SESSION['empresa_def_id'] = $rawdata[0][3];   //empresa por defecto : ID
            $_SESSION['empresa_def_nom'] = $rawdata[0][4];   //empresa por defecto : NOMBRE
            $_SESSION['empresa_def_logo'] = $datos['path_logo_emp'] . $rawdata[0][5]; //ruta completa de la foto
            //Datos de permisos
            
            $_SESSION['fact_add'] = $rawdata[0][6];
            $_SESSION['fact_mod'] = $rawdata[0][7];
            $_SESSION['fact_pag'] = $rawdata[0][8];
            $_SESSION['fact_pdf'] = $rawdata[0][9];
            $_SESSION['prov_add'] = $rawdata[0][10];
            $_SESSION['prov_mod'] = $rawdata[0][11];
            $_SESSION['trab_add'] = $rawdata[0][12];
            $_SESSION['trab_mod'] = $rawdata[0][13];
            $_SESSION['user_add'] = $rawdata[0][14];
            $_SESSION['user_mod'] = $rawdata[0][15];
            $_SESSION['tr_planilla'] = $rawdata[0][16];
            $_SESSION['transporte'] = $rawdata[0][17];
            $_SESSION['develop'] = $rawdata[0][18];
            $_SESSION['reporte'] = $rawdata[0][19];
            $_SESSION['config'] = $rawdata[0][20];
            $_SESSION['facturas'] = "";
            $_SESSION['idfactdelete'] = "";
            $_SESSION['path_adjuntos'] = $datos['path_adjuntos'];
            $_SESSION['template'] = "theme-dust";
             
            /*
              theme-adminflare
              theme-asphalt
              theme-clean
              theme-dust
              theme-fresh
              theme-frost
              theme-purple-hills
              theme-silver
              theme-white
             */
            header("location:index.php");
        } else {
            return "Problemas al iniciar sesion";
            
        }
        $ad->desconectarBD();
    }

    function getDatosEmpresa($idusuario, $idempresa) {
        require_once("configuracion.php");
        $conf = new Configuracion();
        $datos = $conf->get_config();

        require_once("fun_sistema.php");
        $ad = new fun_sistema();
        $conexion = $ad->conectarBD();

        $consulta = "call ValidarCambioDeEmpresa(" . $idusuario . "," . $idempresa . ");";
        mysqli_set_charset($conexion, "utf8");
        $registro = mysqli_query($conexion, $consulta);
        if ($rs = mysqli_fetch_array($registro)) {
            $datos['id'] = $rs[0];
            $datos['nombre'] = $rs[1];
            $datos['logo'] = $datos['path_logo_emp'] . $rs[2];
        } else {
            $datos = null;
        }
        return $datos;
    }

    function getempresas() {
        require_once("fun_sistema.php");
        $ad = new fun_sistema();
        $conexion = $ad->conectarBD();
        $consulta = "CALL getEmpListadoInicio(" . $_SESSION['empresa_def_id'] . "," . $_SESSION['idusuario'] . ");";
        mysqli_set_charset($conexion, "utf8");
        $registro = mysqli_query($conexion, $consulta);
        if ($registro) {
            echo "<ul class='dropdown-menu dropdown-menu-rigth'>";
            while ($row = mysqli_fetch_array($registro)) {
                $id = $row['idempresa'];
                $nom = $row['nombre'];
                echo "<li><a onclick=cargarEmpresa(" . $id . ")>" . $nom . "</a></li>";
            }
            echo "</ul>";
        }
    }

    function getClieproveConEmpresa($empresa, $tipo) {
        require_once("fun_sistema.php");
        $ad = new fun_sistema();
        $conexion = $ad->conectarBD();
        echo $consulta = "select * from vistaclieprove where id in(select clieprove from emp_clieprove where empresa=$empresa) and (estado=1 and tipo=$tipo);";
        mysqli_set_charset($conexion, "utf8");
        $registro = mysqli_query($conexion, $consulta);
        $i = 0;
        $tabla = "";
        while ($row = mysqli_fetch_array($registro)) {
            echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . " - " . $row['rut'] . "</option>";
        }
    }

    function getTipoPago() {
        require_once("fun_sistema.php");
        $ad = new fun_sistema();
        $conexion = $ad->conectarBD();
        $consulta = "select * from tipo_pago";
        mysqli_set_charset($conexion, "utf8");
        $registro = mysqli_query($conexion, $consulta);
        $i = 0;
        $tabla = "";
        while ($row = mysqli_fetch_array($registro)) {
            echo "<option value='" . $row['idtipo_pago'] . "'>" . $row['nombre'] . "</option>";
        }
    }

    function getRolesDeUsuario() {
        require_once("fun_sistema.php");
        $ad = new fun_sistema();
        $conexion = $ad->conectarBD();
        $consulta = "select idrol,nombre from rol;";
        mysqli_set_charset($conexion, "utf8");
        $registro = mysqli_query($conexion, $consulta);
        $i = 0;
        $tabla = "";
        while ($row = mysqli_fetch_array($registro)) {
            echo "<option value='" . $row['idrol'] . "'>" . $row['nombre'] . "</option>";
        }
    }

    function getListadoEmpresas() {
        require_once("fun_sistema.php");
        $ad = new fun_sistema();
        $conexion = $ad->conectarBD();
        $consulta = "select idempresa,nombre from empresa ;";
        mysqli_set_charset($conexion, "utf8");
        $registro = mysqli_query($conexion, $consulta);
        $i = 0;
        $tabla = "";
        while ($row = mysqli_fetch_array($registro)) {
            echo "<option value='" . $row['idempresa'] . "'>" . $row['nombre'] . "</option>";
        }
    }

    function getListadoEmpresasDisponibles($usuario) {
        require_once("fun_sistema.php");
        $ad = new fun_sistema();
        $conexion = $ad->conectarBD();
        $consulta = "select*from empresa where idempresa not in(select empresa from usu_emp where usuario=$usuario);";
        mysqli_set_charset($conexion, "utf8");
        $registro = mysqli_query($conexion, $consulta);
        $i = 0;
        $tabla = "";
        while ($row = mysqli_fetch_array($registro)) {
            echo "<option value='" . $row['idempresa'] . "'>" . $row['nombre'] . "</option>";
        }
    }

    function PaginaActual() {
        $nombre_archivo = $_SERVER['SCRIPT_NAME'];
//verificamos si en la ruta nos han indicado el directorio en el que se encuentra
        if (strpos($nombre_archivo, '/') !== FALSE)
        //de ser asi, lo eliminamos, y solamente nos quedamos con el nombre sin su extension
            $nombre_archivo = preg_replace('/\.php$/', '', array_pop(explode('/', $nombre_archivo)));

        return $nombre_archivo;
    }

}

?>