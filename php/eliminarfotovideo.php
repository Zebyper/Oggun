<?php
require("info.php"); 
session_start();


//*------------------------FOTO------------------------*//

if(isset($_GET['idfoto'])){



if(isset($_GET['perfil'])){
$sql="UPDATE personal SET fotoprincipal='$_GET[perfil]' WHERE idusuario='$_SESSION[idusuario]'";
mysqli_query($conexion,$sql)or die ('Inténtalo más tarde');
$_SESSION['fotoprincipal']=$_GET['perfil'];
echo('Abre tu perfil nuevamente');
}else{

//Obtener ID

$idfoto=$_GET['idfoto'];
$confirmarfoto=$_GET['confirmarfoto'];

if($confirmarfoto==1){//Eliminacion confirmada


$busqueda = mysqli_query($conexion,"SELECT foto FROM fotos WHERE id='".$idfoto."' AND idusuario='".$_SESSION['idusuario']."'");
$filab = mysqli_fetch_row($busqueda);  
	
if($filab[0]==$_SESSION['fotoprincipal']){//Si la foto era principal pone la de defecto
if($_SESSION['sexo']==0){

$_SESSION['fotoprincipal']="../imgusers/default2.jpg";
}else{

$_SESSION['fotoprincipal']="../imgusers/default.jpg";
}
$sql="UPDATE personal SET fotoprincipal='$_SESSION[fotoprincipal]' WHERE idusuario='$_SESSION[idusuario]'";
mysqli_query($conexion,$sql)or die ('Inténtalo más tarde');
}
if (file_exists($filab[0])) {//Elimina la foto del servidor
        unlink($filab[0]);
    }


//Eliminar ID verificando que Session sea propia
$sql="DELETE FROM fotos WHERE id=".$idfoto." AND idusuario=".$_SESSION['idusuario']."";
mysqli_query($conexion,$sql)or die ('Inténtalo más tarde');

	
echo("<p style=\"background:white;\">Foto Eliminada</p>");

}else if($confirmarfoto==0){ //Solicitar confirmacion
echo("<p style=\"background:white;\">¿Eliminar Imagen? "." <a style=\"cursor:pointer;\" onclick=\"eliminaFoto(".$idfoto.",1)\">Si</a>, "."<a style=\"cursor:pointer;\" onclick=\"eliminaFoto(".$idfoto.",3)\"> No </a></p>");
}else{ //Regresar al boton inicial
?>
<div id="casilla<?php echo($idfoto); ?>">
		<button class="btn btn-minier" onclick="eliminaFoto(<?php echo($idfoto); ?>,0)" style="    margin: 5px auto;    display: block;    border-radius: 20px;">Eliminar</button>
		</div>
<?php
}
}
}else{
//*---------------------------------------VIDEO----------------------------------------*//


//Obtener ID

$idvideo=$_GET['idvideo'];
$confirmar=$_GET['confirmar'];



if($confirmar==1){//Eliminacion confirmada

//Eliminar ID verificando que Session sea propia
$sql="DELETE FROM videos WHERE id=".$idvideo." AND idusuario=".$_SESSION['idusuario']."";
mysqli_query($conexion,$sql)or die ('Inténtalo más tarde');
echo("Video Eliminado");

//Eliminar registro de video presentacion o crowd en perfil
$resultado = mysqli_query($conexion,"SELECT idvideoprincipal,idvideocrowd FROM personal WHERE idusuario = '".$_SESSION['idusuario']."' ");//Muestra fotos de la persona
$fila = mysqli_fetch_row($resultado);
if($fila[0]==$idvideo){//Video era principal
mysqli_query($conexion,"UPDATE personal SET idvideoprincipal='1' WHERE idusuario='".$_SESSION['idusuario']."'");
}

if($fila[1]==$idvideo){//Video era crowd
mysqli_query($conexion,"UPDATE personal SET idvideocrowd='1' WHERE idusuario='".$_SESSION['idusuario']."'");
}


}else if($confirmar==0){ //Solicitar confirmacion
echo("¿Eliminar Video? "." <a style=\"cursor:pointer;\" onclick=\"eliminaVideo(".$idvideo.",1)\">Si</a>, "."<a style=\"cursor:pointer;\" onclick=\"eliminaVideo(".$idvideo.",3)\"> No </a>");
}else{ //Regresar al boton inicial
?>
<div id="casilla<?php echo($idvideo); ?>">
		<button class="btn btn-minier" onclick="eliminaVideo(<?php echo($idvideo); ?>,0)" style="    margin: 5px auto;    display: block;    border-radius: 20px;">Eliminar</button>
		</div>
<?php
}


}









?>