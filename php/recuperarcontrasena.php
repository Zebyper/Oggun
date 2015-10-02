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

$sql ="SELECT id,nombres,apellidos FROM usuarios WHERE id = ".$_GET['id']." AND recuperarcontra = '".$_GET['contra']."'";

$query = mysqli_query($conexion,$sql);

$num = mysqli_num_rows($query);
if($num == 1){

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
												<i class="icon-key"></i>
												Recuperar Contraseña
											</h4>

											<div class="space-6"></div>
											<p>
												Cambia de contraseña
											</p>

											<form method="POST" action="recuperarco.php">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="pass1" name="pass1" class="form-control" placeholder="Contraseña1" maxlength="50" required data-rel="tooltip" data-placement="bottom" data-original-title="Tu correo registrado en Oggun"/>
															<i class="icon-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="pass2"  name="pass2" class="form-control" placeholder="Contraseña2" maxlength="50" data-rel="tooltip" data-placement="bottom" data-original-title="Tu clave en Oggun" required />
															<i class="icon-lock"></i>
														</span>
													</label>
													<input type="password"  name="id" class="form-control" placeholder="Contraseña2" maxlength="50" data-rel="tooltip" data-placement="bottom" data-original-title="Tu clave en Oggun" value="<?php echo $_GET['id']; ?>" style="display:none;"/>
													<input type="password"  name="contra" class="form-control" placeholder="Contraseña2" maxlength="50" data-rel="tooltip" data-placement="bottom" data-original-title="Tu clave en Oggun" value="<?php echo $_GET['contra']; ?>" style="display:none;"/>
																

													<p id="m"></p>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-warning">
															<i class="icon-key"></i>
															Cambiar
														</button>
															
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										
									</div><!-- /widget-body -->
								</div><!-- /welcome-box -->
								
	<?php }else{
			
			header('LOCATION:portada.php');
		} ?>						
								
								
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