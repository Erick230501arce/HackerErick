<meta charset="utf-8">
<?php
   include("index.php");
   $consulta=mysql_query("select * from usuarios");
   $registro=mysql_fetch_array($consulta);
?>
  <script>
  	function eliminar(){
  	 if (confirm("Deseas eliminar")) {
             miform.submit();
  	 }else{
  	 	alert("me salve...... :) ");
  	 }
  	}
  </script>
  <form method="post" name="miform">
          Seleccione para eliminar:
          <select onchange="eliminar()" name="usuarios">
              <option>Seleccionar</option>
          	   <?php
          	   do{ 
          	   	 $id=$registro['id'];
          	   	 $nom=$registro['nombre'];
          	   	 ?>
          	   <option value="<?php echo $id; ?>"><?php 
          	      echo $nom; ?></option>
          	      <?php
          	       }while($registro=mysql_fetch_array($consulta));
          	       ?> 	       
          </select>	
  </form>
  <?php 
     if (isset($_POST['usuarios'])) {
     	$u=$_POST['usuarios'];
     	mysql_query("delete from usuarios where id=
     		'$u' ")or die(mysql_error());
     	echo "<script>alert('Dato eliminado');
     	  location='drop.php'; </script>";
     	# code...
     }

     ?>