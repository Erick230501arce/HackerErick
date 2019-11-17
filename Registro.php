<?php
$servidor ="localhost";
$usuario="root";
$clave ="";
$base = "bd_prueba";

mysql_connect($servidor,$usuario,$clave);
mysql_select_db($base);
?>


<meta charset="utf-8">
<?php
include ("principal.php");   
?>

<?php
   if ($_POST) { //Si se ha presionado el enviar

    $n=$_POST['nombre'];
    $c=$_POST['correo'];
    $m=$_POST['mensaje'];

    mysql_query("insert into usuarios(nombre,correo,mensaje)values('$n','$c','$m')") or die(mysql_error());
     echo "<script>alert('Dato regitrado');
        location='Registro.php';</script>";
    # code...
   }

   ?>
