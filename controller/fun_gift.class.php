<?php
session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {}
$script = "";
$data[] = array();
$res1 = null;
require_once '../model/Db.class.php';
require_once '/contruct/Conf.class.php';
$call = new fun_Gift();




if (isset($_POST["identificador"]) && !empty($_POST["identificador"])) {
      $data = [  0 => (isset($_POST["identificador"]) ? $_POST["identificador"] : "") ];
      $res1 = $call->changeTurn($data[0]);

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
    private  $result_array = array();
    private $data;
    
    function Obtenerturns($userid) {
                try {
            $this->bd = Db::getInstance();
            $this->sql = "call getTurnForID(" .$userid. ",406,1730,1900);";
              $this->stmt = $this->bd->ejecutar($this->sql);
               if (mysql_num_rows($this->stmt)){ $this->row_cnt = mysql_num_rows($this->stmt); }else{ $this->row_cnt=0;}
               mysql_free_result($this->stmt);
                echo $this->row_cnt;
        //  echo gettype($this->row_cnt);
            if ($this->row_cnt === 0) {
                  return FALSE;
            } elseif ($this->row_cnt > 0) {
                 //comprobar que no tenga cambios anteriores en timesent  
                return TRUE;
            }
           
        } catch (Exception $ex) {
            echo $ex;
            return FALSE;
        }
    }

    function changeTurn($param) {
            try {
        if ($this->Obtenerturns($param)) {
         echo 'hay un wn con el turno de 17 o 19   sin cambio anteriores';
        }

        } catch (Exception $ex) {
            echo $ex;
        }
    }


}

