<?<?php 
$usuario-$_POST['usuario'];
$contraseña-$_POST['contraseña'];
sesion_estar();
$_SESSION['usuario']-$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario" and contraseña='$contraseña';
if($filas){
$filas=mysql_num_rows($resultado);
	header("locacion:home.php");
}else{
	?>
	>?php
	include("index.php");
	?>
	<h1 class="bad">ERROR EN LA AUTENTICACION</h1>
	<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);


 ?>}
