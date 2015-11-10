<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of conDias
 *
 * @author dxint
 */
class conTurn {
    private $Turns;
     static $_instance;

  private function __construct(){ 
    $this->Turns=$array = array("8:00","9:00", "10:30", "12:00", "12:30","14:00","15:30","17:30","19:00");
    //                   array   0       1        2        3        4        5     6        7      8
    
    } 

    public function get_Turns(){ 
     $var=$this->Turns;
    return $var; 
    } 
    
  private function __clone(){ }

  public static function getInstance(){
      
  if (!(self::$_instance instanceof self)){
     self::$_instance=new self();
  }
  return self::$_instance;
}


}
