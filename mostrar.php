<?php
include("index.php");
$consulta=mysql_query("select * from usuarios")or die(
	mysql_error());
 
  /* $registro = mysql_fetch_array($consulta);
   $nom=$registro['nombre'];
   echo "$nom";*/

   $registro=mysql_fetch_array($consulta);
   echo "<table border>";
   do {
   	 $nom=$registro['nombre'];
   	 $correo=$registro['correo'];
   	 $mensaje=$registro['mensaje'];
   	 echo "<tr>
   	 <td>$nom</td> 
   	 <td>  $correo</td> 
   	 <td> $mensaje </td>
   	 </tr>";
   	   /*echo "<br/> $nom";*/
   	# code...
   }while($registro=mysql_fetch_array($consulta));
  echo "</table>";
  
   
?>