<?php
include('info.php');
session_start();

/*

$path = "../vidusers/";
$allowedExts = array("mp4");
$tipo = $_FILES["file"]["type"];
$tamano = $_FILES["file"]["size"];*/
$video= $_POST["urlvideo"];
$titulo = $_POST["titulovideo"];
$descripcion = $_POST["descripcionvideo"];
$ubicacion = $_POST["ubicacionvideo"];
$idvideoprincipal = $_POST["idvideopresentacion"];
$tipovideo= $_POST["tipovideo"];

if(empty($titulo)){
$titulo="Vídeo Sin Título";
}

$inicio=strpos($video, "?v=");
$video = substr($video, $inicio+3, 11);



/*$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if ((($tipo == "video/mp4"))

&& ($tamano < 52428800)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Algo salió mal: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    
	
    $nuevonombrevideo=time().$_SESSION['idusuario'].".".$extension;

    if (file_exists($path . $nuevonombrevideo))
      {
      echo $nuevonombrevideo . " ya existe. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      $path  . $nuevonombrevideo);
	  
	 */ 
	  
	  mysqli_query($conexion,"INSERT INTO videos (id,idusuario,titulo,descripcion,lugar,puntuacion,video) VALUES (NULL,'".$_SESSION['idusuario']."','".$titulo."','".$descripcion."','".$ubicacion."','0', '".$video."')");
								
	  
	  
	  
	  
	  
	  $resultado = mysqli_query($conexion,"SELECT id FROM videos WHERE idusuario = '$_SESSION[idusuario]' AND video= '$video'");

		$fila = mysqli_fetch_row($resultado);
		$idnuevo =$fila[0];
		
		
if($tipovideo==2){
	  //$idnuevo = mysqli_insert_id();
	  $sql="UPDATE personal SET idvideocrowd='$idnuevo' WHERE idusuario='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 0');
	}else{
	  $sql="UPDATE personal SET idvideoprincipal='$idnuevo' WHERE idusuario='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 0');
	  }
	  
	  
//      echo "<h4 class=\"green\">¡Carga Exitosa!</h4> <br />";
	  echo "Video subido correctamente";
	  header('location:perfil.php?usuario='.$_SESSION['idusuario'].' ');
      /*}
    }
  }
else
  {
  echo "Sólo se permiten videos formato .mp4 de menos de 50Mb, en http://www.clipconverter.cc/es/ puedes modificar tu video fácilmente.";
  
 
	
  
  }*/
?>