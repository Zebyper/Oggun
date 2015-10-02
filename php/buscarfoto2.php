
<?php
require("info.php");
$query = mysql_query($conexion,"SELECT foto FROM fotos WHERE id = ".$_GET['idfoto']);
$row = mysql_fetch_assoc($query);
header("Content-type: image/png");
echo $row['image'];
?>
