<?php

require_once('info.php');

 if(isset($_REQUEST['correo']) AND isset($_REQUEST['pass'])){
 	required_once('info.php');
 	$mail = $_REQUEST['correo'];
 	$pass = $_REQUEST['pass'];
 	$sql = "SELECT * FROM usuario WHERE correo = '".$mail."' ";
 	$validar = mysqli_query($conexion,$sql);
 	
 	if(mysqli_num_rows($validad) == 1){
 		$row = mysqli_fetch_array($validar);
 		
	    $clavesegura=crypt($pass,"Oggun");
 		$id = $row['id'];
 		echo $id."--".$clavesegura."---".$mail;
	    	
			}else {
				echo "<script> alert('NO SE PUDO CAMBIAR CONTRASEÑA') </script>";
			}
	    
 }else{

 	echo "<script> alert('DEBE ESTAR LLENO TODOS LOS CAMPOS') </script>";

 }
	
?>