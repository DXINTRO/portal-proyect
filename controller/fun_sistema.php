<?php

class fun_sistema {

    //Función que crea y devuelve un objeto de conexión a la base de datos y chequea el estado de la misma. 
//    public function conectarBD() {
//        require_once("configuracion.php");
//        $ad = new Configuracion();
//        $config = $ad->get_config();
//        //variable que guarda la conexión de la base de datos
//        $conexion = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME'])or die('No se pudo conectar: ' . mysql_error());;
//        //Comprobamos si la conexión ha tenido exito
//         
//        if (!$conexion) {
//            echo 'Ha sucedido un error inexperado en la conexion de la base de datos';
//        }
//        //devolvemos el objeto de conexión para usarlo en las consultas  
//        return $conexion;
//    }
//
//    /* Desconectar la conexion a la base de datos */
//
//    public function desconectarBD($conexion) {
//        //Cierra la conexión y guarda el estado de la operación en una variable
//        $close = mysqli_close($conexion);
//        //Comprobamos si se ha cerrado la conexión correctamente
//        if (!$close) {
//            echo 'Ha sucedido un error inexperado en la desconexion de la base de datos';
//        }
//        //devuelve el estado del cierre de conexión
//        return $close;
//    }

    //Devuelve un array multidimensional con el resultado de la consulta
    public function getArraySQL($sql) {
        //Creamos la conexión
        $conexion = $this->conectarBD();
        //generamos la consulta

        mysqli_set_charset($conexion, "utf8");

        if (!$result = mysqli_query($conexion, $sql)) {
            die();
        }
        $rawdata = array();
        //guardamos en un array multidimensional todos los datos de la consulta
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
            $rawdata[$i] = $row;
            $i++;
        }
        //Cerramos la base de datos
        $this->desconectarBD($conexion);
        //devolvemos rawdata
        return $rawdata;
    }

    //inserta en la base de datos un nuevo registro en la tabla cliente
    function Query($sql) {
        //creamos la conexión
        $conexion = $this->conectarBD();

        mysqli_set_charset($conexion, "utf8");
        //hacemos la consulta y la comprobamos 
        $consulta = mysqli_query($conexion, $sql);
        if (!$consulta) {
            echo "Error";
        } else {
            echo "correcto";
        }
        //Desconectamos la base de datos
        $this->desconectarBD($conexion);
        //devolvemos el resultado de la consulta (true o false)
        return $consulta;
    }

    function Ejecutar($sql) {
        //creamos la conexión
        $conexion = $this->conectarBD();

        mysqli_set_charset($conexion, "utf8");
        //hacemos la consulta y la comprobamos 
        $consulta = mysqli_query($conexion, $sql);
        //Desconectamos la base de datos
        $this->desconectarBD($conexion);
        //devolvemos el resultado de la consulta (true o false)
        return $consulta;
    }

    function dias_transcurridos($fecha_i, $fecha_f) {
        /*
         * $fecha1 = new DateTime("2015-09-14 00:00:00");
          $fecha2 = new DateTime("2015-09-30 00:00:00");
          $fecha = $fecha1->diff($fecha2);
          echo $fecha->d;
         */
        $valoresPrimera = explode("/", $fecha_i);
        $valoresSegunda = explode("/", $fecha_f);
        $diaPrimera = $valoresPrimera[0];
        $mesPrimera = $valoresPrimera[1];
        $anyoPrimera = $valoresPrimera[2];
        $diaSegunda = $valoresSegunda[0];
        $mesSegunda = $valoresSegunda[1];
        $anyoSegunda = $valoresSegunda[2];
        $diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anyoPrimera);
        $diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anyoSegunda);
        if (!checkdate($mesPrimera, $diaPrimera, $anyoPrimera)) {
            // "La fecha ".$primera." no es válida";
            return 0;
        } elseif (!checkdate($mesSegunda, $diaSegunda, $anyoSegunda)) {
            // "La fecha ".$segunda." no es válida";
            return 0;
        } else {
            return $diasPrimeraJuliano - $diasSegundaJuliano;
        }
    }

    function cambiaf_a_mysql($fecha) {
        ereg("([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha);
        $lafecha = $mifecha[3] . "-" . $mifecha[2] . "-" . $mifecha[1];
        return $lafecha;
    }

    /*
      //insertar un telefono
      function InsertPhone($modelo, $marca, $mac, $ip) {
      //creamos la conexión
      $conexion = $this->conectarBD();

      //Escribimos la sentencia sql necesaria respetando los tipos de datos
      $sql = "insert into smartphone (modelo,marca,mac,ip)
      values ('" . $modelo . "','" . $marca . "','" . $mac . "','" . $ip . "')";

      //hacemos la consulta y la comprobamos
      $consulta = mysqli_query($conexion, $sql);
      if (!$consulta) {
      echo "Error";
      echo $sql;
      } else {
      echo "Insertado";
      // echo "Se ha insertado el usuario: ".$nombre." ".$apellidos." con email: ".$email;
      }
      //Desconectamos la base de datos
      $this->desconectarBD($conexion);
      //devolvemos el resultado de la consulta (true o false)
      return $consulta;
      }

      //obtiene toda la informacion de la base de datos
      function getAllInfo() {
      //Creamos la consulta
      $sql = "SELECT * FROM productos;";
      //obtenemos el array con toda la información
      return $this->getArraySQL($sql);
      }

      function getProducto($codigo) {
      //Creamos la consulta
      $sql = "SELECT * FROM productos where codigo = " . $codigo . ";";
      //obtenemos el array con toda la información
      return $this->getArraySQL($sql);
      }

      function getProductoPrincipal() {
      $conexion = $this->conectarBD();
      //Creamos la consulta
      $consulta = "SELECT id, codigo, nombre, marca, stock FROM productos";
      //obtenemos los registros de la consulta
      $registro = mysqli_query($conexion, $consulta);
      //obtenemos el array con toda la información
      return $registro;
      }

      function getPhones() {

      $sql = "SELECT modelo,marca,mac,ip from smartphone";
      $index = 0;
      $conexion = $this->conexion();
      $ejecutar = $this->mysqli->query($sql);
      while ($rs = $ejecutar->fetch_array(MYSQLI_BOTH)) {
      echo "<div class='well col-md-12'>";
      echo "   <div class='col-md-3'>";
      $modelo = $this->buscarPalabra($rs[0]);
      echo "       <img src='" . $modelo . "' width='100' >";
      echo "    </div>";
      echo "    <div class='col-md-6'>";
      echo "      <H2><B>" . $rs[0] . "</B></H2>";
      echo "      <B>MODELO :</B>" . $rs[1] . "<BR>";
      echo "      <B>MAC    :</B>" . $rs[2] . "<BR>";
      echo "      <B>IP     :</B>" . $rs[3] . "<BR>";
      echo "      <br>";
      echo "      <p><a class='btn btn-default' href='#' role='button'>VER DETALLES »</a></p>";
      echo "    </div>";
      echo "    <div class='col-md-3'>";
      echo "       <h1><b>#" . ($index + 1) . "</b></h1>";
      echo "    </div>";
      echo "</div>";
      $index++;
      }
      $this->mysqli->close();
      }

      function droptable($tabla) {
      $this->conexion();
      $sql = "truncate table " . $tabla . " ;";
      $ejecutar = $this->mysqli->query($sql);
      if ($this->mysqli->affected_rows > 0) {
      return "se elimino correctamente";
      } else {
      return "no se logro eliminar";
      }
      }

      function contarTelefonos() {
      $index = 0;
      $this->conexion();
      $sql = "select * from smartphone";
      $ejecutar = $this->mysqli->query($sql);
      while ($rs = $ejecutar->fetch_array(MYSQLI_BOTH)) {
      $index++;
      }
      $this->mysqli->close();
      return $index;
      }

      function buscarPalabra($cadena) {

      $rp = strrpos($cadena, "LGE");
      //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
      if ($rp === false) {
      return "'../../images/LG.png'";
      }
      $rp = strrpos($cadena, "Sony");
      //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
      if ($rp === true) {
      return"'../../images/SONY.png'";
      }
      $rp = strrpos($cadena, "Motorola");
      //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
      if ($rp === true) {
      return"'../../images/MOTOROLA.png'";
      }
      return "../../images/LG.png";
      }
     */

    function extraerEmpresa() {
        return $_SESSION['empresa_def_id'];
    }

}

?>