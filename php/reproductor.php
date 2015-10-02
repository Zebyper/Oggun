<?php require("info.php"); 

$perfil=$_GET['perfil'];
$idusuario=$_GET['idusuario'];
?>





<section id="videorelper" ><!--relacionadas con fotos del tipo de perfil-->
<ul style="margin:10px auto;">
<?php

$resultadoo = mysqli_query($conexion,"SELECT video,videos.id,titulo,videos.idusuario,personal.perfil FROM videos,personal WHERE videos.idusuario = personal.idusuario AND  personal.perfil='".$perfil."'   AND videos.idusuario!=".$idusuario."   ORDER BY RAND() ");
while($filao = mysqli_fetch_row($resultadoo)){

echo('
<li style="position:relative; float:left; display:inline-block; margin:5px;"><p class="white" style="width:100%;">'.$filao[2].'</p>

<iframe src="//www.youtube.com/embed/'.$filao[0].'?autoplay=0&showinfo=0&controls=0&wmode=transparent" frameborder="0"
width="92px" height="130px"
 ></iframe>
<div class="btn btn-inverse" style="position: absolute; height: 100%; width: 100%; margin:0px; top:0px;left:0px; opacity:0.2; z-index:310; " onclick="showVid(\''.$filao[0].'\','.$filao[1].','.$filao[3].','.$filao[4].')"  > </div></li>
');
}
?>





</ul>
</section>
<section id="videorelpro" ><!--relacionadas con las fotos propias-->
<ul style="margin:0px; width:1000000000000000000px; ">
<?php
$resultadoo = mysqli_query($conexion,"SELECT video,id,titulo FROM videos WHERE idusuario = '".$idusuario."'");//Muestra fotos de la persona
while($filao = mysqli_fetch_row($resultadoo)){
echo('
<li style="float:left; display:inline-block; margin:5px; position:relative;">
<iframe src="//www.youtube.com/embed/'.$filao[0].'?autoplay=0&showinfo=0&controls=0&wmode=transparent" frameborder="0"
width="89px" height="50px"
 ></iframe>
<div id="imagenpequenaderecha" class="btn btn-inverse" style="position: absolute; height: 100%; width: 100%; margin:0px; top:0px;left:0px; opacity:0.2; z-index:310; " onclick="cambiarvideo(\''.$filao[0].'\','.$filao[1].')"   > </div>
<p class="white" style="width:89px;">'.$filao[2].'</p></li>
');
}
?>
</ul>
</section>