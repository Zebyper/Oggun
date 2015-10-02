<?php require("info.php"); 

$perfil=1;
$idusuario=33;
?>
 
<link rel="stylesheet" media="screen" type="text/css" href="../css/spacegallery.css" />
 <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/eye.js"></script>
<script type="text/javascript" src="../js/utils.js"></script>
<script type="text/javascript" src="../js/spacegallery.js"></script>


<p class="white" style="position:absolute;top:5px;left:10px;cursor:pointer;" onclick="cerrargaleria()"  > <b>x</b> </p>


<section id="galeria" >
<p class="white" style="position:absolute;top:5px;left:10px;cursor:pointer;" onclick="cerrargaleria()"  > <b>x</b> </p>
<div id="myGallery" class="spacegallery" style="width:100%;height:500px;">

  

<?php
$resultadoa = mysqli_query($conexion,"SELECT foto,idusuario FROM fotos WHERE idusuario = '".$idusuario."'");//Muestra fotos de la persona
while($filaa = mysqli_fetch_row($resultadoa)){
echo('
<img height="300px" width="255px" src="'.$filaa[0].'" alt="" />
');
}
?>

</div>
</section>
<a href="perfil.php?usuario='.$idusuario.'"></a>

<script>
$('#myGallery').spacegallery({loadingClass: 'loading'});
</script>