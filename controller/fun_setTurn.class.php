<?php

session_start();
if (!isset($_SESSION['piochaid'])) {
    header("location:../index.php");
} else {
    $header = $_SESSION['piochaid'];
    $id = $_SESSION['id'];
    static $day = 0;
    static $turn = 0;
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

//put your code here
    function obtenerNameDay($param) {
        switch ($param) {
            CASE "0": $day = 400;
                break;
            CASE "1": $day = 401;
                break;
            CASE "2": $day = 402;
                break;
            CASE "3": $day = 403;
                break;
            CASE "4": $day = 404;
                break;
            CASE "5": $day = 405;
                break;
            CASE "6": $day = 406;
                break;
            DEFAULT: ;
                break;
        }
        return $day;
    }
        function obtenerNameTURN($param) {
        switch ($param) {
            CASE "0": $turn = 800;
                break;
            CASE "1": $turn = 900;
                break;
            CASE "2": $turn = 1030;
                break;
            CASE "3": $turn = 1200;
                break;
            CASE "4": $turn = 1230;
                break;
            CASE "5": $turn = 1400;
                break;
            CASE "6": $turn = 1530;
                break;
            CASE "7": $turn = 1730;
                break;
            CASE "8": $turn = 1900;
                break;
            DEFAULT: ;
                break;
        }
        return $turn;
    }

    function INSERT($header, $id, $day, $hor, $fila, $tpo, $time) {
        set_time_limit(0);
        try {
            $bd = Db::getInstance();
           $sql = "call setTurnos('" . $header . "','" . $id . "'," . $day . "," . $hor . "," . $fila . "," . $tpo . "," . $time . ");";
           $stmt = $bd->ejecutar($sql);
       } catch (Exception $ex) {
           echo $ex;
       }
    }

}
?>