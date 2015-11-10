<?php
if($_SERVER['HTTP_HTTPS'] && !$_SERVER['HTTPS'])
{    unset($_SERVER['HTTP_HTTPS']);
}
session_start();
if(!isset($_SESSION['piochaid'])){
    header("location:view/index");
}else{
    header("location:view/tomadeturnos");
}
