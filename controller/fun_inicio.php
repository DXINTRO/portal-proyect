<?php

class fun_inicio {
  private $sql;
    private $bd;
    private $stmt;
    private $rawdata;

    function validarusuario($log, $pas) {
          
        require_once '../model/Db.class.php';
       require_once '/contruct/Conf.class.php';
       /*Creamos la instancia del objeto. Ya estamos conectados*/
        $this->bd=Db::getInstance();
       
       $this->sql = "call getUsuarioValido('" . $log . "','" . $pas . "',1);";
        
         $this->stmt = $this->bd->ejecutar($this->sql);
         
      $this->rawdata=$this->bd->obtener_fila($this->stmt,0);
      
        if ($this->rawdata) {
           
            session_start();
            $_SESSION['id'] = $this->rawdata[0];   //
            $_SESSION['piochaid'] = $this->rawdata[1];   //
            $_SESSION['email'] = $this->rawdata[2];   //
            $_SESSION['user_passwd'] = $this->rawdata[3];
            $_SESSION['disabled'] = $this->rawdata[4];
            $_SESSION['displayname'] = $this->rawdata[5];
            $_SESSION['displayapellidom'] = $this->rawdata[6];
            $_SESSION['displayapellidop'] = $this->rawdata[7];
            $_SESSION['substatus'] = $this->rawdata[8];
            $_SESSION['admin'] = $this->rawdata[9];
            $_SESSION['tipouser'] = $this->rawdata[10];
            $_SESSION['tiempoDesde'] = $this->rawdata[11];
            $_SESSION['tiempoAsta'] = $this->rawdata[12];
            $_SESSION['regaladode'] = $this->rawdata[13];
            $_SESSION['released'] = $this->rawdata[14];
           $_SESSION['desde'] = $this->rawdata[15];
           $_SESSION['asta'] = $this->rawdata[16];
             header("location:../index.php");
            
            
        } else {
            return "<font color='orange'><sub>Has introducido un correo electrónico o una contraseña incorrecta..</sub></font>";
            
        }
      
}}

?>