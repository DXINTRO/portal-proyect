<?php

session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {
  
    require_once '../model/Db.class.php';
    require_once '/contruct/Conf.class.php';
   require_once 'clockConfig.php';
  $call = new fun_setMail();
  



$code = isset($_POST["parametro1"])?$_POST["parametro1"]:"";
$sub  = isset($_POST["parametro2"])?$_POST["parametro2"]:"";

}



 $call->UPdateMail($code,$sub);

/**
 * Description of fun_resize
 *
 * @author dxint
 */
class fun_setMail {

    //put your code here
    private $sql;
    private $bd;
    private $stmt;
    private $rawdata;
private $id;


      public function buscarid() {
        try {
            $this->bd = Db::getInstance();
            $this->id = $this->bd->lastID("idplanilla","planilla");
            return $this->id;
        } catch (Exception $ex) {
             echo $ex;
            return FALSE;
        }
       
    }
    
  
   public function UPdateMail($code, $sub) {//2015-12-30'
        set_time_limit(0);
        list ($seman, $star, $end) = Week();
        try {
            $html = mysql_real_escape_string($code);
            $this->bd = Db::getInstance();
            $this->sql = "UPDATE `queryjumbo`.`planilla` SET `fechainicio`='" . $star . "', `fechafinal`='" . $end . "', `asunto`='" . $sub . "', `comntario`='" . $html . "' WHERE `idplanilla`='" . $this->buscarid() . "';";
            $this->stmt = $this->bd->ejecutar($this->sql);
        } catch (Exception $ex) {
            echo $ex;
        }
    }

}
