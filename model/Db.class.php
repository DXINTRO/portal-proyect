<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Db
 *
 * @author dxint
 */
class Db {
    private $servidor;
   private $usuario;
   private $password;
   private $base_datos;
   private $link;
   private $result;
  private $rawdata = array();

   static $_instance;

   /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
   private function __construct(){
      $this->setConexion();
      $this->conectar();
   }

   /*Método para establecer los parámetros de la conexión*/
   private function setConexion(){
      $conf = Conf::getInstance();
      $this->servidor=$conf->getHostDB();
      $this->base_datos=$conf->getDB();
      $this->usuario=$conf->getUserDB();
      $this->password=$conf->getPassDB();
   }

   /*Evitamos el clonaje del objeto. Patrón Singleton*/
   private function __clone(){ }

   /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
         return self::$_instance;
   }

   /*Realiza la conexión a la base de datos.*/
   private function conectar(){
      $this->link=mysql_connect($this->servidor, $this->usuario, $this->password);
      mysql_select_db($this->base_datos,$this->link);
      mysql_query("SET NAMES 'utf8'");
       
      if (!$this->link) {
           
           die('No pudo conectarse: ' . mysql_error());
     }
   }
   
   
       public function desconectarBD() {
        //Cierra la conexión y guarda el estado de la operación en una variable
        $close = mysqli_close($this->link);
        //Comprobamos si se ha cerrado la conexión correctamente
        if (!$close) {
            echo 'Ha sucedido un error inexperado en la desconexion de la base de datos';
        }
        //devuelve el estado del cierre de conexión
        return $close;
    }

   /*Método para ejecutar una sentencia sql*/
    public function ejecutar($sql){
      
      if (!$this->stmt = mysql_query($sql)) {
            die('No pudo hacer la consulta: ' . mysql_error());
      }
     
      return $this->stmt;
   }

   /*Método para obtener una fila de resultados de la sentencia sql*/
   

   public function obtener_fila($stmt,$fila){
       
       
      if ($fila==0){
         $this->rawdata= mysql_fetch_array($stmt, MYSQL_NUM);
       }else{
         mysql_data_seek($stmt,$fila);
         $this->rawdata= mysql_fetch_array($stmt, MYSQL_NUM);
        
      }
      return $this->rawdata;
 
   }
   



   //Devuelve el último id del insert introducido
   public function lastID($idtabla,$tabla){
       $rs = mysql_query("SELECT MAX(" .$idtabla. ") AS id FROM " .$tabla);
      if (!$this->result = mysql_fetch_row($rs)) {
     die('No pudo hacer la consulta: ' . mysql_error());
        }
      $id = trim($this->result[0]);
          return $id;
   }
   
}
 ?>
