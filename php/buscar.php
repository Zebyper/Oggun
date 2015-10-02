<?php



$encontrado=false;
$resultado = mysqli_query($conexion,"SELECT usuarios.id,usuarios.nombres,usuarios.apellidos,usuarios.correo,personal.perfil,personal.sexo,personal.fotoprincipal,personal.idvideoprincipal,personal.nacimiento,personal.origen,personal.residencia,personal.idvideocrowd, personal.facebook, personal.twitter,personal.extras FROM usuarios,personal WHERE usuarios.id =personal.idusuario AND usuarios.id= '$_GET[usuario]'");

$fila = mysqli_fetch_row($resultado);
  
if($_GET['usuario']==$fila[0]){
$encontrado=true;
$perfil=$fila[4];
$nombres=$fila[1];
$apellidos=$fila[2];
$correo=$fila[3];
$sexo=$fila[5];
$fotoprincipal=$fila[6];
$idvideoprincipal=$fila[7];
$idvideocrowd=$fila[11];
$nacimiento=$fila[8];
$origen=$fila[9];
$residencia=$fila[10];
$idusuario=$fila[0];
$facebook=$fila[12];
$twitter=$fila[13];
$extras=$fila[14];

//Depuracion
if($nacimiento=="0000-00-00"){
$nacimiento="";
}

}


if($encontrado){
switch($perfil){
case(1)://Profesional
$busqueda = mysqli_query($conexion,"SELECT profesion,estudios,experiencia,profesion2 FROM profesionales WHERE idusuario = '".$_GET['usuario']."'");

$filab = mysqli_fetch_row($busqueda);  
$info0=$filab[0];
$info1=$filab[1];
$info2=$filab[2];
//$info3="label-profesional";
$info3="label-talento";
$info4=$filab[3];
if($sexo==0){
$busquedal = mysqli_query($conexion,"SELECT femenino FROM listaprofesiones WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];
}else{
$busquedal = mysqli_query($conexion,"SELECT masculino FROM listaprofesiones WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];
}
if($sexo==0){
$busquedal2 = mysqli_query($conexion,"SELECT femenino FROM listaprofesiones WHERE id = '".$info4."'");
$filac2 = mysqli_fetch_row($busquedal2);  
$info4=$filac2[0];
}else{
$busquedal2 = mysqli_query($conexion,"SELECT masculino FROM listaprofesiones WHERE id = '".$info4."'");
$filac2 = mysqli_fetch_row($busquedal2);  
$info4=$filac2[0];
}
break;
case(2)://Tecnico
$busqueda = mysqli_query($conexion,"SELECT area,experiencia FROM tecnicos WHERE idusuario = '$_GET[usuario]'");

$filab = mysqli_fetch_array($busqueda);  
$info0=$filab[0];
$info1=$filab[1];
$info2="";
//$info3="label-tecnico";
$info3="label-talento";

$busquedal = mysqli_query($conexion,"SELECT masculino FROM listatecnicos WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];

break;
case(3)://Talento
$busqueda = mysqli_query($conexion,"SELECT talento,experiencia FROM talentos WHERE idusuario = '$_GET[usuario]'");

$filab = mysqli_fetch_array($busqueda);
$info0=$filab[0];
$info1=$filab[1];
$info2="";
$info3="label-talento";

if($sexo==0){
$busquedal = mysqli_query($conexion,"SELECT femenino FROM listatalentos WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];
}else{
$busquedal = mysqli_query($conexion,"SELECT masculino FROM listatalentos WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];
}

break;
case(4)://Oficio
$busqueda = mysqli_query($conexion,"SELECT oficio,experiencia FROM oficios WHERE idusuario = '$_GET[usuario]'");

$filab = mysqli_fetch_array($busqueda);
$info0=$filab[0];
$info1=$filab[1];
$info2="";
//$info3="label-oficio";
$info3="label-talento";
if($sexo==0){
$busquedal = mysqli_query($conexion,"SELECT femenino FROM listaoficios WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];
}else{
$busquedal = mysqli_query($conexion,"SELECT masculino FROM listaoficios WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];
}

break;
case(5)://Ocupacion
$busqueda = mysqli_query($conexion,"SELECT ocupacion,experiencia FROM ocupacion WHERE idusuario = '$_GET[usuario]'");

$filab = mysqli_fetch_array($busqueda);
$info0=$filab[0];
$info1=$filab[1];
$info2="";
//$info3="label-oficio";
$info3="label-talento";
if($sexo==0){
$busquedal = mysqli_query($conexion,"SELECT femenino FROM listaocupacion WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];
}else{
$busquedal = mysqli_query($conexion,"SELECT masculino FROM listaocupacion WHERE id = '".$info0."'");
$filac = mysqli_fetch_row($busquedal);  
$info0=$filac[0];
}

break;

default:
$perfil=0;
$info0="";
$info1="";
$info2="";
$info3="label-talento";
$fotoprincipal="../imgusers/default.jpg";
$idvideoprincipal=1;
break;
}

/*$_SESSION['Consulta']=$info0;
$_SESSION['Consulta1']=$info1;
$_SESSION['Consulta2']=$info2;
$_SESSION['Consulta3']=$info3;
$_SESSION['Consulta4']=$idfotoprincipal;
$_SESSION['Consulta5']=$idvideoprincipal;*/
//require("salir.php");



}
else //No se encuentra el usuario
{
print('<br> El usuario no existe');
$perfil=0;
$info0="";
$info1="";
$info2="";
$info3="label-talento";
$nombres="";
$apellidos="";
$correo="";
$fotoprincipal="../imgusers/default.jpg";
$idvideoprincipal=1;
$idvideocrowd=1;
$nacimiento="";
$origen="";
$residencia="";
/*$_SESSION['Consulta']=$info0;
$_SESSION['Consulta1']=$info1;
$_SESSION['Consulta2']=$info2;
$_SESSION['Consulta3']=$info3;
$_SESSION['Consulta4']=$idfotoprincipal;
$_SESSION['Consulta5']=$idvideoprincipal*/

header("location:index.php");
	//require("salir.php");
}




?>