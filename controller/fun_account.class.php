<?php

session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {

    $header = (isset($_SESSION["piochaid"]) ? $_SESSION["piochaid"] : "");
    $idinfo = (isset($_SESSION["id"]) ? $_SESSION["id"] : "");
    $email = (isset($_SESSION["email"]) ? $_SESSION["email"] : "");
}
$res1 = null;
$res2 = null;
$script = "";
$data[] = array();
unset($data);
require_once '../model/Db.class.php';
require_once '/contruct/Conf.class.php';
require_once 'fun_inicio.php';
$call = new fun_account();
if (isset($_POST["parametro2"]) && !empty($_POST["parametro2"])) {
    $data = [
        1 => (isset($_POST["parametro1"]) ? $_POST["parametro1"] : ""),
        2 => (isset($_POST["parametro2"]) ? $_POST["parametro2"] : ""),
        3 => (isset($_POST["parametro3"]) ? $_POST["parametro3"] : "")
    ];
    $res1 = $call->UPdatePass($data, $header);
} elseif (isset($_POST["parametro0"]) && !empty($_POST["parametro0"])) {
    $data = [
        0 => (isset($_POST["parametro0"]) ? $_POST["parametro0"] : "")
    ];
   $res2=$call->UPdateEmail($data, $header);
} elseif (isset($_POST["parametro4"]) && !empty($_POST["parametro4"])) {
    $data = [
        4 => (isset($_POST["parametro4"]) ? $_POST["parametro4"] : "")
    ];
    $script = "UPDATE `queryjumbo`.`userinformation` SET `fechanaciminto`='" . $data[4] . "' WHERE `id`='" . $idinfo . "';";
    $call->UPdateInfo($script);
} elseif (isset($_POST["parametro5"]) && !empty($_POST["parametro5"])) {
    $data = [
        5 => (isset($_POST["parametro5"]) ? $_POST["parametro5"] : "")
    ];
    $script = "UPDATE `queryjumbo`.`userinformation` SET `cellphone`='" . $data[5] . "' WHERE `id`='" . $idinfo . "';";
    $call->UPdateInfo($script);
} elseif (isset($_POST["parametro6"]) && !empty($_POST["parametro6"])) {
    $data = [
        6 => (isset($_POST["parametro6"]) ? $_POST["parametro6"] : "")
    ];
    $script = "UPDATE `queryjumbo`.`userinformation` SET `otrophone`='" . $data[6] . "' WHERE `id`='" . $idinfo . "';";
    $call->UPdateInfo($script);
} elseif (isset($_POST["parametro7"]) && !empty($_POST["parametro7"])) {
    $data = [
        7 => (isset($_POST["parametro7"]) ? $_POST["parametro7"] : "")
    ];
    $script = "UPDATE `queryjumbo`.`userinformation` SET `carrera_idcarrera`='" . $data[7] . "' WHERE `id`='" . $idinfo . "';";
    $call->UPdateInfo($script);
} elseif (isset($_POST["parametro8"]) && !empty($_POST["parametro8"])) {
    $data = [
        8 => (isset($_POST["parametro8"]) ? $_POST["parametro8"] : "")
    ];
    $script = "UPDATE `queryjumbo`.`userinformation` SET `direccion`='" . $data[8] . "' WHERE `id`='" . $idinfo . "'; ";
    $call->UPdateInfo($script);
}

/**
 * Description of fun_account
 *
 * @author dxint
 */
 

 echo '{ "Rpass": "' .$res1. '","Remail": "' .$res2. '","Clientd": "A","Cliende": "A" }';
class fun_account {

    private $sql;
    private $bd;
    private $stmt;
    private $rawdata;
  
    private $mum;
    private $result_array = array();

    function UPdateEmail($data, $header) {

        if ($this->VerificarEmail($data[0])) {
            try {
                $email = $data[0];
                $this->sql = "UPDATE `queryjumbo`.`users` SET `email`='" . $email . "' WHERE `piochaid`='" . $header . "';";
                $this->bd->ejecutar($this->sql);
                return 1;
                session_destroy();
            } catch (Exception $ex) {
                echo $ex;
                return 0;
            }
        }else{return 0;}
    }

    function UPdatePass($data, $header) {

        if ($this->VerificarPassword($data, $header)) {

            try {
                $md5pass = md5($data[2]);
                $this->sql = "UPDATE `queryjumbo`.`users` SET `user_passwd`='" . $md5pass . "' WHERE `piochaid`='" . $header . "';";
                $this->bd->ejecutar($this->sql);
                return 1;
            } catch (Exception $ex) {
                echo $ex;
            }
        }  else {
            return 0;
        }
    }
    
    function UPdateInfo($script) {
            try {
                 $this->bd = Db::getInstance();
                $this->bd->ejecutar($script);
                return true;
            } catch (Exception $ex) {
                echo $ex;
                 return false;
            }
        }

    function VerificarPassword($data, $header) {
        try {

            $md5pass = md5($data[1]);
            $this->bd = Db::getInstance();
            $this->sql = "select count(user_passwd) as total from queryjumbo.users where user_passwd like '" . $md5pass . "' and piochaid like '" . $header . "';";
            $this->stmt = $this->bd->ejecutar($this->sql);
            $this->rawdata = $this->bd->obtener_fila($this->stmt, 0);
            $this->mum = (int) $this->rawdata[0];
            if ($this->mum === 1 && $data[2] == $data[3]) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo $ex;
            return false;
        }
    }

    function VerificarEmail($direccion) {
        $Sintaxis = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
     
            try {

            $this->bd = Db::getInstance();
            $this->sql = "select count(email) as total from  queryjumbo.users where email='" .$direccion. "';";
            $this->stmt = $this->bd->ejecutar($this->sql);
            $this->rawdata = $this->bd->obtener_fila($this->stmt, 0);
            $this->mum = (int) $this->rawdata[0];
          if ((preg_match($Sintaxis, $direccion))&&($this->mum==0)) {
            return true;
        } else {
            return false;
        }
        } catch (Exception $ex) {
            echo $ex;
            return false;
        }
        
        
    }

}
