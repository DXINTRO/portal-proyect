<?php
class Configuracion{  
	public function get_config(){
/*
Archivo de configuracion 


----------------------------------- Guillermo Farias   2015 -------------------------------
-																						  -
-	                     Sistema de registro de facturas	             		  -
-    Este archivo contiene las configuraciones necesarias para la ejecucion del sistema   -
-      es necesario revisar cada uno de los parametros luego de un cambio de servidor     -
-		aqui se podra configurar la conexion con la base de datos                 -
-                                y los ajustes base del sistema                           -
-																						  -
-------------------------------------------------------------------------------------------
*/


        // Nombre del servidor 
        $config['DB_HOST'] = 'localhost';  

        // Nombre de usuario del servidor
	$config['DB_USER'] = 'root';

	// Contraseña del usuario anterior
	$config['DB_PASS'] = 'admin';

	// Nombre de la base de datos del sistema
	$config['DB_NAME'] = 'sofnetcl_sisweb';

         // ruta a logos de empresa	
	$config['path_logo_emp'] = '../adj/empresas/';  

        $config['mensaje_error'] = 'dfff';
        //ruta a documentos adjuntos
        $config['path_adjuntos'] = '../adj/'; 

    return $config;
     } }
?>