<?php
session_start ();
/*header('location:perfil.php?repetido=true');	
print('hola');*/
require("info.php");

if($_POST['clave']!=$_POST['claverep']){//No puso la misma clave dos veces
header("location:portada.php?error=claverep&nombres=$_POST[nombres]&apellidos=$_POST[apellidos]&correo=$_POST[correo]&perfil=$_POST[perfil]&sexo=$_POST[sexo]");
}else{

$unico=true;
$resultado = mysqli_query($conexion,"SELECT correo FROM usuarios WHERE correo = '$_POST[correo]'");

while($fila = mysqli_fetch_array($resultado))
  {
if($_POST['correo']==$fila['correo']){
$unico=false;
}
}

if($unico){
	print('<br> Usuario Registrado');
	
	$perfil= $_POST['perfil'];
	
	if($perfil==0){
	header("location:portada.php?error=perfil&nombres=$_POST[nombres]&apellidos=$_POST[apellidos]&correo=$_POST[correo]&perfil=$_POST[perfil]&sexo=$_POST[sexo]");
	}
	
	$clavesegura=crypt($_POST['clave'],"Oggun");
	$sql="INSERT INTO usuarios (id, nombres, apellidos,correo, clave)
VALUES
(NULL,'$_POST[nombres]','$_POST[apellidos]','$_POST[correo]','$clavesegura')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro usuario');
	
	
	
	
	$ingresocorreo= $_POST['correo'];
$ingresoclave= $clavesegura;




$resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$ingresocorreo'");
while($fila = mysqli_fetch_array($resultado))
  {
if($ingresoclave==$fila['clave']){
$_SESSION['idusuario']=$fila['id'];
$_SESSION['nombres']=$fila['nombres'];
$_SESSION['apellidos']=$fila['apellidos'];
$_SESSION['correo']=$fila['correo'];
$_SESSION['perfil']=$perfil;
$_SESSION['sexo']=$_POST['sexo'];
$_SESSION['fotoprincipal']="../imgusers/default.jpg";
print('<br> ingreso exitoso');
	
	$sql="INSERT INTO sesiones (id, idusuario, ingreso)
VALUES
(NULL,'$_SESSION[idusuario]',NULL)";
mysqli_query($conexion,$sql)or die ('Fallo el registro de sesión');
$resultado2=mysqli_query($conexion, "SELECT id FROM sesiones WHERE idusuario='".$_SESSION['idusuario']."' ");
while($fila2=mysqli_fetch_row($resultado2)){
$_SESSION['sesion']=$fila2[0];
}
	
	
	$encontrado=true;

}
  }
	
	//* Crear foto principal en blanco para actualizar
	
	/*$sql="INSERT INTO fotos (id, idusuario, nombre,tipo, foto,tamano)
VALUES
(NULL,'$_SESSION[idusuario]','$_SESSION[idusuario]','',NULL,'')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro fotos');*/
	
	//*-----
	
		//* Crear informacion basica para actualizar
	
	if($_SESSION['sexo']==0){$fotodefault="../imgusers/default2.jpg";}else{$fotodefault="../imgusers/default.jpg";}
	
	$sql="INSERT INTO personal (id, idusuario, fechapersonal,nacimiento,sexo,origen,residencia,perfil,fotoprincipal,idvideoprincipal,idvideocrowd)
VALUES
(NULL,'$_SESSION[idusuario]',NULL,'0000-00-00','$_SESSION[sexo]','','','$_SESSION[perfil]','$fotodefault',1,1)";
	mysqli_query($conexion,$sql)or die ('Fallo el registro personal');
	
	//*-----
	
	//* Crear video principal en blanco para actualizar
	
	/*$sql="INSERT INTO videos (id, idusuario, nombre,palabrasclave,proyecto,puntuacion,tipo, video,tamano)
VALUES
(NULL,'$_SESSION[idusuario]','$_SESSION[idusuario]','$_SESSION[idusuario]',1,'0','',NULL,'')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro video');*/
	
	//*-----
	
	//Crear en base de datos adicional segun perfil
	
	switch($perfil){
case(1)://Profesional
$sql="INSERT INTO profesionales (id, idusuario, profesion,estudios, experiencia)
VALUES
(NULL,'$_SESSION[idusuario]','1','','')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 1');

break;
case(2)://Tecnico
$sql="INSERT INTO tecnicos (id, idusuario, area, experiencia)
VALUES
(NULL,'$_SESSION[idusuario]','1','')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 2');

break;
case(3)://Talento
$sql="INSERT INTO talentos (id, idusuario, talento, experiencia)
VALUES
(NULL,'$_SESSION[idusuario]','1','')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 3');

break;
case(4)://Oficio
$sql="INSERT INTO oficios (id, idusuario, oficio, experiencia)
VALUES
(NULL,'$_SESSION[idusuario]','1','')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 4');

break;
case(5)://Ocupacion
$sql="INSERT INTO ocupacion (id, idusuario, ocupacion, experiencia)
VALUES
(NULL,'$_SESSION[idusuario]','1','')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 5');

break;
default:
break;
}
	
	//Fin Crear en base de datos adicional segun perfil
	
		//require("salir.php");
	header('location:perfil.php?usuario='.$_SESSION['idusuario'].'&nuevo=true');




}
else
{
print('<br> Correo registrado');

//header('location:index.php');
$nombres=str_replace(' ', '.', $_POST['nombres']);
$apellidos=str_replace(' ', '.', $_POST['apellidos']);
$correo=$_POST['correo'];
header("location:portada.php?error=repetido&nombres=$nombres&apellidos=$apellidos&correo=$correo&perfil=$_POST[perfil]&sexo=$_POST[sexo]");
	//require("salir.php");
	//header('location:nuevousuario.php?repetido=true');
	

	
		
}


}

?>