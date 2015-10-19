<?php
session_start();
if(!isset($_SESSION['piochaid'])){
	header("location:https://www.google.com/");
}else{session_unset();
session_destroy();
header("location:../index.php");     }

?>
