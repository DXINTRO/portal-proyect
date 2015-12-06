<?php
session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {
$script = "";
$data[] = array();
$res1 = null;
require_once '../model/Db.class.php';
require_once '/contruct/Conf.class.php';
require_once 'clockConfig.php';
}
$call = new fun_Gift();
if (isset($_POST["identificador"]) && !empty($_POST["identificador"])) {
    $data = [ 0 => (isset($_POST["identificador"]) ? $_POST["identificador"] : ""),
        1 => (isset($_SESSION['piochaid']) ? $_SESSION['piochaid'] : ""),
        2 => (isset($_SESSION['id']) ? $_SESSION['id'] : "")];

    $res1 = $call->changeTurn($data);
    echo '{ "RChanger": "' . $res1 . '" }';
}


if (isset($_POST["IDRow"]) && !empty($_POST["IDRow"])) {
    $data = [ 3 => (isset($_POST['IDRow']) ? $_POST['IDRow'] : ""),
        2 => (isset($_SESSION['id']) ? $_SESSION['id'] : "")];
          $call->Eliminarid($data);
}else{
  if (isset($_POST["piocha"]) && !empty($_POST["piocha"])) {
    $data = [ 1 => (isset($_SESSION['piochaid']) ? $_SESSION['piochaid'] : ""),
        2 => (isset($_SESSION['id']) ? $_SESSION['id'] : "")];
        $call->ObtenerMisChangersTAble($data[1]);

}  
    
    
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of fun_gift
 *
 * @author dxint
 */
class fun_Gift {
    //put your code here
    private $sql;
    private $bd;
    private $stmt;
    private $rawdata;
    private $row_cnt;
    private $result_array = array();
    private $released;
    private $IDtableRow;
    
    function Eliminarid($data) {
       $this->bd = Db::getInstance();
       $this->sql =" UPDATE `queryjumbo`.`timessent` SET `released`='0' WHERE `timeid`='".$data[3]."';";
       $this->stmt = $this->bd->ejecutar($this->sql);
    }
    
    function ObtenerChangers($param) {
        try { // call getTimeSend(200); devuleve  todos los datos del time sent  si released es 0 no tiene cambios anteriores  si es 1 o otro tiene un cambio ya 
        $this->sql = "call getTimeSend(" . $param . ");";
        $this->stmt = $this->bd->ejecutar($this->sql);
        $this->rawdata = $this->bd->obtener_fila($this->stmt, 0);
        if ($this->rawdata) {
            $this->released = $this->rawdata[1];
            if ($this->released === "0") {
                return true;
            } else {
                return false;
            }
        }  //
         } catch (Exception $ex) {
              return false;
        }
    }
    function Obtenerturns($userid,$myid) {
        try {//call getTurnForID(200,406,1730,1900);   si devuelve 0 filas el usuario no tiene  turno de 17 o 19 :  puedes cambiarle
            if ($userid!=$myid) {// porsi condulta por si mismo no dejarlo ok
               $this->sql = "call getTurnForID(" . $userid . ",406,1730,1900);";
               $this->stmt = $this->bd->ejecutar($this->sql);
              if (mysqli_num_rows($this->stmt)) { $this->row_cnt = mysqli_num_rows($this->stmt);} else { $this->row_cnt = 0;return TRUE;}
                   if ($this->row_cnt > 0) {
                return FALSE;
            }
            }else{ return FALSE;}
        } catch (Exception $ex) {
            echo $ex;
            return FALSE;
        }
    }
    function ObtenerMisturns($Piochaid) {
        try {
            $this->sql = "call getTurnForPiocha('" . $Piochaid . "',406,1730,1900);";
            $this->stmt = $this->bd->ejecutar($this->sql);
            if (mysqli_num_rows($this->stmt)) {$this->row_cnt = mysqli_num_rows($this->stmt);} else {$this->row_cnt = 0;return FALSE; }
            // echo $this->row_cnt;
            //  echo gettype($this->row_cnt);
            if ($this->row_cnt > 0) {// tienes turnos de 17 o |19 puedes cambiar 
                return true;
            } 
        } catch (Exception $ex) {
            echo $ex;
            return FALSE;
        }
    }
    function ObtenerMisChangers($Piochaid) {
        //call getmischangers('c61');// c61 ya ha echo un cambio a algun usuario devuelve una fila  si de vuelve mas de 2 notificar  o suspender
         try {
           $this->bd = Db::getInstance();
            $this->sql = "call getmischangers('" . $Piochaid . "');";
            $this->stmt = $this->bd->ejecutar($this->sql);
           
            $this->row_cnt = mysqli_num_rows($this->stmt);
            if (mysqli_num_rows($this->stmt)) { $this->row_cnt = mysqli_num_rows($this->stmt);} else {$this->row_cnt = 0;return TRUE;}
            //  echo gettype($this->row_cnt);
          
            if ($this->row_cnt === 1)
            {return FALSE;
            }elseif($this->row_cnt > 1)//tiene mas de 1 suspender :/
            { return FALSE;
            }
        } catch (Exception $ex) {
            echo $ex;
            return FALSE;
        }
    }    function ObtenerMisChangersTAble($Piochaid) {
         try {   
             if (!$this->ObtenerMisChangers($Piochaid)) {
        
             $i=0;
            while ($row = mysqli_fetch_array($this->stmt)) {
                 $this->IDtableRow= $row["timeid"];
                 $this->rawdata[$i]['id']="x4ef5".$row["timeid"];
                   $this->rawdata[$i]['Piocha']=$row["users_piochaid"];
                     $this->rawdata[$i]['Nombre']=$row["displayname"];
                       $this->rawdata[$i]['Apellido']=$row["displayapellidop"];
                       $this->rawdata[$i]['Tiempo']=($row["tiempoDesde"]." asta las 21:00:00 hrs");
                    $this->rawdata[$i]['boton']=('<button class="btn btn-danger btn-sm" onclick="verMiscambios('.$this->IDtableRow.')"><i class="icon-repeat"></i> Cancelar</button>');
                   $this->data['posts'][$i] = $this->rawdata[$i];$i=$i+1;
            }
             echo $json_string = json_encode( $this->data['posts']);
             //$file = 'bootstrap_fill.json';
            // $file_put_contents($file,$json_string);
              }
        } catch (Exception $ex) {
            echo $ex;
            return FALSE;
        }
    }
    
    function changeTurn($data) {
         set_time_limit(0);
        list ($año, $mes, $dia) = clockDateNumber(0); $hora = (clockTimeNumber());
         $timeactual= $año."-".$mes."-".$dia." ".$hora;
             list ($seman, $star, $end) = Week(0);
            
        try {
                if ($this->ObtenerMisChangers($data[1])) {//true puedes seguir ya que tiene 0 cambios anteriores
                 if ($this->Obtenerturns($data[0],$data[2])) {//el usuario no tiene  turno de 17 o 19 :  puedes cambiarle
                     if ($this->ObtenerMisturns($data[1])) {//tu  tienes un turno de 17 o 19 :  puedes cambiarle
                             if ($this->ObtenerChangers($data[0])) {// el usuario no tiene ningun cambio por un tercero puedes siguir  ///al cambiar y actualisar sus valores y agregar esta piocha
                                //recordtorio hacer lo mismo cono en el turnos y empaque con el ultimo id al agregar un usuario nuevo ya que esto se gia por el id de la tabla que tiene que ser el mismo id del usuario
                                 $this->sql = "UPDATE `queryjumbo`.`timessent` SET `released`='1', `timeatual`='".$timeactual."', `tiempoDesde`='".$end." 12:00:01' , `tiempoAsta`='".$end." 21:00:01', `regaladode`='" .$data[1]. "' WHERE `timeid`='" .$data[0]. "';";
                                 $this->bd->ejecutar($this->sql);
                                 
                          }  else {return 3;}//msj el usuario ya tiene un cambio ya por un usuario --- alas ----
                     }else{return 2;}// msj tu no tienes  turnos para regalar
                  } else { return 1; }// el usuario  tiene  turno de 17 o 19   no puedes cambiarle  , si  eress tumismo consultando por ti mismo cagaste
            }else{ return 0;}//tienes un cambio anterior no puedes hacer otro
        } catch (Exception $ex) {
            echo $ex;
        }
    }
}