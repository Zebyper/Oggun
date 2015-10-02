<?php
session_start ();
require("info.php");
 
$ingresocorreo= $_POST['correo'];
$ingresoclave= $_POST['clave'];

$encontrado=false;

$resultado = mysqli_query($conexion,"SELECT usuarios.id,usuarios.nombres,usuarios.apellidos,usuarios.correo,usuarios.clave,personal.perfil,personal.sexo,personal.fotoprincipal FROM usuarios,personal WHERE usuarios.id=personal.idusuario AND correo = '$ingresocorreo'");




while($fila = mysqli_fetch_row($resultado))
  {
  $encontrado=true;
//if($ingresoclave==$fila[4]){
if(crypt($ingresoclave,$fila[4])===$fila[4]){
$_SESSION['idusuario']=$fila[0];
$_SESSION['nombres']=$fila[1];
$_SESSION['apellidos']=$fila[2];
$_SESSION['correo']=$fila[3];
//Pueden cambiar al editar perfil->
$_SESSION['perfil']=$fila[5];
$_SESSION['sexo']=$fila[6];
$_SESSION['fotoprincipal']=$fila[7];
print('<br> ingreso exitoso');


$sql="INSERT INTO sesiones (id, idusuario, ingreso)
VALUES
(NULL,'$_SESSION[idusuario]',NULL)";
mysqli_query($conexion,$sql)or die ('Fallo el registro de sesión');
$resultado2=mysqli_query($conexion, "SELECT id FROM sesiones WHERE idusuario='".$_SESSION['idusuario']."' ");
while($fila2=mysqli_fetch_row($resultado2)){
$_SESSION['sesion']=$fila2[0];
}
	

	//require("salir.php");
	
	header('location:index.php');
}else{
	print('<br> Olvido su clave');
	session_destroy();
	//require("salir.php");
	header("location:portada.php?error=clave&correo=$ingresocorreo");
}
  }

if(!$encontrado){
	//require("salir.php");
	print('<br> Correo no registrado');
	session_destroy();
	header("location:portada.php?error=correo&correo=$ingresocorreo");
}


?>