<?php

$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "root"; //El usuario que acabamos de crear en la base de datos
$contrasenha = ""; //La contraseña del usuario que utilizaremos
$BD = "oggunbd"; //El nombre de la base de datos
$conexion=mysqli_connect($servidor,$usuario,$contrasenha,$BD);

function consulta($consulta){
$resultado = mysqli_query("SET NAMES 'utf8'",$conexion,$consulta);
return $resultado;
}



//mysql_select_db('oggundb',$conexion);
//mysqli_query($conexion,"SET NAMES 'utf8'");
// Revisar
  /*Aquí abrimos la conexión en el servidor.
Normalmente se envian 3 parametros (los datos del servidor, usuario y contraseña) a la función mysql_connect,
si no hay ningún error la conexión será un éxito
El @ que se ponde delante de la funcion, es para que no muestre el error al momento de ejecutarse, ya crearemos un código para eso*/
  
?>