<?php

include('config.php');
$usuario = "Usuario1";
$mensaje = $_POST['mensaje'];



$result = "insert into conversation(usuario, mensaje) values('".$usuario."', '".$mensaje."')";
$result = mysqli_query($conexion,$result);

if($result){
	header("Location: index.html");
}else{
	echo "1";
}

?>