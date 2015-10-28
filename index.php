<?php
session_start();
if(!isset($_SESSION['piochaid'])){
    header("location:view/index");
}else{
    header("location:view/tomadeturnos");
}