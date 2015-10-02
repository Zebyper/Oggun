<?php require("info.php"); 
session_start();

$perfil=$_GET['perfil'];
$idusuario=$_GET['idusuario'];
?>



 



<section id="galeria" >
<p class="white" style="font-size: 21px;font-weight: bold;position:absolute;top:5px;right:10px;cursor:pointer;z-index:800" onclick="cerrargaleria()"  > <b>x</b> </p>
<div style="max-width:100%;max-height:100%;margin: 0px auto;">
<div class="flexslider">
  <ul class="slides">
<?php
$resultadoa = mysqli_query($conexion,"SELECT foto,id FROM fotos WHERE idusuario = '".$idusuario."' ORDER BY fechafoto DESC");//Muestra fotos de la persona
while($filaa = mysqli_fetch_row($resultadoa)){
echo('<li><a class="vinculoimagen" href=""><img  src="'.$filaa[0].'" alt="" style="height:100%;max-height:100%;width:auto; margin:0px auto;display:block;position:relative;"/></a>');
if(isset($_SESSION['idusuario'])){
if($_SESSION['idusuario']==$idusuario){
echo('<div id="casillaf'.$filaa[1].'" style="position: absolute;bottom: 0px;">
		<button class="btn btn-minier" onclick="eliminaFoto('.$filaa[1].',0)" style="    margin: 5px auto;    display: block;    border-radius: 20px;">Eliminar</button>
		<button class="btn btn-minier" onclick="eliminaFoto('.$filaa[1].',\''.$filaa[0].'\')" style="    margin: 5px auto;    display: block;    border-radius: 20px;">Seleccionar como Principal</button>
		</div>');
		}}
		echo('</li>');
}
?>
</ul>
</div>
</div>
</section>



<section id="galeriarelper" ><!--relacionadas con fotos del tipo de perfil-->
<ul style="margin:10px auto;">
<?php
/*$resultadoo = mysqli_query($conexion,"SELECT foto,a.idusuario,personal.perfil,a.id FROM fotos a,personal WHERE personal.perfil='".$perfil."' AND personal.idusuario =a.idusuario  AND a.idusuario!=".$idusuario." AND (SELECT COUNT(*) FROM fotos b WHERE b.idusuario=a.idusuario AND b.id>=a.id)<=1 ORDER BY RAND()");*///Muestra fotos con perfil relacionado, no muestra las de la persona, no repite foto por usuario discrimina en la ultima foto subida.
$resultadoo = mysqli_query($conexion,"SELECT fotoprincipal,idusuario,perfil FROM personal WHERE perfil='".$perfil."' AND idusuario!=".$idusuario." AND fotoprincipal!='../imgusers/default.jpg' AND fotoprincipal!='../imgusers/default2.jpg' ORDER BY RAND()");
while($filao = mysqli_fetch_row($resultadoo)){

echo('
<li ><img id="imagenpequenaderecha" style="cursor:pointer; margin:1%; " onclick="showPict(\''.$filao[0].'\','.$filao[1].','.$filao[2].') " width="100%"  src="'.$filao[0].'" > <img/></li>
');
}
?>

</ul>
</section>
