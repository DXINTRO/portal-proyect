<?php

session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {
    $header = $_SESSION['piochaid'];
    $id = $_SESSION['id'];
    static $array;
    static $time;
    require_once '../model/Db.class.php';
    require_once '/contruct/Conf.class.php';
    require_once 'clockConfig.php';
    $time = clockTimeString();
    $call = new fun_setTurn();
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
    if (!empty($_POST) || !isset($_POST)) {
        $array = array(
            "cat1" => $_POST['category1'],
            "cat1-R" => $_POST['category1-right'],
            "cat2" => $_POST['category2'],
            "cat2-R" => $_POST['category2-right'],
            "cat3" => $_POST['category3'],
            "cat3-R" => $_POST['category3-right'],
            "cat4" => $_POST['category4'],
            "cat4-R" => $_POST['category4-right'],
            "cat5" => $_POST['category5'],
            "cat5-R" => $_POST['category5-right'],
            "cat6" => $_POST['category6'],
            "cat6-R" => $_POST['category6-right'],
            "cat7" => $_POST['category7'],
            "cat7-R" => $_POST['category7-right'],
            "cat8" => $_POST['category8'],
            "cat8-R" => $_POST['category8-right'],
        );
        if ($array['cat1'] != "" && $array['cat1-R'] != "") {
            $rsp = $call->obtenerNameDay($array['cat1']);
            $rsp1 = $call->obtenerNameTURN($array['cat1-R']);
            echo $rsp1;
            $call->INSERT($header, $id,$rsp,$rsp1, 1, 1, $time);
        }
        if ($array['cat2'] != "" && $array['cat2-R'] != "") {
            $rsp = $call->obtenerNameDay($array['cat2']);
            $rsp1 = $call->obtenerNameTURN($array['cat2-R']);
            $call->INSERT($header, $id,$rsp,$rsp1, 2, 1, $time);
        }
        if ($array['cat3'] != "" && $array['cat3-R'] != "") {
            $rsp = $call->obtenerNameDay($array['cat3']);
            $rsp1 = $call->obtenerNameTURN($array['cat3-R']);
            $call->INSERT($header, $id,$rsp,$rsp1, 3, 1, $time);
        }
        if ($array['cat4'] != "" && $array['cat4-R'] != "") {
            $rsp = $call->obtenerNameDay($array['cat4']);
            $rsp1 = $call->obtenerNameTURN($array['cat4-R']);
            $call->INSERT($header, $id,$rsp,$rsp1, 4, 2, $time);
        }
        if ($array['cat5'] != "" && $array['cat5-R'] != "") {
            $rsp = $call->obtenerNameDay($array['cat5']);
            $rsp1 = $call->obtenerNameTURN($array['cat5-R']);
            $call->INSERT($header, $id,$rsp,$rsp1, 5, 2, $time);
        }
        if ($array['cat6'] != "" && $array['cat6-R'] != "") {
            $rsp = $call->obtenerNameDay($array['cat6']);
            $rsp1 = $call->obtenerNameTURN($array['cat6-R']);
            $call->INSERT($header, $id,$rsp,$rsp1, 6, 2, $time);
        } if ($array['cat7'] != "" && $array['cat7-R'] != "") {
            $rsp = $call->obtenerNameDay($array['cat7']);
            $rsp1 = $call->obtenerNameTURN($array['cat7-R']);
            $call->INSERT($header, $id,$rsp,$rsp1, 7, 2, $time);
        }if ($array['cat8'] != "" && $array['cat8-R'] != "") {
            $rsp = $call->obtenerNameDay($array['cat8']);
            $rsp1 = $call->obtenerNameTURN($array['cat8-R']);
            $call->INSERT($header, $id,$rsp,$rsp1, 8, 2, $time);
        }
//       call setTurnos("c60",201,400,0800,1,1,2030013321);
///* c60 con el id $$ pudio un 400 alas 0800, en la fila 1 tipo 1 alas 24543date*/
//        
// piocha= piocha de la session       
// id usuario =  id del usuario de la secion
//  day= numero del 400 o 406  lunes=400 martes 401        
// hour = donde es 0800  es la hora  elegida 08:00 
//index=  index de los select  del 1 a 8
//tipo  =   tipo de turno primario o segundarios  primario 0               opcional  1 
//milisegundos= milesigundeos del relog
//    if (isset($_POST['hobby'])) {
//        echo "<br/> You Love: ";
//        foreach ($_POST['hobby'] as $hobby) {
//            echo "<b>" . $hobby . " </b>";
//        }
//    }
    }
} catch (Exception $ex) {
    
}

class fun_setTurn {
private $day;
private $turn;
private $sql;
private $bd;
 private $stmt;
   
//put your code here
    function obtenerNameDay($param) {
        switch ($param) {
            CASE "0": $this->day = 400;
                break;
            CASE "1": $this->day = 401;
                break;
            CASE "2": $this->day = 402;
                break;
            CASE "3": $this->day = 403;
                break;
            CASE "4": $this->day = 404;
                break;
            CASE "5": $this->day = 405;
                break;
            CASE "6": $this->day = 406;
                break;
            DEFAULT: $this->day = null;
                break;
        }
        return $this->day;
    }
        function obtenerNameTURN($param) {
        switch ($param) {
            CASE "0": $this->turn = 800;
                break;
            CASE "1": $this->turn = 900;
                break;
            CASE "2": $this->turn = 1030;
                break;
            CASE "3": $this->turn = 1200;
                break;
            CASE "4": $this->turn = 1230;
                break;
            CASE "5": $this->turn = 1400;
                break;
            CASE "6": $this->turn = 1530;
                break;
            CASE "7": $this->turn = 1730;
                break;
            CASE "8": $this->turn = 1900;
                break;
            DEFAULT: $this->turn = null;
                break;
        }
        return $this->turn;
    }

    function INSERT($header, $id, $day, $hor, $fila, $tpo, $time) {
        set_time_limit(0);
        try {
            $this->bd = Db::getInstance();
           $this->sql = "call setTurnos('" . $header . "','" . $id . "'," . $day . "," . $hor . "," . $fila . "," . $tpo . "," . $time . ");";
           $this->stmt = $bd->ejecutar($this->sql);
       } catch (Exception $ex) {
           echo $ex;
       }
    }

}
?>