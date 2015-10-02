<?php 
if(isset($_REQUEST['publicacion'])){
	session_start ();
	require("info.php");
	$publi = $_REQUEST['publicacion'];
	$id = $_SESSION['idusuario'];

	$sql="INSERT INTO estado (idusuario,estado) VALUES ($id,'".$publi."')";
	$validar = mysqli_query($conexion,$sql) or die ("fallo en publicar");
	if($validar){
		echo "1";
	}else{
		echo "2";
	}

}
if(isset($_GET['eliminar'])){
	require("info.php"); 
		$id = $_GET['id'];

		$query = mysqli_query($conexion,"DELETE FROM estado WHERE id= '".$id."' "); 

		if($query){
			echo "ELIMINADO";
		}else{
			echo "NO SE PUDO ELIMINAR";
		}

}


 ?>