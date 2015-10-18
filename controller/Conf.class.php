<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conf
 *
 * @author dxint
 */

class Conf {
 
    private $_domain;
   private $_userdb;
   private $_passdb;
   private $_hostdb;
   private $_db;
   static $_instance;

   
   private function __construct(){
     
      require_once('config.class.php');
      $conx= new Config;
      $config = $conx->get_config();
       
      $this->_userdb=$config['DB_USER'];
      $this->_passdb=$config['DB_PASS'];
      $this->_hostdb=$config['DB_HOST'];
      $this->_db=$config['DB_NAME'];
      $this->_domain=$domain="";
   }

   private function __clone(){ }

   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }

   public function getUserDB(){
      $var=$this->_userdb;
      return $var;
   }

   public function getHostDB(){
      $var=$this->_hostdb;
      return $var;
   }

   public function getPassDB(){
      $var=$this->_passdb;
      return $var;
   }

   public function getDB(){
      $var=$this->_db;
      return $var;
   }

}
 ?>