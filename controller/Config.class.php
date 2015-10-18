<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author dxint
 */
class Config {
    //put your code here

     
     	public function get_config(){

        // Nombre del servidor 
        $config['DB_HOST'] = '127.0.0.1';  

        // Nombre de usuario del servidor
	$config['DB_USER'] = 'admin';

	// Contraseña del usuario anterior
	$config['DB_PASS'] = 'admin';

	// Nombre de la base de datos del sistema
	$config['DB_NAME'] = 'queryjumbo';
     
        return $config;
     } 
}
