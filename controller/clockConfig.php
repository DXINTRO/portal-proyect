<?php
//
header("Pragma: no-cache");
/* * ************************* Config. **************************** */
$Today = time();
date_default_timezone_set('America/Santiago');
/* * ************************* Config. **************************** */

function getServerDateItems($inDate) {
    return date('Y,n,j,G,', $inDate) . intval(date('i', $inDate)) . ',' . intval(date('s', $inDate));
    // year (4-digit),month,day,hours (0-23),minutes,seconds for scripts
    // use intval to strip leading zero from minutes and seconds
    //   so JavaScript won't try to interpret them in octal
    //   (use intval instead of ltrim, which translates '00' to '')
}

function clockDateString($inDate) {
    return date('l, F j, Y', $inDate);    // eg Tuesday, October 27, 2015 
}
function clockDateNumber($N) {
     // eg date("y- m- d");2001-03-10                  este n es una semana mas
    list($y, $m,$d) = explode("-", date("Y-m-d", strtotime('+' . $N . ' Week')));
    return array($y, $m,$d);
}


function clockTimeString() {//etseeeeee
    $Today = time();
    date_default_timezone_set('America/Santiago');
    list($usec, $sec) = explode(".", microtime());
    usleep(1);
    //  return ((int)$sec );
    return date('Gis', $Today) . (int)$sec;
}
function clockTimeNumber() {//etseeeeee retur 12:50:00
    $Today = time();
    date_default_timezone_set('America/Santiago');
    
    //  return ((int)$sec );
    return date('G:i:s', $Today);
}

function Months($N) {// echo(Months(4)); retorna en 4 meses mas la fecha 2016-02-28 
    return date("Y-n-d", strtotime('+' . $N . ' Months')) . "\n";
}

function Week($N) {// //2015-12-30' retorna semana sigiente de inicio y fin
    list ($year, $month, $day) = clockDateNumber($N);
    # Obtenemos el numero de la semana
    $semana = date("W", mktime(0, 0, 0, $month, $day, $year));

# Obtenemos el día de la semana de la fecha dada
    $diaSemana = date("w", mktime(0, 0, 0, $month, $day, $year));

# el 0 equivale al domingo...
    if ($diaSemana == 0) {
        $diaSemana = 7;
    }

# A la fecha recibida, le restamos el dia de la semana y obtendremos el lunes
    $primerDia = date("Y-m-d", mktime(0, 0, 0, $month, $day - $diaSemana + 1, $year));

# A la fecha recibida, le sumamos el dia de la semana menos siete y obtendremos el domingo
    $ultimoDia = date("Y-m-d", mktime(0, 0, 0, $month, $day + (7 - $diaSemana), $year));
    return array($semana, $primerDia, $ultimoDia);
}

//echo 'Loading..';
?>