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
$call = new fun_layoff();




if (isset($_POST["txtsearhN"]) && !empty($_POST["txtsearhN"])) {
     $data = [
    2 =>  (isset($_POST["txtsearhN"]) ? $_POST["txtsearhN"] : "")
    ];
      $res1 = $call->searh($data[2]);
    
}elseif (isset($_POST["txtsearhC"]) && !empty($_POST["txtsearhC"])) {
     $data = [
    3 =>  (isset($_POST["txtsearhC"]) ? $_POST["txtsearhC"] : "")
    ];
      $res1 = $call->searh($data[3]);
    
}elseif (isset($_POST["txtsearhP"]) && !empty($_POST["txtsearhP"])) {
     $data = [
    4 =>  (isset($_POST["txtsearhP"]) ? $_POST["txtsearhP"] : "")
    ];
      $res1 = $call->searh($data[4]);
    
}


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fun_layoff
 *
 * @author dxint
 */
class fun_layoff {
    //put your code here
     private $sql;
    private $bd;
    private $stmt;
    private $rawdata;
    private  $result_array = array();
    
   
    
    function searh($param) {
        
        
    }
   
    
    }

