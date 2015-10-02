<?php
include('info.php');
session_start();
				
	if(isset($_GET['eliminar'])){	
$idmensaje=$_GET['idmsj'];
mysqli_query($conexion,"DELETE FROM mensajes WHERE id='$idmensaje' ")or die ('Fallo la eliminación del mensaje');
 ?>
<label class="inline"><span class="lbl"> Mensaje eliminado </span></label> <?php
}else{
$idremitente=$_SESSION['idusuario'];
$idusuario=$_GET['usu']; 
$mensaje=$_GET['msj'];
if($_GET['pri']=='true'){//Publico seleccionado
$publico=1;
}else{//Publico no seleccionado
$publico=0;
}
mysqli_query($conexion,"INSERT INTO mensajes (idusuario, idremitente,mensaje,publico) VALUES('$idusuario','$idremitente','$mensaje','$publico') ")or die ('Fallo el registro del mensaje');

echo '<i class="icon-envelope "></i> Mensaje enviado';
}
							
?>