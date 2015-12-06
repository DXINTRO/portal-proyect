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
$call = new fun_giftYlayoll();




if (isset($_POST["data"]) && !empty($_POST["data"])) {
      $data = [
        0 => (isset($_POST["data"]) ? $_POST["data"] : ""),
        1 => (isset($_POST["radio"]) ? $_POST["radio"] : "")
              ];
         if ($data[1]==="piochaid") { $script = "SELECT * FROM queryjumbo.users where piochaid LIKE '" .$data[0]. "%';";}
     elseif ($data[1]==="displayname") { $script = "SELECT * FROM queryjumbo.userinformation where displayname LIKE '" .$data[0]. "%';";}
     elseif ($data[1]==="email") { $script = "SELECT * FROM queryjumbo.users where email LIKE '" .$data[0]. "%';";}
      $res1 = $call->keyup($script,$data[1]);

}elseif (isset($_POST["txtsearhE"]) && !empty($_POST["txtsearhE"])) {
     $data = [
    2 =>  (isset($_POST["txtsearhE"]) ? $_POST["txtsearhE"] : "")
    ];
      $res1 = $call->searh($data[2],3);
    
}elseif (isset($_POST["txtsearhP"]) && !empty($_POST["txtsearhP"])) {
     $data = [
    3 =>  (isset($_POST["txtsearhP"]) ? $_POST["txtsearhP"] : "")
    ];
      $res1 = $call->searh($data[3],1);
    
}elseif (isset($_POST["txtsearhN"]) && !empty($_POST["txtsearhN"])) {
     $data = [
    4 =>  (isset($_POST["txtsearhN"]) ? $_POST["txtsearhN"] : "")
    ];
      $res1 = $call->searh($data[4],2);
    
}


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fun_giftYlayoll
 *
 * @author dxint
 */
class fun_giftYlayoll {
    //put your code here
       private $sql;
    private $bd;
    private $stmt;
    private $rawdata;
    private  $result_array = array();
    private $data;
    
    function keyup($script,$index) {
          try {
            $this->bd = Db::getInstance();
            $result = $this->bd->ejecutar($script);
            $dataa= array();
            while($this->result_array = mysqli_fetch_array($result)){
                array_push($dataa,$this->result_array[$index]);                            
                }
               echo json_encode($dataa);         
        } catch (Exception $ex) {
            echo $ex;
         
        }        
    }
    
    function searh($param, $num) {
               try {
            $this->bd = Db::getInstance();
            $this->sql = "call getdatos('" . trim($param) . "'," . $num . ");";
          
            $this->stmt = $this->bd->ejecutar($this->sql);$i=0;
            while ($row = mysqli_fetch_array($this->stmt)) {
                 $this->rawdata[$i]['id']=$row["id"];
                   $this->rawdata[$i]['Piocha']=$row["Piocha"];
                     $this->rawdata[$i]['Nombre']=$row["Nombre"];
                       $this->rawdata[$i]['Apellido1']=$row["Apellido1"];
                       $this->rawdata[$i]['Apellido2']=$row["Apellido2"];
                       $this->rawdata[$i]['Email']=$row["Email"];
                   $this->data['posts'][$i] = $this->rawdata[$i];$i=$i+1;
            }
             echo $json_string = json_encode( $this->data['posts']);
             //$file = 'bootstrap_fill.json';
            // $file_put_contents($file,$json_string);
            
       
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

//
//
//function searh($param, $num) {
//               try {
//            $this->bd = Db::getInstance();
//            $this->sql = "call getdatos('" . trim($param) . "'," . $num . ");";
//             echo $this->sql;
//            $this->stmt = $this->bd->ejecutar($this->sql);
//            while ($row = mysql_fetch_array($this->stmt)) {
//                echo "<tr><td width=\"25%\"><font face=\"verdana\">" . $row["id"] . "</font></td>";
//                echo "<td width=\"25%\"><font face=\"verdana\">" .$row["Piocha"] . "</font></td>";
//                echo "<td width=\"25%\"><font face=\"verdana\">" .$row["Nombre"] . "</font></td>";
//                echo "<td width=\"25%\"><font face=\"verdana\">" .$row["Apellido1"] . "</font></td>";
//                echo "<td width=\"25%\"><font face=\"verdana\">" .$row["Apellido2"]. "</font></td></tr>"; 
//                echo "<td width=\"25%\"><font face=\"verdana\">" .$row["Email"]. "</font></td></tr>"; 
//
//            }
//            mysql_free_result($this->stmt);
//        } catch (Exception $exc) {
//            echo $exc->getTraceAsString();
//        }
//    }