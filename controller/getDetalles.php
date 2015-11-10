<?php

require_once '../model/Db.class.php';
require_once '/contruct/Conf.class.php';
/* Creamos la instancia del objeto. Ya estamos conectados */
if (!isset($_GET["codigo"]) ) {
$cod = $_POST['codigo'];
$bd = Db::getInstance();

$sql = "call getTurnos('". trim($cod) ."');";

$stmt = $bd->ejecutar($sql);



  while($row = mysql_fetch_array($stmt))
  {
     
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["indez"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["users_piochaid"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["dianame"] . "</font></td>";
     echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["hora"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["tiempoDeEnvio"]. "</font></td></tr>";    
   

  }
    mysql_free_result($stmt);
 
}


?>
