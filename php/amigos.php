<?php
include('info.php');
session_start();
								
$idusuario=$_SESSION['idusuario']; 
$idamigo=$_GET['ida'];

if(isset($_GET['eliminar'])){
mysqli_query($conexion,"DELETE FROM amigos WHERE idusuario='$idusuario' AND idamigo='$idamigo'")or die ('Hubo un error');
								
								echo '<label class="inline">
																		<span class="lbl"> Ya no sigues a este contacto</span>
																	</label>';
}else{
								
								mysqli_query($conexion,"INSERT INTO amigos (idusuario, idamigo)
VALUES
('$idusuario','$idamigo') ON DUPLICATE KEY UPDATE idamigo='$idamigo'")or die ('Fallo el registro de contacto');

								mysqli_query($conexion,"INSERT INTO notificaciones (idusuario,idremitente,asunto) VALUES ('$idamigo','$idusuario','Te Sigue')");
								
								echo '<i class="icon-check "></i> Siguiendo';
								
						}		
								
?>