<?php




require("info.php");

$resultado = mysqli_query($conexion,"SELECT tipo,foto FROM fotos WHERE id = '".$_GET['idfoto']."'");
$fila = mysqli_fetch_row($resultado);

/*** set the headers and display the image ***/
            header("Content-type: ".$fila[0]);


            /*** output the image ***/
            echo $fila[1];





?>