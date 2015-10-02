<?php 
$count = 0;

while ( $count <= 10) {
	echo 'hola <br/>';
	$count++;
}

?>

<?php

				  	$sql = "SELECT men.mensaje,men.fechamensaje,per.fotoprincipal,us.nombres,us.apellidos FROM mensajes AS men INNER JOIN personal AS per ON men.idusuario = per.idusuario
					 INNER JOIN usuarios AS us ON per.idusuario = us.id 	
				  	 WHERE men.publico = 0 AND men.idusuario = '".$_SESSION['idusuario']."'";
				  	 $query = mysqli_query($conexion,$sql);
				  	 while($row = mysqli_fetch_row($query)){
				  	 	echo "mensaje".$row[0]."<br>";
				  	 	echo "fecha mensaje".$row[1]."<br>";
				  	 	echo "nombres".$row[3]."<br>";
				  	 	echo "apellidos".$row[4]."<br>";

				  	 }

				  	 ?>		