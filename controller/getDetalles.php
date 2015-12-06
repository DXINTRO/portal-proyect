<?php

require_once '../model/Db.class.php';
require_once '/contruct/Conf.class.php';
$rest="";
/* Creamos la instancia del objeto. Ya estamos conectados */
if (!isset($_GET["codigo"]) ) {
$cod = $_POST['codigo'];
$bd = Db::getInstance();
$sql = "call getTurnos('". trim($cod) ."');";
$stmt = $bd->ejecutar($sql);



  while($row = mysqli_fetch_array($stmt))
  {
      if (($row["hora"]==="800")||($row["hora"]==="900")) {
          $rest = (substr($row["hora"], 0, 1)). ":" .(substr($row["hora"], -2, 2));
      }else{$rest = (substr($row["hora"], 0, 2)). ":" .(substr($row["hora"], -2, 2));}
            
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["indez"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["users_piochaid"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["dianame"] . "</font></td>";
     echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $rest . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["tiempoDeEnvio"]. "</font></td></tr>";    
   

  }
    mysqli_free_result($stmt);
 
}


?>
