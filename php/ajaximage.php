<?php
include('info.php');
session_start();
$path = "../imgusers/";

if(isset($_GET['confirmar'])){

$direccion=$_GET['nombre'];
$nombre=$_SESSION['nombres']." ".$_SESSION['apellidos'];
$size=getimagesize($direccion);
$tipo=$size['mime'];
$size=$size[3];

mysqli_query($conexion,"INSERT INTO fotos (id,idusuario,nombre,tipo,foto,tamano) VALUES (NULL,'".$_SESSION['idusuario']."','".$nombre."','".$tipo."', '".$direccion."','".$size."')");

if($_GET['confirmar']==1){//Foto de perfil
mysqli_query($conexion,"UPDATE personal SET fotoprincipal='".$direccion."' WHERE id='".$_SESSION['idusuario']."'");
$_SESSION['fotoprincipal']=$direccion;
}else{//Foto para galeria

}


}else{


	$valid_formats = array("jpg", "png", "gif","jpeg","JPEG","JPG", "PNG", "GIF");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(10240*10240))
						{
							$actual_image_name = time().$_SESSION['idusuario'].".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								
								
								
								echo "  <img src='".$path.$actual_image_name."'  class='preview' ><br>";
								
									
									if(isset($_POST['sube'])){ //Subir foto 
									
									?>
									<div class="modal-footer">
												<button onclick="confirmaFoto('<?php echo($path.$actual_image_name);?>',2)" class="btn btn-sm btn-warning">
													<i class="icon-ok"></i>
													Subir
												</button>
												</div>
									
									<?php
									}else{//Subir Foto perfil
									$_SESSION['fototemporal']=$path.$actual_image_name;
									
									?>
									<?php 
									echo "  <br>";?>
									<div class="modal-footer">
									<a href="#modal-form4" role="button" onclick="cambiaFotoRecorte('<?php echo($_SESSION['fototemporal']);?>')" class="btn btn-sm btn-warning" data-toggle="modal"> <i class="icon-ok"></i>Recortar y Guardar </a>
									</div>

												
							<?php
							}
							
								}
							else{echo "Algo salió mal, por favor vuelve a intentarlo";}
							
							
							
							
						}
						else
						echo "El tamaño máximo de la imagen es de 10 MB";					
						}
						else
						echo "Elige una imagen válida.. (Formatos válidos .jpg .png .gif )";	
				}
				
			else
				echo "Selecciona una imagen..";
				
			exit;
		}
		
		}
?>