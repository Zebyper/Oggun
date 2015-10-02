<?php
session_start ();
require("info.php");

$sql="UPDATE sesiones SET salida=NULL WHERE id='$_SESSION[sesion]'";
mysqli_query($conexion,$sql)or die ('Fallo el registro de sesión');



unset($_SESSION['idusuario']);
unset($_SESSION['nombres']);
unset($_SESSION['apellidos']);
unset($_SESSION['correo']);
unset($_SESSION['perfil']);
session_destroy();
print("<br> Desconectado ").$_SESSION['nombres'];
header('location:portada.php');

?>