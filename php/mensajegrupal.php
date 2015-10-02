<?php

include('config.php');


$query = mysqli_query($conexion, "select * from conversation");

if(mysqli_num_rows($query)>0){

	while($row = mysqli_fetch_array($query)){
		?>

		<strong><?php echo $row['usuario']?></strong>= <?php echo $row['mensaje'];?><br><?php
		
	}
	
}else{

} 


?>