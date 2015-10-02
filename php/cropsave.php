<?php

/**
 * Jcrop image cropping plugin for jQuery
 * Example cropping script
 * @copyright 2008-2009 Kelly Hallman
 * More info: http://deepliquid.com/content/Jcrop_Implementation_Theory.html
 */

session_start ();
require("info.php");


if($_POST['cancela']=="Cancelar"){
if(isset($_SESSION['fototemporal'])){
	unset($_SESSION['fototemporal']);
	}
header('location:perfil.php?usuario='.$_SESSION['idusuario']);
}else{

	$targ_w = 255;
	$targ_h = 300;
	$jpeg_quality = 100;
	$path = "../imgusers/";

	if(isset($_SESSION['fototemporal'])){
	$src = $_SESSION['fototemporal'];
	unset($_SESSION['fototemporal']);
	}else{
	$src = $_SESSION['fotoprincipal'];
	}
	if($src=="../imgusers/default.jpg" || $src=="../imgusers/default2.jpg"){//Las imagenes por defecto no se deben recortar
	header('location:perfil.php?usuario='.$_SESSION['idusuario']);
	}else{
	
	switch ( strtolower( pathinfo( $src, PATHINFO_EXTENSION ))) {
        case 'jpeg':
		$img_r = imagecreatefromjpeg($src);
        break;
        case 'jpg':
            $img_r = imagecreatefromjpeg($src);
        break;

        case 'png':
            $img_r = imagecreatefrompng($src);
        break;

        case 'gif':
            $img_r = imagecreatefromgif($src);
        break;
        default:

            throw new InvalidArgumentException('El archivo "'.$src.'" no tiene un formato valido jpg, png o gif.');
        break;
    }
	$dst_r = ImageCreateTrueColor( $targ_w, $targ_h )or die('No se pudo recortar');;

	imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
	$targ_w,$targ_h,$_POST['w'],$_POST['h']);

	$actual_image_name = time().$_SESSION['idusuario'].".jpg";
	
	imagejpeg($dst_r,$path.$actual_image_name,$jpeg_quality);
	$size=getimagesize($path.$actual_image_name);
	$tipo=$size['mime'];
	$size=$size[3];
	
	
	
	$nombre=$_SESSION['nombres']." ".$_SESSION['apellidos'];
	mysqli_query($conexion,"INSERT INTO fotos (id,idusuario,nombre,tipo,foto,tamano) VALUES (NULL,'".$_SESSION['idusuario']."','".$nombre."','".$tipo."', '".$path.$actual_image_name."','".$size."')");
								
	
	
	mysqli_query($conexion,"UPDATE personal SET fotoprincipal='".$path.$actual_image_name."' WHERE id='".$_SESSION['idusuario']."'");
	
	$_SESSION['fotoprincipal']=$path.$actual_image_name;
	
	header('location:perfil.php?usuario='.$_SESSION['idusuario']);

}
}
// If not a POST request, display page below:

?>