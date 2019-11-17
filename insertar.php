<meta charset="utf-8">
<?php
include ("index.php");   
?>

<form action="" method="post" >
				
				Nombre: <input  name="nombre" required>

				Correo: <input  name="correo" required>

				Mensaje: <textarea  name="mensaje" required></textarea>

				<input type="submit">
			</form>

<?php
   if ($_POST) { //Si se ha presionado el enviar

   	$n=$_POST['nombre'];
   	$c=$_POST['correo'];
   	$m=$_POST['mensaje'];

   	mysql_query("insert into usuarios(nombre,correo,mensaje)values('$n','$c','$m')") or die(mysql_error());
     echo "<h2>Dato guardado</h2>";
   	# code...
   }

   ?>
