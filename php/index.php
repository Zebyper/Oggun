<!-- InstanceBegin template="/Templates/generalace.dwt.php" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html>
<head>
<?php
session_start ();
//if(isset($_SESSION['nombres'])){//Solo incluir si no se ha abierto sesion, showroom.php ya lo tiene
require("info.php");
//}

?>
<meta  http-equiv="Content-type" content="text/html"; charset="utf-8" />
<meta name="keywords" content="oggun, red social oggun, red laboral oggun, oggun web, oggun red" />

<meta name="description" content="Red social laboral con identidad." />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Oggun - ShowRoom</title>
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
		<link rel="stylesheet" type="text/css" href="popover.css">
		<script src="../js/video.js"></script>
		<script src="../js/javainicio.js"></script>
		
		<link rel="stylesheet" media="screen" type="text/css" href="../css/flexslider.css" />

		<!--[if lte IE 8]>
		<link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="../assets/js/ace-extra.min.js"></script>
		<script src="../js/javainicio.js"></script>
		<style>

		#main-container{
			 overflow: hidden;
		}

		.social {
	position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
	right: 0; /* Establecemos la barra en la izquierda */
	top: 200px; /* Bajamos la barra 200px de arriba a abajo */
	z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}
 
	.social ul {
		list-style: none;
	}
 
	.social ul li a {
		display: inline-block;
		color:#fff;
		background: #000;
		padding: 10px 15px;
		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
	}
 
	
	
    .social ul li .oggun {background: #d95232;  }
	.social ul li a:hover {
		padding: 10px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */

	}








	

	 
    </style>

	 
    </style>
		
		<script>
		
		
		
		function searchUser(){
		buscador = document.getElementById('buscador');
		filtroescrito = buscador.value;
		if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	cargarPopup();
    }
  }
  <?php if(isset($_SESSION['idusuario'])){
  echo('str3='.$_SESSION['idusuario'].';');
  }else{
  echo('str3=0'.';');
  } ?>
xmlhttp.open("GET","showroom.php?filtroescrito="+filtroescrito+"&str="+str3,true);
xmlhttp.send();
		}
		
function showUser(str,str2)
{
buscador = document.getElementById('buscador');
		filtroescrito = buscador.value;

if(str==0){
document.getElementById('buscador').value='';
}
if(str==1){
document.getElementById('filtroesppro').style.visibility='visible';
document.getElementById('filtroesppro').style.display='inline-block';
}
else{
document.getElementById('filtroesppro').style.visibility='hidden';
document.getElementById('filtroesppro').style.display='none';
}
if(str==2){document.getElementById('filtroesptec').style.visibility='visible';
document.getElementById('filtroesptec').style.display='inline-block'
}else{document.getElementById('filtroesptec').style.visibility='hidden';
document.getElementById('filtroesptec').style.display='none';}
if(str==3){document.getElementById('filtroesptal').style.visibility='visible';
document.getElementById('filtroesptal').style.display='inline-block';
}else{document.getElementById('filtroesptal').style.visibility='hidden';
document.getElementById('filtroesptal').style.display='none';}
if(str==4){document.getElementById('filtroespofi').style.visibility='visible';
document.getElementById('filtroespofi').style.display='inline-block';
}else{document.getElementById('filtroespofi').style.visibility='hidden';
document.getElementById('filtroespofi').style.display='none';}
if(str==5){document.getElementById('filtroespocu').style.visibility='visible';
document.getElementById('filtroespocu').style.display='inline-block';
}else{document.getElementById('filtroespocu').style.visibility='hidden';
document.getElementById('filtroespocu').style.display='none';}


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	cargarPopup();
    }
  }
  <?php if(isset($_SESSION['idusuario'])){
  echo('str3='.$_SESSION['idusuario'].';');
  }else{
  echo('str3=0'.';');
  } ?>
  if(str==0){xmlhttp.open("GET","showroom.php?filtro="+str+"&esp="+str2+"&str="+str3,true);}
  else{xmlhttp.open("GET","showroom.php?filtro="+str+"&esp="+str2+"&filtroescrito="+filtroescrito+"&str="+str3,true);}

xmlhttp.send();
}
</script>

<style>
      .bloquefiltro {display:inline-block;}
      
	  
	
	 
    </style>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body style class="navbar-fixed skin-1" onload="showUser(0,0)">

<?php 

/*if(!isset($_SESSION['nombres'])){

echo('<div style="position:fixed;top:0px;left:0px;padding:0px;width:150%;height:150%;margin:-1%;">');
include('showroom.php');
echo('</div>');
echo('<div style="position:fixed;top:0px;left:0px;padding:0px;width:150%;height:150%;margin:-1%;background:rgba(255,255,255,0.5);">
</div><div style="position:absolute; top:50%;">
<a onclick="show_box(\'signup-box\'); return false;">click</a>
</div>');
include('login.php');
}else{
*/
include("error.php");

?>

<div id="fondoreproductor" >
<section id="reproductor" >

<div id="resultadoinfovideo" class="pull-right" style="position: absolute; top: 0px; left: 0px; width: 100%;height: 100%;"></div>
<p class="white" style="position:absolute;top:0px;right:10px;cursor:pointer;font-size: 21px;
font-weight: bold;" onclick="cerrarvideo()"  > <b>x</b> </p>
<!-- <video id="medio" data-setup="{}" preload="none" class="video-js vjs-default-skin vjs-big-play-centered pull-left" width="60%" height="100%"  controls poster="../vidusers/default.jpg"   >
</video> -->

</section>
<div id="videorelacionados" >
</div>
</div>


<div id="fondogaleria" >

<div id="galeriarelacionados" >
</div>
</div>


<div class="navbar navbar-default navbar-fixed-top " id="navbar"><!-- .Navbar -->
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container container" id="navbar-container">
				<div class="navbar-header pull-left">
					<!--<a href="index.php" class="navbar-brand">
						<small  style="font-family: 'AdamFont'; font-size: 48px;">
							
							Oggun
						</small>
					</a> /.brand -->
					<a href="index.php" class="navbar-brand" style="
    padding: 0px;
">
						<img src="../img/oggunlogo.png" style="
    margin: 0px;
">
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
				
				<?php
					include('controlusuario.php');
				?>
				<!-- /.navbar-header -->
			<a href="crowd.php">	
<img src="../img/oggunlogoslimplay.png" height="45px" style="display: block; margin: 0px auto;"/>
  </a>
			</div><!-- /.container -->
		</div><!-- /.navbar -->




		<div class="main-container container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
			

				
				<div class="main-content">
					
						

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
							<div id="ingreso"  ><?php include('login.html');?></div>
								<!-- PAGE CONTENT BEGINS -->
								<!-- InstanceBeginEditable name="contenido" -->
								
								<div class="page-header">
							<h1 class="dark-orange">
								ShowRoom 
								<small class="light-orange">
									<i class="icon-double-angle-right"></i>
									Conoce otros perfiles laborales
								</small>
							</h1>
						</div><!-- /.page-header -->

						

								<div class="row-fluid">
								
								<h4 class="header smaller lighter "  >Busca un perfil particular: 


<span style="cursor:pointer;border-radius: 20px;" class="btn btn-minier" onclick="showUser(0,0)">  Mostrar todos</span>

 <form onsubmit="return false;" class="form-search" style=" margin-left: 10px;  display: inline;">
							
								<span class="input-icon">
								   
									<input onchange="searchUser()" type="text" placeholder="Busca por nombre..." class="form-search input-large" id="buscador" style="padding-left: 6px; padding-right: 24px; width:400px;">
									<i class="icon-search nav-search-icon " onclick="searchUser();" style="right: 3px;left: inherit;cursor: pointer; display: inline;"></i>
									
								</span>
							
							</form>
<br>										

<div style="position:relative; width=100%;">	
								<button class="btn btn-sm btn-warning btnper" onclick="showUser(1,0)">
												<i class="icon-fire  bigger-110"></i>
												<span class="bigger-110  no-text-shadow">Profesionales</span>
											</button>
											
											<button class="btn btn-sm btn-warning btnper" onclick="showUser(2,0)">
												<i class="icon-fire  bigger-110"></i>
												<span class="bigger-110 no-text-shadow">Técnicos</span>
											</button>
											<button class="btn btn-sm btn-warning btnper" onclick="showUser(3,0)">
												<i class="icon-fire  bigger-110"></i>
												<span class="bigger-110 no-text-shadow">Talentos</span>
											</button>
											<button class="btn btn-sm btn-warning btnper" onclick="showUser(4,0)">
												<i class="icon-fire  bigger-110"></i>
												<span class="bigger-110 no-text-shadow">Oficios</span>
											</button>
											<button class="btn btn-sm btn-warning btnper" onclick="showUser(5,0)">
												<i class="icon-fire  bigger-110"></i>
												<span class="bigger-110 no-text-shadow">Ocupación</span>
											</button>
											
											
								</div>
								
								

								

<div class="space-10"></div>


														<div id="filtroesppro" class="form-group filtroesp">
															<label for="profesion"><b>Profesionales: 	</b></label>

															<div class="bloquefiltro">
																<select id="profesion" name="info0" onchange="showUser(1,this.value)" class="chosen-select" data-placeholder="Selecciona tu área..." >
																<?php

$query = "SELECT id,masculino FROM listaprofesiones";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>"  ><?php if($row[0]==1){echo("Mostrar todos");}else{echo $row[1];} ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														<div id="filtroesptec" class="form-group filtroesp">
															<label for="profesion"><b>Técnicos: </b></label>

															<div class="bloquefiltro">
																<select id="profesion" name="info0" onchange="showUser(2,this.value)" class="chosen-select" data-placeholder="Selecciona tu área..." >
																<?php

$query = "SELECT id,masculino FROM listatecnicos";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>"  ><?php if($row[0]==1){echo("Mostrar todos");}else{echo $row[1];} ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														
														<div id="filtroesptal" class="form-group filtroesp">
															<label for="profesion"><b>Talentos: </b></label>

															<div class="bloquefiltro">
																<select id="profesion" name="info0" onchange="showUser(3,this.value)" class="chosen-select" data-placeholder="Selecciona tu área..." >
																<?php

$query = "SELECT id,masculino FROM listatalentos";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>"  ><?php if($row[0]==1){echo("Mostrar todos");}else{echo $row[1];} ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														
														<div id="filtroespofi" class="form-group filtroesp">
															<label for="profesion"><b>Oficios: </b></label>

															<div class="bloquefiltro">
																<select id="profesion" name="info0" onchange="showUser(4,this.value)" class="chosen-select" data-placeholder="Selecciona tu oficio..." >
																<?php

$query = "SELECT id,masculino FROM listaoficios";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>"  ><?php if($row[0]==1){echo("Mostrar todos");}else{echo $row[1];} ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														<div id="filtroespocu" class="form-group filtroesp">
															<label for="profesion"><b>Ocupación: </b></label>

															<div class="bloquefiltro">
																<select id="profesion" name="info0" onchange="showUser(5,this.value)" class="chosen-select" data-placeholder="Selecciona tu ocupación..." >
																<?php

$query = "SELECT id,masculino FROM listaocupacion";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>"  ><?php if($row[0]==1){echo("Mostrar todos");}else{echo $row[1];} ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
								
								
									</h4>
									
									
									<div id="txtHint"></div>	
									<div class="social">
		<ul>
			<li><a href="cuentaleoggun" class="oggun" data-toggle="modal" data-target="#myModal" ><i class="glyphicon glyphicon-envelope"></i> Cuentale a oggun</a></li>
		</ul>
	</div>	

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cuentale a oggun</h4>
      </div>
      <div class="modal-body">
        <form role="form">
    <div class="form-group">
      <label for="comment">Cuentanós:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
  </form>

 <p id="cargando" hidden> Enviando... </p>
 <div id="m"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="enviar">Enviar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hacerred" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Red</h4>
      </div>
      <div class="modal-body">
      		<div class="form-group">
			  <label for="usr">Nombre de la Red:</label>
			  <input type="text" class="form-control" id="nombrered">
			  <p id="cargandored"></p>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button"id="crearred"class="btn btn-primary">Crear Red</button>
      </div>
    </div>
  </div>
</div>
										

										
									
									
									
									
									
									
									
								</div><!-- PAGE CONTENT ENDS -->
							
								
								<!-- InstanceEndEditable -->
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		





<?php //} ?>




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
				
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body',html:true});
			
				
			
			});
			
			function cargarPopup(){
			jQuery(function($) {
			$('[data-rel=popover]').popover({container:'body',html:true});
			$('[data-rel=tooltip]').tooltip({container:'body'});
			});
			}
			
			function cargarGaleria(){
			jQuery(function($) {
			$('.flexslider').flexslider({
			animation: "slide"
			});
			});
			}

			 $("#enviar").click(function(){
			 	var comentario = $("#comment").val();
			 	if(comentario != ""){
			 		
			 		 $.ajax({
                url: 'correoprueba.php',
                method: 'POST',
                data: {comentario: comentario},
                beforeSend: function () {
                        $("#cargando").show(500);
              },
                success:  function (msg) {
                      $("#cargando").hide(500); 
                      $("#comment").val("");
                      if(msg== "1"){
                      	
                    $("#m").html("Se envio correctamente ");
      }else{
      					
                    $("#m").html("No se envio correctamente ");
      }

                }
        });

			 	}else{
			 		 $("#m").html("El mensaje esta vacio");
			 	}


			 });
			 $("#crearred").click(function(){
			 	var nombre = $("#nombrered").val();
			 	if(nombre != ""){
			 		
			 		 $.ajax({
                url: 'crearred.php',
                method: 'POST',
                data: {crear: nombre},
                beforeSend: function () {
                        $("#cargandored").show(500);
              },
                success:  function (msg) {
                      $("#nombrered").val("");
                      if(msg== "1"){
                      	
                    $("#cargandored").html("Se creo correctamente ");
      }else{
      					
                    $("#cargandored").html("No se creo correctamente ");
      }

                }
        });

			 	}else{
			 		 $("#cargandored").html("El nombre esta vacio");
			 	}


			 });

			 
  
  
 






		</script>
		
		<!-- page specific plugin scripts -->
		
		<script type="text/javascript" src="../js/jquery.flexslider.js"></script>
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
		<script src="popover.js"></script>

		<!-- ace scripts -->

		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

</body>
<!-- InstanceEnd --></html>
