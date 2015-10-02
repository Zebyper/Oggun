<?php 

if(isset($_REQUEST['crear'])){
	require("info.php");
	session_start();
	$sql = "INSERT INTO chat (nombre) VALUES ('".$_REQUEST['crear']."')";
	if(mysqli_query($conexion,$sql)){
		$sql2= "INSERT INTO"
		echo "1";
	}else{
		echo "2";
	}
}else{

}
	


?>