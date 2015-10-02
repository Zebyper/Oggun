<?php
	
	if(isset($_POST['eliminar'])){

		require("info.php"); 
		$id = $_POST['eliminar'];

		$query = mysqli_query($conexion,"DELETE FROM estado WHERE id= '".$id."' "); 

		if($query){
			echo "1";
		}else{
			echo "2";
		}


	}else{
		header('location: index.php');
	}

?>