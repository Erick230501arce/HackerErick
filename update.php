 <?php 
        include("index.php");
        $consulta=mysql_query("select * from usuarios");
        $registro=mysql_fetch_array($consulta);
  ?>
  <form action="" method="post">
  	<select name="usuarios">
        <?php
          do{
              $id=$registro['id'];
              $nom=$registro['nombre'];
        ?>

  		<option value="<?php echo $id; ?>"><?php echo $nom?>	
  		</option>	
  		<?php
            }while ($registro=mysql_fetch_array($consulta));      
  		?>
  	</select>
  	<input type="submit" name="actualizacion" value="Actualizar">
  </form>
  <?php
  if (isset($_POST['actualizacion'])) {
  	$u=$_POST['usuarios'];
  	$consulta1=mysql_query("select * from usuarios
  		where id='$u'")or die(mysql_error());
  	# code...
  	$registro1=mysql_fetch_array($consulta1);
  	$n=$registro1['nombre'];
  	$c=$registro1['correo'];
  	$m=$registro1['mensaje'];
  	?>
    <form method="post">

    	Nombre: <input name="n" value="<?php echo $n; ?>"><br/>
    	correo: <input name="c" value="<?php echo $c; ?>"><br/>
    	Mensaje: <input name="m" value="<?php echo $m; ?>"><br/>
        <input type="hidden" name="id" value="<?php 
        echo $u; ?>"/>
        <input value="Actualizar" type="submit" name="actualizacionFinal"/>
    </form>
  	<?php
  }
?>

<?php

   if (isset($_POST['actualizacionFinal'])) {
   	# code...
   	  $id=$_POST['id'];
   	  $n=$_POST['n'];
   	  $c=$_POST['c'];
   	  $m=$_POST['m'];
   	  mysql_query("update usuarios set nombre='$n', correo='$c',mensaje='$m' where id='$id'")or die(mysql_error());
   	 echo "<script>alert('Dato actualizado');
        location='update.php';</script>";
   }


?>