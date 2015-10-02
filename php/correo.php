<?php

 if(isset($_REQUEST['correo'])){
 	required_once('info.php');
 	$mail = $_REQUEST['correo'];
 	$sql = "SELECT * FROM usuario WHERE correo = '".$mail."' ";
 	$validar = mysqli_query($conexion,$sql);
 	if(mysqli_num_rows($validad) == 1){

			$asunto = "Recuperar contraseña"; 
			$cuerpo = ' 
			<html> 
			<head> 
			   <title>Recuperar contraseña</title> 
			</head> 
			<body> 
			<h1>para recuperar la contraseña debe de dar click en el enlace</h1> 
			<p> 
			<a>http://localhost/Oggunweb/php/recuperarcontra.php?cod=1</a> 
			</p> 
			</body> 
			</html> 
			'; 

			//para el envío en formato HTML 
			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

			//dirección del remitente 
			$headers .= "From: Oggun la red social <oggun@redsocial>\r\n";

			if(mail($mail,$asunto,$cuerpo,$headers)){
					echo "enviado";
				}else
				{
					"no se envio";
				}
		}
 }else{

 }
	
?>