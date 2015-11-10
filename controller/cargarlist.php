<?php

//Importamos el contructor del objeto
require_once '/contruct/conTurn.class.php';
$obj = conTurn::getInstance();
 
static $turnosL,$turnosM,$turnosMI,$turnosJ,$turnosV,$turnosS,$turnosD;

 $turnosL = $obj->get_Turns();
$turnosM = $obj->get_Turns();
$turnosMI = $obj->get_Turns();
$turnosJ = $obj->get_Turns();
$turnosV = $obj->get_Turns();
$turnosS = $obj->get_Turns();
$turnosD = $obj->get_Turns();
unset($turnosL[1], $turnosL[4],$turnosM[1], $turnosM[4],$turnosMI[1], $turnosMI[4],$turnosJ[1], $turnosJ[4],$turnosV[1], $turnosV[4],$turnosS[1], $turnosS[4],$turnosD[0], $turnosD[3]);



// function has($key) {
//    apc_fetch($key, $exists);
//    return $exists;
//}


if (isset($_GET["day"]) AND ( $_GET["day"] != "")) {    
    if (isset($_GET["inx"]) AND isset($_GET["inx"])!= null) {
    $turn=($_GET["inx"]);}
    $day = ($_GET["day"]);
     
    switch ($day) {
        case  '0'://lunes
                 if ($turn==='0') {
                unset($turnosL[2],$turnosL[0]);//8
            }elseif ($turn==='2') {
                unset($turnosL[3],$turnosL[2],$turnosL[0]);//10
            }elseif ($turn==='3') {
                unset($turnosL[5],$turnosL[3],$turnosL[2]);//12
            }elseif ($turn==='5') {
                unset($turnosL[6],$turnosL[5],$turnosL[3]);//14
            }elseif ($turn==='6') {
                unset($turnosL[7],$turnosL[6],$turnosL[5]);//15
            }elseif ($turn==='7') {
                unset($turnosL[8],$turnosL[7],$turnosL[6]);//17
            }elseif ($turn==='8') {
                unset($turnosL[8],$turnosL[7]);//19
            }
//            elseif ($turn==='10') {
//                unset($turnosL[2],$turnosL[0],$turnosL[5],$turnosL[3]);//8 y 12
//            }elseif ($turn==='11') {
//               unset($turnosL[2],$turnosL[0],$turnosL[3]);//10 y 8
//            }elseif ($turn=='12'){
//                unset($turnosL[0],$turnosL[2]);//12 y  15
//            }elseif ($turn=='13'){
//                unset($turnosL[3],$turnosL[5]);}//14 y  17
            printday($turnosL);
            break;
                          
        case  '1':
                  if ($turn==='0') {
                unset($turnosM[2],$turnosM[0]);//8
            }elseif ($turn==='2') {
                unset($turnosM[3],$turnosM[2],$turnosM[0]);//10
            }elseif ($turn==='3') {
                unset($turnosM[5],$turnosM[3],$turnosM[2]);//12
            }elseif ($turn==='5') {
                unset($turnosM[6],$turnosM[5],$turnosM[3]);//14
            }elseif ($turn==='6') {
                unset($turnosM[7],$turnosM[6],$turnosM[5]);//15
            }elseif ($turn==='7') {
                unset($turnosM[8],$turnosM[7],$turnosM[6]);//17
            }elseif ($turn==='8') {
                unset($turnosM[8],$turnosM[7]);//20
            }
              printday($turnosM);
            break;
          
        case '2':
                   if ($turn==='0') {
                unset($turnosMI[2],$turnosMI[0]);//8
            }elseif ($turn==='2') {
                unset($turnosMI[3],$turnosMI[2],$turnosMI[0]);//10
            }elseif ($turn==='3') {
                unset($turnosMI[5],$turnosMI[3],$turnosMI[2]);//12
            }elseif ($turn==='5') {
                unset($turnosMI[6],$turnosMI[5],$turnosMI[3]);//14
            }elseif ($turn==='6') {
                unset($turnosMI[7],$turnosMI[6],$turnosMI[5]);//15
            }elseif ($turn==='7') {
                unset($turnosMI[8],$turnosMI[7],$turnosMI[6]);//17
            }elseif ($turn==='8') {
                unset($turnosMI[8],$turnosMI[7]);//20
            }
            printday($turnosMI);
            break;
        case '3' :
                   if ($turn==='0') {
                unset($turnosJ[2],$turnosJ[0]);//8
            }elseif ($turn==='2') {
                unset($turnosJ[3],$turnosJ[2],$turnosJ[0]);//10
            }elseif ($turn==='3') {
                unset($turnosJ[5],$turnosJ[3],$turnosJ[2]);//12
            }elseif ($turn==='5') {
                unset($turnosJ[6],$turnosJ[5],$turnosJ[3]);//14
            }elseif ($turn==='6') {
                unset($turnosJ[7],$turnosJ[6],$turnosJ[5]);//15
            }elseif ($turn==='7') {
                unset($turnosJ[8],$turnosJ[7],$turnosJ[6]);//17
            }elseif ($turn==='8') {
                unset($turnosJ[8],$turnosJ[7]);//20
            }
         printday($turnosJ);
            break;
        case '4':
                  if ($turn==='0') {
                unset($turnosV[2],$turnosV[0]);//8
            }elseif ($turn==='2') {
                unset($turnosV[3],$turnosV[2],$turnosV[0]);//10
            }elseif ($turn==='3') {
                unset($turnosV[5],$turnosV[3],$turnosV[2]);//12
            }elseif ($turn==='5') {
                unset($turnosV[6],$turnosV[5],$turnosV[3]);//14
            }elseif ($turn==='6') {
                unset($turnosV[7],$turnosV[6],$turnosV[5]);//15
            }elseif ($turn==='7') {
                unset($turnosV[8],$turnosV[7],$turnosV[6]);//17
            }elseif ($turn==='8') {
                unset($turnosV[8],$turnosV[7]);//20
            }
            printday($turnosV);
            break;
        case '5':
                   if ($turn==='0') {
                unset($turnosS[2],$turnosS[0]);//8
            }elseif ($turn==='2') {
                unset($turnosS[3],$turnosS[2],$turnosS[0]);//10
            }elseif ($turn==='3') {
                unset($turnosS[5],$turnosS[3],$turnosS[2]);//12
            }elseif ($turn==='5') {
                unset($turnosS[6],$turnosS[5],$turnosS[3]);//14
            }elseif ($turn==='6') {
                unset($turnosS[7],$turnosS[6],$turnosS[5]);//15
            }elseif ($turn==='7') {
                unset($turnosS[8],$turnosS[7],$turnosS[6]);//17
            }elseif ($turn==='8') {
                unset($turnosS[8],$turnosS[7]);//20
            }
          printday($turnosS);
            break;
        case '6':
                  if ($turn==='1') {
                unset($turnosD[2],$turnosD[1]);//9
            }elseif ($turn==='2') {
                unset($turnosD[3],$turnosD[2],$turnosD[1]);//10
            }elseif ($turn==='4') {
                unset($turnosD[5],$turnosD[4],$turnosD[2]);//12
            }elseif ($turn==='5') {
                unset($turnosD[6],$turnosD[5],$turnosD[4]);//14
            }elseif ($turn==='6') {
                unset($turnosD[7],$turnosD[6],$turnosD[5]);//15
            }elseif ($turn==='7') {
                unset($turnosD[8],$turnosD[7],$turnosD[6]);//17
            }elseif ($turn==='8') {
                unset($turnosD[8],$turnosD[7]);//20
            }
        printday($turnosD);
         
         default: break;
    }
}
    
function printday($param) {
   foreach ($param as $index => $data) {
    echo "<option value='" . $index . "'>" . $data . "</option>";
   }
}


//
//
//if (isset($_GET["day"]) AND ( $_GET["day"] == "6")) {
//    unset($turnosP[0], $turnosP[3]);
//    foreach ($turnosP as $index => $data) {
//        echo "<option value='" . $index . "'>" . $data . "</option>";
//        // $Row .=" <option value='".$index."'>" .$data. "</option>"; 
//        //$row[$index] = $data;
//    }
//}
//if (isset($_GET["day"]) AND ( $_GET["day"] != "6")) {
//    unset($turnosP[1], $turnosP[4]);
//    foreach ($turnosP as $index => $data) {
//        echo "<option value='" . $index . "'>" . $data . "</option>";
//        // $Row .=" <option value='".$index."'>" .$data. "</option>"; 
//        //$row[$index] = $data;
//    }

?>