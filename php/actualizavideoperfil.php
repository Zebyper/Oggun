<?php
include('info.php');
session_start();
								
$idvideo=$_GET['idvideo'];
$tipo=$_GET['tipo'];
if($tipo==1){
$tipovideo='idvideoprincipal';
}else{
$tipovideo='idvideocrowd';
}

								
								mysqli_query($conexion,"UPDATE personal SET ".$tipovideo."='".$idvideo."' WHERE idusuario='".$_SESSION['idusuario']."'");
								
								if($tipo==1){
								echo "Configuración Actualizada Video Presentación";
								}else{
								
								//mysqli_query($conexion,"UPDATE videos SET puntuacion='0' WHERE idusuario='".$_SESSION['idusuario']."'");
								if($idvideo!=1){
								//mysqli_query($conexion,"UPDATE videos SET puntuacion='1' WHERE id='".$idvideo."'");
								}
								echo "Configuración Actualizada Video Crowd";
								
								}
								
?>