<?PHP
session_start ();
?>

<div class="asideregistro">

<div id="form_wrapper" class="form_wrapper">
<form class="login"  id="login_form" method="post" action="ingresar.php">
<p  class="cerrarformulario" onclick="ocultaRegistro();" > x </p>
    <h3>Ingresar</h3>
    <div>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" <?php if(isset($_GET['correo'])){$correo=$_GET['correo'];echo("value='$correo'");}?>required/>
    </div>
    <div>
    
        <label for="clave">Contraseña: 
            
        </label>
        <input type="password" name="clave" id="clave" required/>
        <a href="#" rel="forgot_password" class="forgot linkform" >
                Olvidaste tu contraseña?
            </a>
    </div>
    <div class="bottom">
                <input type="submit" value="Ingresar"></input>
        <a href="#" rel="register" class="linkform">
            Aún no tienes cuenta? Regístrate aquí.
        </a>
        <div class="clear"></div>
    </div>
</form>

<form class="forgot_password"  id="forgot_form" method="post" action="crear.php">
<p  class="cerrarformulario" onclick="ocultaRegistro();" > x </p>
    <h3>Recuperar contraseña</h3>
    <div>
        <label for="correo">Correo:</label>
        <input type="email"  name="correo" id="correo" required/>
    </div>
    <div class="bottom">
        <input type="submit" value="Enviar"></input>
        <a href="#" rel="login" class="linkform">
            ¿Recordaste tu clave? Ingresa aquí.
        </a>
        <a href="#" rel="register" class="linkform">
            Aún no tienes cuenta? Regístrate aquí.
        </a>
        <div class="clear"></div>
    </div>
</form>



<form class="register active" name="register_form"  id="register_form" method="post" action="crear.php">
<p  class="cerrarformulario" onclick="ocultaRegistro();" > x </p>
    <h3>Regístrate</h3>

     <div class="column2" id="campoperfil">
            <div id="seleccionperfil"></div>
            <!--<label>Perfil:</label>-->
            <div class="remember">
            
            <input type="radio" class="radiop"  name="perfil" value="1" id="perfil1" <?php if(isset($_GET['perfil'])){if($_GET['perfil']==1){echo('checked');}
				}?> required="required"/>
                <label for="perfil1" class="profesional"  onclick="profesional()">Profesional</label>
            
            <input type="radio" class="radiop" name="perfil" value="2" id="perfil2"<?php if(isset($_GET['perfil'])){if($_GET['perfil']==2){echo('checked');}
				}?>/>
                <label for="perfil2" class="tecnico" onclick="tecnico()">Técnico</label>
            
            <input type="radio" class="radiop" name="perfil" value="3" id="perfil3"<?php if(isset($_GET['perfil'])){if($_GET['perfil']==3){echo('checked');}
				}?>/>
                <label for="perfil3" class="talento" onclick="talento()">Talento</label>
            
            <input type="radio" class="radiop" name="perfil" value="4"  id="perfil4" <?php if(isset($_GET['perfil'])){if($_GET['perfil']==4){echo('checked');}
				}?> />
                <label for="perfil4" class="oficio" onclick="oficio()">Oficio</label>
            </div>
            
        </div>



    <div class="column">
        <div>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres" <?php if(isset($_GET['nombres'])){$nombres=str_replace('.', ' ', $_GET['nombres']);echo("value='$nombres'");}?>required />
        </div>
        <div>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos"   <?php if(isset($_GET['apellidos'])){$apellidos=str_replace('.', ' ', $_GET['apellidos']);echo("value='$apellidos'");}?>required />
        </div>
        
       
    </div>
    <div class="column">
        <div>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" name="correo" id="correo" <?php if(isset($_GET['correo'])){$correo=$_GET['correo'];echo("value='$correo'");}?> required />
        </div>
        <div>
            <label for="clave">Contraseña:</label>
            <input type="password"  name="clave" id="clave" required />
        </div>
        
    </div>
    <div class="column3">
            
            <label>Sexo:</label>
            <div class="remember">
            
            <input type="radio"  name="sexo" value="0" id="femenino" <?php if(isset($_GET['sexo'])){if($_GET['sexo']==0){echo('checked');}
				}?> required="required"/>
                <label style="display: inline;
padding: 0px 5px 0px 0px;" for="femenino">Femenino</label>
            
            
            <input type="radio" name="sexo" value="1" id="masculino"<?php if(isset($_GET['sexo'])){if($_GET['sexo']==1){echo('checked');}
				}?>/>
                <label style="display: inline;
padding: 0px 5px 0px 0px;" for="masculino">Masculino</label>

            </div>
            
        </div>
        
        
    <div class="bottom">
    <a href="#" rel="login" class="linkform" style="float:left">
            ¿Ya tienes cuenta?, Ingresa aquí.
        </a> 
        <input type="submit" name="registrar" id="registrar" value="Registrar"  />
        
        <div class="clearfloat"></div>
    </div>
</form>


</div>

</div>


<script>
$(function() {

				

				$(document).click(function() {
					// all dropdowns
					cerrarpop();
				});

			});
function cerrarpop(){
document.getElementById('popcont').style.visibility="hidden";    
document.getElementById('popmsj').style.visibility="hidden";    
}

function activarManual(){
	document.getElementById("form_wrapper").style.visibility = "visible";
var $form_wrapper   = $('#form_wrapper'),
//the current form is the one with class "active"
$currentForm    = $form_wrapper.children('form.active'),
//the switch form links
$linkform       = $form_wrapper.find('.linkform');
$form_wrapper.children('form').each(function(i){
    var $theForm    = $(this);
    //solve the inline display none problem when using fadeIn/fadeOut
    if(!$theForm.hasClass('active'))
        $theForm.hide();
    $theForm.data({
        width   : $theForm.width(),
        height  : $theForm.height()
    });
});
setWrapperWidth();
function setWrapperWidth(){
    $form_wrapper.css({
        width   : $currentForm.data('width') + 'px',
        height  : $currentForm.data('height') + 'px'
    });
}
    $currentForm.fadeOut(0,function(){
        //remove class "active" from current form
        $currentForm.removeClass('active');
        //new current form
        $currentForm= $form_wrapper.children('form.'+'register');
        //animate the wrapper
        $form_wrapper.stop()
                     .animate({
                        width   : $currentForm.data('width') + 'px',
                        height  : $currentForm.data('height') + 'px'
                     },0,function(){
                        //new form gets class "active"
                        $currentForm.addClass('active');
                        //show the new form
                        $currentForm.fadeIn(400);
                     });
    });
}

function activarManualLogin(){
	document.getElementById("form_wrapper").style.visibility = "visible";
var $form_wrapper   = $('#form_wrapper'),
//the current form is the one with class "active"
$currentForm    = $form_wrapper.children('form.active'),
//the switch form links
$linkform       = $form_wrapper.find('.linkform');
$form_wrapper.children('form').each(function(i){
    var $theForm    = $(this);
    //solve the inline display none problem when using fadeIn/fadeOut
    if(!$theForm.hasClass('active'))
        $theForm.hide();
    $theForm.data({
        width   : $theForm.width(),
        height  : $theForm.height()
    });
});
setWrapperWidth();
function setWrapperWidth(){
    $form_wrapper.css({
        width   : $currentForm.data('width') + 'px',
        height  : $currentForm.data('height') + 'px'
    });
}
    $currentForm.fadeOut(0,function(){
        //remove class "active" from current form
        $currentForm.removeClass('active');
        //new current form
        $currentForm= $form_wrapper.children('form.'+'login');
        //animate the wrapper
        $form_wrapper.stop()
                     .animate({
                        width   : $currentForm.data('width') + 'px',
                        height  : $currentForm.data('height') + 'px'
                     },0,function(){
                        //new form gets class "active"
                        $currentForm.addClass('active');
                        //show the new form
                        $currentForm.fadeIn(400);
                     });
    });
}
</script>

<?php
if ($_GET['repetido']=='true'){
	echo('<div class="contenedorpop" id="popcont"></div>
<div class="errorpop" id="popmsj">
<h2 style="color:#990000;"> Tu cuenta no fue creada </h2>
<h3 style="border: 0px;background:#444;border-radius:0px 0px 16px 16px;"> El correo ya estaba registrado. </h3>

</div>
<script>
 document.getElementById("form_wrapper").style.visibility = "visible";
</script>
');
}


if ($_GET['errorc']=='true'){
	echo('<div class="contenedorpop" id="popcont"></div>
<div class="errorpop" id="popmsj">
<h2 style="color:#990000;"> Ingreso no valido </h2>
<h3 style="border: 0px;background:#444;border-radius:0px 0px 16px 16px;"> El correo o clave es incorrecto. </h3>

</div>
<script>

 document.getElementById("form_wrapper").style.visibility = "visible";
 
 activarManualLogin();
 
 
</script>
');
}
?>



