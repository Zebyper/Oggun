<?php

require_once('info.php');

 if(isset($_REQUEST['correo']) ){
 	$mail = $_REQUEST['correo'];
 	if($mail != ""){
 	$sql= "SELECT id FROM usuarios WHERE correo = '".$mail."' ";
 	$validar = mysqli_query($conexion,$sql);

 	
 	if(mysqli_num_rows($validar) == 1){
 		$recu = array('3ec3c6fbf05fe97332081fc83f39288c','6016ce189c3dc1e66dd8b6cd63095c5b','d6796b810da06fd2a67ab4c233d0a2f4','c098cd69061d71d53a763cd73188460f','ad11063b34b8ebbc95fc3e2001eab68d','a3c5b25ec6a7d753009b3a618e77f661','f34c1341eede7fb43bc20008e52c423c','7f149b10eac58427ff4d13bf743d250d','6b40d6681c7a5bc5cf9904fa0c3717ae','d9ae8065728d8ca737288f53bac14d1e');
 		 $ram = rand(0,9);
 		 $contra = $recu[$ram];
 		 $rows =  mysqli_fetch_row($validar);
 		 $sql2 = "UPDATE usuarios SET recuperarcontra='".$contra."' WHERE id = ".$rows[0]."";
 		 $update = mysqli_query($conexion,$sql2);
 		 if($update == true){
 		 echo "<a href='recuperarcontrasena.php?id=".$rows[0]."&contra=".$contra."'>DAR CLICK PARA RECUPERAR CONTRASEÑA</a>";
 		 }else{
 		 	echo "error";
 		 }
 		}else{
 		 echo "El correo no se encuentra";
 		}
 	}
 }

 if(isset($_REQUEST['pass1']) AND isset($_REQUEST['pass2']))
 {

 	$id = $_REQUEST['id'];
 	$pass1 = $_REQUEST['pass1'];
 	$pass2 = $_REQUEST['pass2'];
 	$contra = $_REQUEST['contra'];

 	if($pass1 == $pass2){
 		$clavesegura=crypt($pass1,"Oggun");
 		$sql = "UPDATE usuarios SET clave='".$clavesegura."', recuperarcontra = ' ' WHERE id=".$id."";
 		$update = mysqli_query($conexion,$sql);
 		if($update){
 			header('location:portada.php?error=actualizacion');
 		}
 	}else{
 	echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Contraseña no coincide')
    				window.location.href='recuperarcontrasena.php?id=".$id."&contra=".$contra."';
    				</SCRIPT>");
 	}
 }
	
?>
