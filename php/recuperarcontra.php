<?php

require("info.php");



 $mail = $_REQUEST['email'];
 $sql = "SELECT nombres,apellidos FROM usuarios WHERE correo = '".$mail."' ";
	 $consulta = mysqli_query($conexion,$sql);
		if(mysqli_num_rows($consulta)==1){	 
			 while($row = mysqli_fetch_row($consulta)){
			 	$nombres = $row[0];
			 	$apellidos = $row[1];
			 }

			$mail = "kramirez70@misena.edu.co";
			$asunto = "Este mensaje es de prueba"; 
			$cuerpo = ' 
			<html> 
			<head> 
			   <title>Prueba de correo</title> 
			</head> 
			<body> 
			<h1>Hola amigos!</h1> 
			<p> 
			<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. 
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
	

 

 

?>