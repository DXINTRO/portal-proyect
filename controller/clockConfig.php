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

function clockTimeString() {//etseeeeee
    $Today = time();
    date_default_timezone_set('America/Santiago');
    list($usec, $sec) = explode(".", microtime());
    usleep(1);
    //  return ((int)$sec );
    return date('Gis', $Today) . (int)$sec;
}

function Months($N) {// echo(Months(4)); retorna en 4 meses mas la fecha 2016-02-28 
    return date("Y-n-d", strtotime('+' . $N . ' Months')) . "\n";
}

function Week($N) {// requiere un numero y retorna  iwual que month
    return date("Y-m-d", strtotime('+' . $N . ' Week')) . "\n";
}

//echo 'Loading..';
?>