<?php

 	$comentario = $_REQUEST['comentario'];
 			
 			$mail = "kramirez70@misena.edu.co";
			$asunto = "Cuentale a oggun"; 
			$cuerpo = ' 
			<html> 
			<head> 
			   <title>Un Nuevo Comentario</title> 
			</head> 
			<body> 
			<h1>Un Nuevo Comentario En Cuentale a Oggun</h1> 
			<p>'.$comentario.'
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
					echo "1";
				}else
				{
					echo "2";
				}
	
?>