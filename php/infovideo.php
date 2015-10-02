<?php require("info.php"); 
session_start();
$idvideo=$_GET['idvideo'];

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Content-Type: application/xml; charset=utf-8");

if(isset($_GET['idusuariovoto'])){?>



<?php
$idusuariovoto=$_GET['idusuariovoto'];

$sql="INSERT INTO votosvideos (id,idvideo, idusuario)
VALUES
(NULL,'".$idvideo."','".$idusuariovoto."')";
	mysqli_query($conexion,$sql)or die ('Fallo el registro del voto');
	
	$sql2="UPDATE videos SET puntuacion = puntuacion+1 WHERE id =".$idvideo." ";
	mysqli_query($conexion,$sql2)or die ('Fallo el registro de la puntuacion');
	

$resultadoov = mysqli_query($conexion,"SELECT titulo,descripcion,lugar,puntuacion,nombres,apellidos,usuarios.id FROM videos,usuarios WHERE videos.id = '".$idvideo."' AND videos.idusuario=usuarios.id");
$filaov = mysqli_fetch_row($resultadoov);



?>


<?php if ($filaov[3]>0){ ?>

<div class="progress progress-striped active" data-percent="<?php echo($filaov[3]); ?>°C">
<div class="progress-bar progress-bar-<?php if ($filaov[3]>=50){echo("danger");}else if($filaov[3]>=0){echo("info");}else{echo("");} ?>" style="width: <?php echo($filaov[3]); ?>%"></div>
</div>

<?php if ($filaov[3]>99){?>
<button class="btn btn-success btn-xl" style="
    display: block;
    margin: 0px auto;
"><i class="icon-ok"></i>Apoyar</button>

<?php }else{ ?>

<button class="btn disabled btn-inverse btn-xl" style="
    display: block;
    margin: 0px auto;
"><i class="icon-fire"></i>Te gusta</button>

<?php } ?>

<?php } }else{ ?>







<?php
$resultadoov = mysqli_query($conexion,"SELECT titulo,descripcion,lugar,puntuacion,nombres,apellidos,usuarios.id FROM videos,usuarios WHERE videos.id = '".$idvideo."' AND videos.idusuario=usuarios.id");//Muestra fotos de la persona
$filaov = mysqli_fetch_row($resultadoov);
?>
<div id="fondoinfovideo" style="background:<?php if ($filaov[3]>=50){echo("url(../img/fire.gif)");}else if($filaov[3]>0){echo("url(../img/snow.gif)");}else{echo("none");} ?> ">


<div style="float:left;position: relative;height:100%; width: 66.6666%;" id="cajavideo">

<iframe id="videoprincipal" src="" frameborder="0" width="560px" height="315px" allowfullscreen style="height:100%; width: 90%;display: block;position: relative;margin: 0px auto;"  ></iframe>

 </div>

<div id="infovideo" >
<h4 class="dark-orange"><?php echo($filaov[0]); ?> </h4>
<p>Por <a style="cursor:pointer;" href="perfil.php?usuario=<?php echo($filaov[6]); ?>" ><?php echo($filaov[4]." ".$filaov[5]); ?></a>, en <?php echo($filaov[2]); ?>.</p>
<p ><?php echo($filaov[1]); ?></p>


<div id="resultadovoto">
<?php if ($filaov[3]>0){ ?>

<div class="progress progress-striped active" data-percent="<?php echo($filaov[3]); ?>°C">
<div class="progress-bar progress-bar-<?php if ($filaov[3]>=50){echo("danger");}else if($filaov[3]>=0){echo("info");}else{echo("");} ?>" style="width: <?php echo($filaov[3]); ?>%"></div>
</div>

<?php if ($filaov[3]>99 && isset($_SESSION['idusuario'])){?>
<button class="btn btn-success btn-xl" style="
    display: block;
    margin: 0px auto;
"><i class="icon-ok"></i>Apoyar</button>

<?php }else if(isset($_SESSION['idusuario'])){ 

$resultadoovo = mysqli_query($conexion,"SELECT COUNT(*) FROM votosvideos WHERE idvideo = '".$idvideo."' AND idusuario=".$_SESSION['idusuario']."  ");//Muestra fotos de la persona
$filaovo = mysqli_fetch_row($resultadoovo);

if($filaovo[0]>0){?>

<button class="btn disabled btn-inverse btn-xl" style="
    display: block;
    margin: 0px auto;
"><i class="icon-fire"></i>Te gusta</button>

<?php }else{ ?>

<button class="btn btn-inverse btn-xl" style="
    display: block;
    margin: 0px auto;
" onclick="votar(<?php echo($idvideo);?>,<?php echo($_SESSION['idusuario']);?>);"><i class="icon-fire"></i>Me Gusta</button>


<?php } } ?>

<?php }  ?>
</div>
</div>
</div>

<?php }  ?>






