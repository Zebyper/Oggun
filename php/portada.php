<!-- InstanceBegin template="/Templates/generalace.dwt.php" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html>
<head>
<?php
session_start ();
require("info.php");

if(isset($_SESSION['idusuario'])){header('location:index.php');}
?>
<meta  charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Oggun - La red Social con Identidad</title>
<!-- InstanceEndEditable -->
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="oggunfavicon.ico">
<!-- basic styles -->

		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		<link rel="stylesheet" href="../assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		
		
		<link rel="stylesheet" href="../assets/css/chosen.css" />

		<!-- fonts -->

		<link rel="stylesheet" href="../assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="../assets/css/ace.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		
		<link rel="stylesheet" href="../css/video.css" />
		<script src="../js/videop.js"></script>
		<!--Plantilla video-->
		<link rel="stylesheet" href="../css/video-js.css" type="text/css" />
		<script src="../js/video.js"></script>
		<script src="../js/javainicio.js"></script>

		<!--[if lte IE 8]>
		<link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="../assets/js/ace-extra.min.js"></script>
		<script src="../js/javainicio.js"></script>
		<style>

		#bodywelcome{
		position:absolute;
		top:0px;
		left:0px;
		bottom:0px;
		right:0px;
		background:#FFF;
		background:url('../img/welcome.jpg');
		background-size: cover;
		-webkit-animation: efecto 30s linear;
		-webkit-animation-iteration-count: infinite;
animation: efecto 10s linear;
animation-iteration-count: infinite;

		}
		
		

/* Chrome, Safari, Opera */
@-webkit-keyframes efecto
{
0% {top: 0px;left:0px;}
5% {top: 0px;left:0px;}
48% {top: -200px;left:-200px;}
52% {top: -200px;left:-200px;}
95% {top: 0px;left:0px;}
100% {top: 0px;left:0px;}
}

/* Standard syntax */
@keyframes myfirst
{
0% {top: 0px;left:0px;}
5% {top: 0px;left:0px;}
48% {top: -200px;left:-200px;}
52% {top: -200px;left:-200px;}
95% {top: 0px;left:0px;}
100% {top: 0px;left:0px;}
}

#welcome-box{
		-webkit-animation: aparece 1s linear;
animation: aparece 3s linear;
		}
		
/* Chrome, Safari, Opera */
@-webkit-keyframes aparece
{
from {opacity: 0;}
to {opacity: 1;}
}

/* Standard syntax */
@keyframes aparece
{
from {opacity: 0;}
to {opacity: 1;}
}
		
		
	 
    </style>
		
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body >

<?php 



include("error.php");

?>
<div id="bodywelcome"> </div>

<div id="ingreso"  > 




	<div class="login-layout" style=" z-index:500;position: relative; 
 right: 0; 
margin: 10% auto;
display: block;">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container" >
							

							<div class="position-relative">
								
								
								<div id="welcome-box" class="forgot-box dark-orange widget-box no-border visible">
								
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header dark-orange lighter bigger">
												<img src="../img/oggunlogo.png" style="
    margin: 0px auto;
	display:block;
">
<div class="space-4"></div>
											</h4>

											<div class="space-6"></div>
											<p style="text-align: center; color: #444; ">
												Únete a Oggun, Nuestra Red Laboral
											</p>

											
												<fieldset>
													

													<div class="clearfix">
														<button type="button" class=" btn btn-sm btn-warning" style="display: block; margin: 0px auto;" onclick="show_box('signup-box'); return false;">
															<i class="icon-lightbulb"></i>
															Crea una cuenta nueva
														</button>
													</div>
													
													<div class="space-4"></div>
													
													<div class="clearfix">
														<button type="button" class="  btn btn-sm btn-warning" style="display: block; margin: 0px auto;" onclick="show_box('login-box'); return false;">
															<i class="icon-user"></i>
															Ingresa con tu cuenta
														</button>
													</div>
													
													<div class="space-4"></div>
													
													<a href="index.php" style="display: block; text-align: center;margin: 0px auto; color: #444; ">
												Da un vistazo como invitado
											</a>
													
													
												</fieldset>
											
										</div><!-- /widget-main -->

										
									</div><!-- /widget-body -->
								</div><!-- /welcome-box -->
								
								
								
								<div id="login-box" class="login-box dark-orange widget-box no-border">
								<p  style="position:absolute;top:3px;right:10px;cursor:pointer;" onclick="show_box('welcome-box'); return false;" > x </p>
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header dark-orange lighter bigger">
												<img src="../img/oggunlogoslim.png" height="30px">
												Si ya tienes una cuenta:
											</h4>

											<div class="space-6"></div>

											<form method="post" action="ingresar.php">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="correo" class="form-control" placeholder="Correo" maxlength="50" required data-rel="tooltip" data-placement="bottom" data-original-title="Tu correo registrado en Oggun" <?php if(isset($_GET['correo'])){$correo=$_GET['correo'];echo("value='$correo'");}?>/>
															<i class="icon-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="clave" class="form-control" placeholder="Contraseña" maxlength="50" data-rel="tooltip" data-placement="bottom" data-original-title="Tu clave en Oggun" required />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-warning">
															<i class="icon-key"></i>
															Ingresar
														</button>
															
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
										   <div>
												<a href="#" onclick="show_box('forgot-box'); return false;" class="dark-orange">
													<i class="icon-arrow-left"></i>
													Olvidé mi clave
												</a>
											</div> 

											<div>
												<a href="#" onclick="show_box('signup-box'); return false;" class="dark-orange">
													No tengo cuenta
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<div id="forgot-box" class="forgot-box dark-orange widget-box no-border">
								<p  style="position:absolute;top:3px;right:10px;cursor:pointer;" onclick="show_box('welcome-box'); return false;" > x </p>
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header dark-orange lighter bigger">
												<i class="icon-key"></i>
												Recuperar Contraseña
											</h4>

											<div class="space-6"></div>
											<p>
												Cambia de contraseña
											</p>

											
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" id="email" name="correo" class="form-control" placeholder="Correo" maxlength="50" required data-rel="tooltip" data-placement="bottom" data-original-title="Tu correo registrado en Oggun" <?php if(isset($_GET['correo'])){$correo=$_GET['correo'];echo("value='$correo'");}?>/>
															<i class="icon-envelope"></i>
														</span>
													</label>
													<p id="m"></p>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-warning" id="cambiar">
															<i class="icon-key"></i>
															Cambiar
														</button>
															
													</div>

													<div class="space-4"></div>
												</fieldset>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="dark-orange">
												Regresar a ingreso
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->


								<div id="signup-box" class="signup-box widget-box  no-border">
								<p  style="position:absolute;top:3px;right:10px;cursor:pointer;" onclick="show_box('welcome-box'); return false;" > x </p>
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header dark-orange lighter bigger">
												<img src="../img/oggunlogoslim.png" height="30px">
												Crear nuevo usuario
											</h4>
											
											


											<div class="space-6"></div>
											<p class="dark-orange"> Comienza por seleccionar tu perfil: </p>

											<form method="post" action="crear.php">
												<fieldset>
												
												<input  type="radio" class="ace"  name="perfil" value="1" id="perfil1" <?php if(isset($_GET['perfil'])){if($_GET['perfil']==1){echo('checked');}
				}?> required="required"/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si tienes un título profesional" for="perfil1" class="lbl"  onclick="profesional()">Profesional</label>
            
            <input type="radio" class="ace" name="perfil" value="2" id="perfil2"<?php if(isset($_GET['perfil'])){if($_GET['perfil']==2){echo('checked');}
				}?>/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si tienes un título técnico o tecnológico" for="perfil2" class="lbl" onclick="tecnico()">Técnico</label>
            
            <input type="radio" class="ace" name="perfil" value="3" id="perfil3"<?php if(isset($_GET['perfil'])){if($_GET['perfil']==3){echo('checked');}
				}?>/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si te desempeñas en un arte o talento. Ej: Pintor, Bailarín, Actor, etc." for="perfil3" class="lbl" onclick="talento()">Talento</label>
            
            <input type="radio" class="ace" name="perfil" value="4"  id="perfil4" <?php if(isset($_GET['perfil'])){if($_GET['perfil']==4){echo('checked');}
				}?> />
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si ejerces un oficio. Ej: Jardinero, Carpintero, Plomero, etc." for="perfil4" class="lbl" onclick="oficio()">Oficio</label>
				<input type="radio" class="ace" name="perfil" value="5"  id="perfil5" <?php if(isset($_GET['perfil'])){if($_GET['perfil']==5){echo('checked');}
				}?> />
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Toda aquella profesión independiente que no esté incluida en las anteriores, Ej: Empresario, Estudiante, Comerciante, Emprendedor, etc." for="perfil5" class="lbl" onclick="ocupacion()">Ocupación</label>
				<div class="space-24"></div>
				<div class="space-24"></div>
				<p class="dark-orange"> Ahora necesitamos saber algo básico de ti: </p>
												
												<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input data-rel="tooltip" data-placement="bottom" data-original-title="Nombres sin apellidos" type="text" class="form-control" placeholder="Nombres" name="nombres" maxlength="50" <?php if(isset($_GET['nombres'])){$nombres=str_replace('.', ' ', $_GET['nombres']);echo("value='$nombres'");}?>required />
															<i class="icon-user"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input data-rel="tooltip" data-placement="bottom" data-original-title="Tus Apellidos" type="text" class="form-control" placeholder="Apellidos" name="apellidos" maxlength="50" <?php if(isset($_GET['apellidos'])){$apellidos=str_replace('.', ' ', $_GET['apellidos']);echo("value='$apellidos'");}?>required />
															<i class="icon-group"></i>
														</span>
													</label>
													
													<input type="radio" class="ace" name="sexo" value="0" id="femenino" <?php if(isset($_GET['sexo'])){if($_GET['sexo']==0){echo('checked');}
				}?> required="required"/>
                <label class="lbl" for="femenino">Femenino</label>
            
            
            <input type="radio" class="ace" name="sexo" value="1" id="masculino"<?php if(isset($_GET['sexo'])){if($_GET['sexo']==1){echo('checked');}
				}?>/>
                <label class="lbl" for="masculino">Masculino</label>

				
				
								<div class="space-6"></div>
				<p class="dark-orange"> Finalmente un correo y contraseña para ingresar nuevamente: </p>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input data-rel="tooltip" data-placement="bottom" data-original-title="Un correo que uses" type="email" class="form-control" placeholder="Correo" name="correo" maxlength="50" <?php if(isset($_GET['correo'])){$correo=$_GET['correo'];echo("value='$correo'");}?> required />
															<i class="icon-envelope"></i>
														</span>
													</label>

													
													
													            

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input data-rel="tooltip" data-placement="bottom" data-original-title="Clave para Oggun, no el de tu correo" type="password" class="form-control" placeholder="Contraseña" name="clave" maxlength="50" required />
															<i class="icon-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input data-rel="tooltip" data-placement="bottom" data-original-title="Repite la clave, por seguridad" type="password" class="form-control" placeholder="Repetir Contraseña" name="claverep" maxlength="50" required/>
															<i class="icon-retweet"></i>
														</span>
													</label>



													<div class="space-24"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-65 pull-right btn btn-sm btn-warning">
															Registrar
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="dark-orange">
												<i class="icon-arrow-left"></i>
												Ya tengo una cuenta
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->

		<script src="../assets/js/chosen.jquery.min.js"></script>
		

		<script type="text/javascript">
		jQuery(function($) {
		$('[data-rel=tooltip]').tooltip({container:'body'});
		});
		
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
			function hide_box() {
			 jQuery('.widget-box.visible').removeClass('visible');
			}
			
			


		</script>
	</div>


</div>
		






<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='../assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/typeahead-bs2.min.js"></script>

		<script type="text/javascript">
			jQuery(function($) {
				
			
			
				$(".chosen-select").chosen(); 
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
				
			
			});
			
		$('#cambiar').click(function(){
			var email = $('#email').val();
			$.ajax({
				url: 'recuperarco.php',
				type: 'POST',
				data: {correo: email},
				success:  function (msg) {
                      
                      	
                    $("#m").html(msg);

                }
			});
			
		});
		</script>
		
		<!-- page specific plugin scripts -->
		
		<script src="../assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/chosen.jquery.min.js"></script>
		<script src="../assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="../assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="../assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="../assets/js/date-time/moment.min.js"></script>
		<script src="../assets/js/date-time/daterangepicker.min.js"></script>
		<script src="../assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="../assets/js/jquery.knob.min.js"></script>
		<script src="../assets/js/jquery.autosize.min.js"></script>
		<script src="../assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="../assets/js/jquery.maskedinput.min.js"></script>
		<script src="../assets/js/bootstrap-tag.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery-2.0.3.min"></script>

		<!-- ace scripts -->

		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

</body>
<!-- InstanceEnd --></html>
