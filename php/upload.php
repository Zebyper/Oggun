<?php
session_start ();
/*
function bytesToSize1024($bytes, $precision = 2) {
    $unit = array('B','KB','MB');
    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
}

$sFileName = $_FILES['image_file']['name'];
$sFileType = $_FILES['image_file']['type'];
$sFileSize = bytesToSize1024($_FILES['image_file']['size'], 1);

*/

/*** check if a file was submitted ***/
$idusuario=$_SESSION['idusuario'];
if(!isset($_FILES['image_file']))
    {
    echo '<p>Seleccione un archivo</p>';
	
	//header('location:perfil.php?usuario='.$idusuario.'&foto=false');
    }
else
    {
    try    {
        /*** check if a file was uploaded ***/
if(is_uploaded_file($_FILES['image_file']['tmp_name']) && getimagesize($_FILES['image_file']['tmp_name']) != false)
    {
    /***  get the image info. ***/
    $size = getimagesize($_FILES['image_file']['tmp_name']);
    /*** assign our variables ***/
    $type = $size['mime'];
    $imgfp = addslashes(file_get_contents($_FILES['image_file']['tmp_name']));
    $size = $size[3];
    $name = $_FILES['image_file']['name'];
    $maxsize = 99999999;


    /***  check the file is less than the maximum file size ***/
    if($_FILES['image_file']['size'] < $maxsize )
        {
        /*** connect to db ***/
		require("info.php");
            /*** our sql query ***/
			
			$sql="UPDATE fotos SET tipo='$type',foto='$imgfp',tamano='$size' WHERE idusuario='$idusuario'";
			
	mysqli_query($conexion,$sql)or die ('Fallo la carga');
	
	
	
	
	
	
	
			
        }
    else
        {
        /*** throw an exception is image is not of type ***/
        throw new Exception("Tamano muy grande");
        }
    }
else
    {
    // if the file is not less than the maximum allowed, print an error
    throw new Exception("Formato de imagen no soportado!");
    }
        
		/* Encontrar id de la foto principal */
	$resultado = mysqli_query($conexion,"SELECT id FROM fotos WHERE idusuario = '$idusuario'");

while($fila = mysqli_fetch_array($resultado))
  {
$idfoto=$fila['id'];

}
	/*Actualizar idfotoprincipal usuarios*/
	$sql="UPDATE personal SET idfotoprincipal='$idfoto' WHERE id='$idusuario'";		
	mysqli_query($conexion,$sql)or die ('Fallo la carga');
		
		/*** give praise and thanks to the php gods ***/
        echo '<p>Imagen cargada</p>';
		$idusuario=$_SESSION['idusuario'];
	header('location:perfil.php?usuario='.$idusuario);
        }
    catch(Exception $e)
        {
        echo '<h4>'.$e->getMessage().'</h4>';
		//header('location:perfil.php?usuario='.$idusuario.'&errorf=true');
        }
    }










?>
 
 
 