<?php
session_start();
if(!isset($_SESSION['piochaid'])){
    header("location:view/index.php");
}else{
    header("location:view/tomadeturnos.php");
}