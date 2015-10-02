<style>
#errorcontenedor{position:absolute;top:0px;left:0px;background:rgba(255,255,255,0.5);z-index:3000;width:100%;height:100%;}

</style>

<?php

if(isset($_GET['error'])){

switch($_GET['error']){

case 'claverep':
$mensaje1="Las claves no coinciden:";
$mensaje2="Asegúrate de escribir la misma clave dos veces.";
$box='signup-box';
break;
case 'repetido':
$mensaje1="Correo ya registrado:";
$mensaje2="Escribe otro correo o ingresa a Oggun con ese correo.";
$box='signup-box';
break;
case 'clave':
$mensaje1="Contraseña incorrecta:";
$mensaje2="Verifica tu contraseña.";
$box='login-box';
break;
case 'correo':
$mensaje1="Correo no registrado:";
$mensaje2="El correo no está registrado en Oggun.";
$box='login-box';
break;
case 'perfil':
$mensaje1="Selecciona un perfil:";
$mensaje2="Recuerda seleccionar tu perfil.";
$box='login-box';
break;
case 'correono':
$mensaje1="El correo no esta registrado";
$mensaje2="Coloca tu correo Oggun";
$box='forgot-box';
break;
case 'falloactualizacion':
$mensaje1="No se actualizo la clave";
$mensaje2="No actualizo correctamente la clave";
$box='login-box';
break;

case 'actualizacion':
$mensaje1="SE A ACTUALIZADO CORRECTAMENTE";
$mensaje2="se actualizo correctamente la clave";
$box='login-box';
break;
default:
$mensaje1="Ocurrió un problema";
$mensaje2="No se procesó tu solicitud";
$box='signup-box';
break;

}//End Switch
?>
<div id="errorcontenedor">
<div  class="gritter-item-wrapper gritter-error gritter-center" style=""><div class="gritter-close" onclick="ocultaerror('<?php echo($box);?>')" ></div><div class="gritter-top header"><h3><?php echo($mensaje1);?></h3></div><div class="gritter-item"><div class="gritter-without-image"><p><?php echo($mensaje2);?></p></div><div style="clear:both"></div></div><div class="gritter-bottom"></div></div>
</div>

<?php //echo('<div id="errorcontenedor"> <h3>'.$mensaje1.'</h3><h4>'.$mensaje2.'</h4></div>');

}//End if

if(isset($_GET['nuevo'])){
?>
<div id="errorcontenedor">
<div  class="gritter-item-wrapper gritter-warning gritter-center" style=""><div class="gritter-top header"><h3><i class="icon-user "></i> <?php if($_SESSION['sexo']==0){print('Bienvenida! ');}else{print('Bienvenido! ');};
print($_SESSION['nombres']);?></h3></div><div class="gritter-item"><div class="gritter-without-image" style="padding-left: 20px;
    padding-right: 10px;"><p><i class="icon-book "></i> Éste es tu perfil.</p><p><i class="icon-youtube-play "></i> Puedes modificar tu foto, información básica, laboral, e inclusive.. ¡subir un video para promocionar!</p><p><i class="icon-camera "></i> Recuerda que para aparecer en la página principal debes tener al menos una foto de perfil y seleccionar tu <?php switch($_SESSION['perfil']){case 1:echo("profesión");break;case 2:echo("área técnica");break;case 3:echo("talento");break;case 4:echo("oficio");break;default:echo("ocupación");break;}?></p><p><i class="icon-bullhorn "></i> ¡Disfruta la red Oggun, y corre la voz!</p>
	<p align="right"><button class="btn btn-white" style="border-radius:10px;" onclick="ocultaerror(1)"><b>Aceptar</b></button></p>
	</div><div style="clear:both"></div></div><div class="gritter-bottom"></div></div>
</div>

<?php
}//End if nuevo


?>