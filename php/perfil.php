<!-- InstanceBegin template="/Templates/generalace.dwt.php" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html>
<head>
<?php
session_start ();
require("info.php"); 
if (isset($_GET['usuario'])){
include('buscar.php');
$propio=false;//Si el perfil es propio
$usuarioo = $_GET['usuario'];
}else{//Ningun perfil seleccionado no existe informacion ni perfil
header("location:index.php");
$propio=false;
$perfil=0;
$info0="";
$info1="";
$info2="";
$nombres="";
$apellidos="";
$correo="";
$fotoprincipal="../imgusers/default.jpg";
$idvideoprincipal=1;
$nacimiento="";
$origen="";
$residencia="";

}
if (isset($_SESSION['idusuario'])){//se verifica si es cuenta propia
	if($_SESSION['idusuario']==$_GET['usuario']){
		$propio=true;
	}else{$propio=false;}
}?>
<meta  charset="utf-8" />
<meta name="keywords" content="oggun, red social oggun, red laboral oggun, oggun web, oggun red" />

<meta name="description" content="Red social laboral con identidad." />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Perfil - <?php echo($nombres." ".$apellidos); ?></title>
<!-- InstanceEndEditable -->
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="shortcut icon" href="oggunfavicon.ico">
<!-- basic styles -->


    
	
	
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script>
	
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};



function initialize() {
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  var pacContainerInitialized = false; 
                        $('#autocomplete').keypress(function() { 
                                if (!pacContainerInitialized) { 
                                        $('.pac-container').css('z-index', '99999'); 
                                        pacContainerInitialized = true; 
                                } 
                        }); 
  
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
      { types: ['geocode'] });
  // When the user selects an address from the dropdown,
  
  
}

function initialize2() {
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  var pacContainerInitialized = false; 
                        $('#autocomplete2').keypress(function() { 
                                if (!pacContainerInitialized) { 
                                        $('.pac-container').css('z-index', '99999'); 
                                        pacContainerInitialized = true; 
                                } 
                        }); 
  
  autocomplete2 = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('autocomplete2')),
      { types: ['geocode'] });
  // When the user selects an address from the dropdown,
  
}

function initialize3() {
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  var pacContainerInitialized = false; 
                        $('#ubicacionvideo').keypress(function() { 
                                if (!pacContainerInitialized) { 
                                        $('.pac-container').css('z-index', '99999'); 
                                        pacContainerInitialized = true; 
                                } 
                        }); 
  
  autocomplete2 = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('ubicacionvideo')),
      { types: ['geocode'] });
  // When the user selects an address from the dropdown,
  
}



// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
      autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
          geolocation));
    });
  }
}
function geolocate2() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
      autocomplete2.setBounds(new google.maps.LatLngBounds(geolocation,
          geolocation));
    });
  }
}
// [END region_geolocation]

    </script>

	<script>
function actualizarVideoPerfil(tipo)
{

if(tipo==1){
idvideo=document.getElementById('presentacion').value;
}else{
idvideo=document.getElementById('crowd').value;
}

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp3=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp3=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp3.onreadystatechange=function()
  {
  if (xmlhttp3.readyState==4 && xmlhttp3.status==200)
    {
    document.getElementById("actualizavideoperfilresultado").innerHTML=xmlhttp3.responseText;
	if(tipo==2){
	window.location.reload(); 
	}
    }
  }
xmlhttp3.open("GET","actualizavideoperfil.php?idvideo="+idvideo+"&tipo="+tipo,true);
xmlhttp3.send();
}

function eliminaVideo(idvideo,confirmar){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp4=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp4=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp4.onreadystatechange=function()
  {
  if (xmlhttp4.readyState==4 && xmlhttp4.status==200)
    {
    document.getElementById("casilla"+idvideo).innerHTML=xmlhttp4.responseText;
	if(confirmar==1){
	window.location.reload(); 
	}
    }
  }
  xmlhttp4.open("GET","eliminarfotovideo.php?idvideo="+idvideo+"&confirmar="+confirmar,true);
xmlhttp4.send();
}

</script>
	
    <style>
      #locationField, #controls {
        position: relative;
        width: 100%;

      }
      #autocomplete,#autocomplete2 {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
      }
      .label {
        text-align: right;
        font-weight: bold;
      }
      
      #locationField {
        height: 20px;
        margin-bottom: 2px;
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
 
	
	
    .social ul li #oggun {background: #d95232;  }
	.social ul li a:hover {
		padding: 10px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */

	}
    </style>
	

		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		<link rel="stylesheet" href="../assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="../assets/css/chosen.css" />
		

		<link rel="stylesheet" href="../css/video.css" />
		<link rel="stylesheet" type="text/css" href="popover.css">
		<script src="../js/videop.js"></script>
		<!--Plantilla video-->
		<link rel="stylesheet" href="../css/video-js.css" type="text/css" />
		<script src="../js/video.js"></script>
		<script src="../js/javainicio.js"></script>
		<script src="../js/jquery-1.11.3.min"></script>
		
		<link rel="stylesheet" media="screen" type="text/css" href="../css/flexslider.css" />
		
		<!-- fonts -->

		<link rel="stylesheet" href="../assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="../assets/css/ace.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		<link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="../assets/js/ace-extra.min.js"></script>
		
		
		<script type="text/javascript">
		
		videojs.options.flash.swf = "../css/video-js.swf";
		</script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>



<body style class="navbar-fixed skin-1"  >
<?php include("error.php");?>


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
<!--<div class="social">
		<ul>
			<li><a class="oggun" id="oggun" style="cursor:pointer;"><i class="icon-search nav-search-icon "></i>Buscar</a></li>
		</ul>
	</div>	-->

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




		<div class="main-container container" id="main-container" >
				
			<div class="panel panel-default" id="usuariosoggun" >
				  <div class="panel-heading" id="cabecera" >
				   <div class="row">

  <div class="col-lg-6">
  <p>Haga una busqueda por nombre o profesion:</p>
    <div class="input-group">

      <div class="input-group-btn">

        <button type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnbu">Busqueda<span class="caret"></span></button>
        <ul class="dropdown-menu" >
          <li><label class="radio-inline" style="margin-left: 10px;  width: 90%; padding-left: 30px;"><input type="radio" name="buradio" value="1">Profesiones</label></li>
          <li  class="divider"></li>
          <li><label class="radio-inline" style="margin-left: 10px; width: 90%; padding-left: 30px; "><input type="radio" name="buradio" value="2">Nombre</label></li>
        </ul>
      </div><!-- /btn-group -->
      
      </i><input type="text" id="cajabusqueda"class="form-control" aria-label="..." >
	  	
	
    </div><!-- /input-group -->
        
  </div><!-- /.col-lg-6 -->
  
  </div><button type="button" class="close" aria-label="Close" id="close" hidden><span aria-hidden="true">&times;</span></button> 
  <br>

				  <div class="panel-body" id="txtHint" style="background:#F2F2F2; display:none;"  >
				  </div>

				</div>
				</div>
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner" >

				
				<div class="main-content">
					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
							<div id="ingreso" ><?php include('login.html');?></div>
								<!-- PAGE CONTENT BEGINS -->
								<!-- InstanceBeginEditable name="contenido" -->
								
								<div class="page-header">
								<h1 class="dark-orange">
								<?php if($propio){echo("Mi ");}else{echo("Explorar ");}?>
								Perfil 
								
								</h1>
								</div><!-- /.page-header -->


								<div class="row">
									
									<div class="col-sm-4">
									<div class="widget-box">
									<div class="widget-header widget-header-flat <?php echo($info3);?>">
									<h3 >
											<span class="col-xs-12"> <?php echo($nombres." ".$apellidos);?> </span><!-- /span -->

											
										</h3>
										
										
										
										
										
										
									</div>
									<div class="widget-body">
												<div class="widget-main">
												<div class="center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="" alt="Perfil" src="<?php echo($fotoprincipal);?>" width="255px" height="300px" style="display: block; cursor:pointer; max-height:100%; max-width:100%;" onclick="abrirgaleria('<?php echo($fotoprincipal);?>',<?php echo($idusuario);?>,<?php echo($perfil);?>)"></img>
													<h4 >
													<?php if($propio){

if($_SESSION['fotoprincipal']!="../imgusers/default.jpg"){
echo('
											<span class="'.$info3.'  ">
									<i class="icon-edit "></i>
									<a href="#modal-form4" role="button" onclick="initCrop()" class="'.$info3.'" data-toggle="modal"> Recortar </a>
								</span>');

}

echo('
											<span class="'.$info3.'  ">
									<i class="icon-exchange "></i>
									<a href="#modal-form" role="button" class="'.$info3.'" data-toggle="modal">Cambiar  </a>
								</span>
								<br><hr>
								<span class="'.$info3.'  ">
									<i class="icon-upload "></i>
									<a href="#modal-forms" role="button" class="'.$info3.'" data-toggle="modal">Subir Foto</a>
								</span>
								
								
											');



 }
	echo('						<span class="'.$info3.'  ">
									<i class="icon-picture "></i>
									<a href="#" onclick="abrirgaleria(\''.$fotoprincipal.'\','.$idusuario.','.$perfil.')" role="button" class="'.$info3.'" data-toggle="modal">Galería  </a>
								</span>');
								
				
	if(!$propio&&isset($_SESSION['idusuario'])){
	
	$resultadoa = mysqli_query($conexion,"SELECT id FROM amigos WHERE idusuario = '$_SESSION[idusuario]'  AND idamigo = '$idusuario'");
	$filaa = mysqli_fetch_row($resultadoa);
	$num_results = mysqli_num_rows($resultadoa); 
	if ($num_results > 0){ echo('						<span id="cajared" class="'.$info3.'  ">
									<i class="icon-group "></i>
									 En mis contactos
								</span>');
								}else{
								echo('						<span id="cajared" class="'.$info3.'  ">
									<i class="icon-plus-sign-alt "></i>
									<a href="#" onclick="hacerRed('.$idusuario.')" role="button" class="'.$info3.'" data-toggle="modal">Seguir Contacto</a>
								</span>');
								}
								}
								
								?>
								
												</h4></span>

												<div class="space-4"></div>

												<!--<div class="width-80 label <?php echo($info3);?> label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<p  class="user-title-label" >
															<i class="icon-circle light-green middle"></i>
															&nbsp;
															<span class="<?php echo($info3);?>"><?php echo($nombres." ".$apellidos);?></span>
														</p>

													</div>
												</div>-->
											</div>

											
										</div>
										
										
												
												</div>
									</div>
									
									</div>
									
									<div class="col-sm-12">
									<div class="widget-box">
									<div class="widget-header widget-header-flat <?php echo($info3);?>">
									<h3 ><span class="col-xs-12"> Mensajería</span><!-- /span --></h3>
									</div>
									<div class="widget-body">
												<div class="widget-main  panel-group">
												<?php if(!$propio&&isset($_SESSION['idusuario'])){ ?>
												<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle miacordeon" data-toggle="collapse" data-parent="#accordion3" href="#collapseFive">
															<i class="bigger-110 icon-angle-right" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
															&nbsp; Escribir mensaje
														</a>
													</h4>
												</div>

												<div class="panel-collapse  " id="collapseFive" style="height: 0px;">
													<div class="panel-body" id="cajamsj<?php echo($idusuario); ?>">
														
														<form onsubmit=" enviarMensaje(<?php echo($idusuario); ?>); return false;">
												<textarea placeholder="Ej: Hola me gustaría contactarme contigo." id="escribemsj<?php echo($idusuario); ?>" name="escribemsj" class="autosize-transition form-control" maxlength="255" style="overflow: hidden; word-wrap: break-word; resize: none; height: 30px; margin-left: 0px; margin-right: -1.34375px;" required ></textarea>
												
												<div class="space-4"></div>
												<div class="row">
												<div class="col-sm-6">
												<div class="checkbox">
													<label>
														<input name="privado" id="checkprivado<?php echo($idusuario); ?>" type="checkbox" value="publico" class="ace">
														<span class="lbl" data-rel="tooltip" data-placement="bottom" data-original-title="El mensaje será visto por cualquier persona." >&nbsp; ¿Público?</span>
													</label>
												</div>
												</div>
												<div class="col-sm-6">
												<button type="submit"  class="btn btn-sm btn-warning">
													<i class="icon-ok"></i>
													Enviar
												</button>
												</div>
														
												</div>
												</form>
												</div>
											</div>
											</div>

											<?php } ?>
												<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed miacordeon" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
															<i class="bigger-110 icon-angle-right" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
															&nbsp; Ver mensajes públicos
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse " id="collapseSix" style="height: 0px;">
													<div class="panel-body">
														<ul  class="item-list ">
														<?php 
														
	$resultadoamsj = mysqli_query($conexion,"SELECT mensajes.id,idremitente,nombres,apellidos,mensaje FROM mensajes INNER JOIN usuarios ON usuarios.id= mensajes.idremitente  WHERE mensajes.idusuario='$idusuario' AND mensajes.publico=1 ");
														
	
	while($filaamsj = mysqli_fetch_row($resultadoamsj))
	{?>
	
																<li id="listamsj<?php echo($filaamsj[0]); ?>" class="item-orange clearfix">
																	<label class="inline">
																		<span class="lbl"> <?php echo("<a href=\"perfil.php?usuario=".$filaamsj[1]."\">".$filaamsj[2]." ".$filaamsj[3]."</a>");?> <br> <?php echo($filaamsj[4]); ?></span>
																	</label>
																	
 <?php if($propio){ ?>
																	<div class="pull-right action-buttons">
																		<a href="javascript: void(0)" onclick="eliminarMsj(<?php echo($filaamsj[0]); ?>)" class="red">
																			<i class="icon-trash bigger-130"></i>
																		</a>
																	</div>
																	<?php } ?>
																	
																</li>
	<?php } ?>
														
													</ul>
														
													</div>
												</div>
												</div>
												</div>
									</div>
									</div>
									<?php if($propio == true){ ?>
									<div class="panel panel-default">
								  <div class="widget-header widget-header-flat <?php echo($info3);?>">
									<h3 ><span class="col-xs-12"> Estado </span><!-- /span --></h3>
									</div>
								  <div class="panel-body">
								    <div class="form-group">
									  <textarea class="form-control" placeholder="Escribe un estado"  rows="5" id="comment"></textarea><br>

									  <button type="submit"  class="btn btn-sm btn-warning btn-sm" id="publicar">
													<i class="icon-ok"></i>
													Publicar
									  </button>
									 	 <p id="cargando" ></p>
									   	<p id="mensaje" hidden></p>
									</div>
								  </div>
								</div>

								<?php } ?>
									</div>
									
									
									</div>
									<div class="col-sm-4">
									<div class="widget-box">
									<div class="widget-header widget-header-flat <?php echo($info3);?>">
										<h3 >
											<span class="col-xs-6" > Información </span><!-- /span -->

											<?php if($propio){
echo('<span class="col-xs-6">
											<span class="'.$info3.' smaller-80 pull-right">
									<i class="icon-book "></i>
									<a href="#modal-form2" onclick="verOtro('.$_SESSION['perfil'].')" role="button" class="'.$info3.'" data-toggle="modal"> Editar </a>
								</span>
											</span><!-- /span -->');

}?>
										</h3>
										</div>
										<div class="widget-body">
												<div class="widget-main">
												
												

										<div id="accordion" class=" panel-group">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle miacordeon" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
															<i class="bigger-110 icon-angle-down" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
															&nbsp;Básica
														</a>
													</h4>
												</div>

												<div class="panel-collapse" id="collapseOne" style="height: auto;">
													<div class="panel-body">
														<p><?php echo("<b>Nombre Completo:</b> ".$nombres." ".$apellidos);?></p>
														<p><?php echo("<b>Correo:</b> ".$correo);?></p>
														<p><?php if($sexo==0){echo("<b>Sexo:</b> Femenino");}else{
														echo("<b>Sexo:</b> Masculino");}?></p>
														<p><?php echo("<b>Fecha nacimiento:</b> ".$nacimiento);?></p>
														<p><?php echo("<b>Origen:</b> ".$origen);?></p>
														<p><?php echo("<b>Residencia:</b> ".$residencia);?></p>
														<p><?php if($facebook!=""){echo("<b>Facebook:</b> <a target=\"_blank\" href=\"".$facebook."\">".$facebook." </a> ");}?></p>
														<p><?php if($twitter!=""){echo("<b>Twitter:</b>  <a target=\"_blank\" href=\"".$twitter."\">".$twitter."</a>");}?></p>
													</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle miacordeon" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
															<i class="bigger-110 icon-angle-right" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
															&nbsp;
															
															<?php switch($perfil){case 1:echo("Profesión y estudios");
															$query = "SELECT nombre,nombre2 FROM listaotrasprofesiones WHERE idusuario=$idusuario";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$valorotro=$row[0];
$valorotro2=$row[1];
															break;case 2:echo("Técnico en");
															$query = "SELECT nombre FROM listaotrostecnicos WHERE idusuario=$idusuario";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$valorotro=$row[0];
															break;case 3:echo("Talento");
															$query = "SELECT nombre FROM listaotrostalentos WHERE idusuario=$idusuario";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$valorotro=$row[0];
															break;case 4:echo("Oficio");
															$query = "SELECT nombre FROM listaotrosoficios WHERE idusuario=$idusuario";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$valorotro=$row[0];
															break;
															case 5:echo("Ocupacion");
															$query = "SELECT nombre FROM listaotrosocupacion WHERE idusuario=$idusuario";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$valorotro=$row[0];
															break;
															default:echo("Laboral");break;}?>
														</a>
													</h4>
												</div>
												

												<div class="panel-collapse in" id="collapseTwo" style="height: 0px;">
													<div class="panel-body">
														<p><?php if($perfil==1){echo("<b>Título Principal: </b>".$info0." ");}else{echo("<p>".$info0."</p>");}
														if($info0=="Otros"){
														echo("".$valorotro."");
														}
														?></p>
														
														<p><?php if($perfil==1){
														$query = "SELECT perfil2,profesion2,perfil3,profesion3 from profesionales WHERE idusuario = $idusuario ";
														$result = mysqli_query($conexion,$query);
														$row = mysqli_fetch_row($result);
														$perfil2=$row[0];
														$profesion2=$row[1];
														$perfil3=$row[2];
														$profesion3=$row[3];
														switch ($perfil2) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM profesionales AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
														switch ($perfil3) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaprofesiones AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																	}
																}																
													    
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM profesionales AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");

																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaocupacion AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
														


														
														
														} if($perfil==2){
															$query = "SELECT perfil2,profesion2,perfil3,profesion3 from tecnicos WHERE idusuario = $idusuario ";
														$result = mysqli_query($conexion,$query);
														$row = mysqli_fetch_row($result);
														$perfil2=$row[0];
														$profesion2=$row[1];
														$perfil3 = $row[2];
														$profesion3=$row[3];	
														switch ($perfil2) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM tecnicos AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
														switch ($perfil3) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaprofesiones AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																	}
																}																
													    
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM tecnicos AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");

																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaocupacion AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
															} if($perfil==3){
																$query = "SELECT perfil2,profesion2,perfil3,profesion3 from talentos WHERE idusuario = $idusuario ";
														$result = mysqli_query($conexion,$query);
														$row = mysqli_fetch_row($result);
														$perfil2=$row[0];
														$profesion2=$row[1];
														$perfil3 = $row[2];
														$profesion3=$row[3];
														switch ($perfil2) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM talentos  AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM talentos  AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM talentos  AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM talentos  AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
														switch ($perfil3) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaprofesiones AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																	}
																}																
													    
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM talentos AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");

																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaocupacion AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
																} if($perfil==4){
																$query = "SELECT perfil2,profesion2,perfil3,profesion3 from oficios WHERE idusuario = $idusuario ";
														$result = mysqli_query($conexion,$query);
														$row = mysqli_fetch_row($result);
														$perfil2=$row[0];
														$profesion2=$row[1];
														$perfil3=$row[2];
														$profesion3=$row[3];
														switch ($perfil2) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM oficios  AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM oficios  AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM oficios  AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM oficios  AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
														switch ($perfil3) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaprofesiones AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																	}
																}																
													    
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM oficios AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");

																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaocupacion AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
																} if($perfil==5){
																$query = "SELECT perfil2,profesion2,perfil3,profesion3 from ocupacion WHERE idusuario = $idusuario ";
														$result = mysqli_query($conexion,$query);
														$row = mysqli_fetch_row($result);
														$perfil2=$row[0];
														$profesion2=$row[1];
														$perfil3=$row[2];
														$profesion3=$row[3];
														switch ($perfil2) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM ocupacion  AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM ocupacion  AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM ocupacion  AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM ocupacion  AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segudo Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Segundo Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
														switch ($perfil3) {
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaprofesiones AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																	}
																}																
													    
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM ocupacion AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");

																}
													    
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																	break;
																	case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaocupacion AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$masculino=$profe[0];
																	$femenino=$profe[1];
																	if($sexo=0){
																		$info5=$femenino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }else{
													    	$info5=$masculino;
																	if($info5!="&nbsp;"){
																	echo("<p><b>Tercer Titulo: </b>".$info5." ");
																}
													    }
																		break;
															
															default:
																# code...
																break;
														}
																}?>
														
													</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed miacordeon" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
															<i class="bigger-110 icon-angle-right" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
															&nbsp;Experiencia
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse " id="collapseThree" style="height: 0px;">
													<div class="panel-body">
														<p><?php if($perfil==1){echo($info2);}else{echo($info1);}?></p>
														
													</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed miacordeon" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
															<i class="bigger-110 icon-angle-right" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
															&nbsp;Siguiendo
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse " id="collapseFour" style="height: 0px;">
													<div class="panel-body">
													<ul  class="item-list ">
														<?php 
														
	$resultadoam = mysqli_query($conexion,"SELECT idamigo,nombres,apellidos, CASE perfil WHEN '1' THEN (SELECT (CASE sexo WHEN '0' THEN femenino ELSE masculino END) FROM profesionales,listaprofesiones WHERE profesionales.idusuario=amigos.idamigo AND listaprofesiones.id=profesionales.profesion ) WHEN '2' THEN (SELECT masculino FROM tecnicos,listatecnicos WHERE tecnicos.idusuario=amigos.idamigo AND listatecnicos.id=tecnicos.area ) WHEN '3' THEN (SELECT (CASE sexo WHEN '0' THEN femenino ELSE masculino END) FROM talentos,listatalentos WHERE talentos.idusuario=amigos.idamigo AND listatalentos.id=talentos.talento) WHEN '4' THEN (SELECT (CASE sexo WHEN '0' THEN femenino ELSE masculino END) FROM oficios,listaoficios WHERE oficios.idusuario=amigos.idamigo AND listaoficios.id=oficios.oficio ) WHEN '5' THEN (SELECT (CASE sexo WHEN '0' THEN femenino ELSE masculino END) FROM ocupacion,listaocupacion WHERE ocupacion.idusuario=amigos.idamigo AND listaocupacion.id=ocupacion.ocupacion )  ELSE ' ' END as 'ocupacion' FROM amigos INNER JOIN usuarios ON usuarios.id= amigos.idamigo INNER JOIN personal ON personal.idusuario= amigos.idamigo WHERE amigos.idusuario='$idusuario'");
														
	
	while($filaam = mysqli_fetch_row($resultadoam))
	{?>
	
																<li id="cajared<?php echo($filaam[0]); ?>" class="item-orange clearfix">
																	<label class="inline">
																		<span class="lbl"> <?php echo("<a href=\"perfil.php?usuario=".$filaam[0]."\">".$filaam[1]." ".$filaam[2]."</a>");?> <br> <?php echo($filaam[3]); ?></span>
																	</label>
																	
 <?php if($propio){ ?>
																	<div class="pull-right action-buttons">
																		<a href="javascript: void(0)" onclick="eliminarRed(<?php echo($filaam[0]); ?>)" class="red">
																			<i class="icon-trash bigger-130"></i>
																		</a>
																	</div>
																	<?php } ?>
																	
																</li>
	<?php } ?>
														
													</ul>
													</div>
												</div>

												
											
											
											
										</div>
										<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed miacordeon" data-toggle="collapse" data-parent="#accordion2" href="#collapsefive">
															<i class="bigger-110 icon-angle-right" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
															&nbsp;Muro
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse " id="collapsefive" style="height: 0px;">
													<div class="panel-body">
														<ul  class="item-list ">
														<?php 
	$resultadousu = mysqli_query($conexion,"SELECT nombres,apellidos FROM usuarios WHERE id = $usuarioo");			
	$usu = 	mysqli_fetch_row($resultadousu);									
	$resultadoam = mysqli_query($conexion,"SELECT id,estado,idusuario FROM estado WHERE idusuario = $usuarioo ORDER BY fechaestado DESC");
	while($filaam = mysqli_fetch_row($resultadoam))
	{?>
	
																<li id="cajaestado<?php echo($filaam[0]); ?>" class="item-orange clearfix">
																	<label class="inline">
																		<span class="lbl"> <?php echo("<a href=\"perfil.php?usuario=".$filaam[2]."\">".$usu[0]." ".$usu[1]."</a>");?> <br> <?php echo($filaam[1]); ?></span>
																	</label>
																	
 <?php if($propio){ ?>
																	<div class="pull-right action-buttons">
																		<a href="javascript: void(0)" onclick="Eliminarestado(<?php echo($filaam[0]); ?>)" class="red">
																			<i class="icon-trash bigger-130"></i>
																		</a>
																	</div>
																	<?php } ?>
																	
																</li>
	<?php } ?>
														
													</ul>
														
													</div>
												</div>
											</div>
											</div>
									</div>
									</div>

									</div>

									</div>
									
									
									<div class="col-sm-4">
									<div class="widget-box" >
									<div class="widget-header widget-header-flat <?php echo($info3);?>">
									<h3 >
											<span class="col-xs-2"> Vídeos </span><!-- /span -->

											
											
											<?php if($propio){
echo('<span class="col-xs-6">
											<span class="'.$info3.' smaller-80 ">
									<i class="icon-cloud-upload "></i>
									<a href="#modal-form3" role="button" class="'.$info3.'" data-toggle="modal"> Subir Vídeo </a>
								</span>
											</span><!-- /span -->');

}?>
										</h3>
									</div>
									<div class="widget-body">
									
									<?php if($propio){ ?>	
														<div class="form-group" style="margin: 20px;">
															<label for="presentacion" class="pull-left" style="margin-right: 10px;">Vídeo Presentación:   </label>

															<div style="float: left;margin-right: 20px;">
																<select id="presentacion" onchange="actualizarVideoPerfil(1)" name="presentacion" class="chosen-select" data-placeholder="Selecciona tu video crowd..." >
																
<option value="1" <?php if(1==$idvideoprincipal){echo("selected");}?> > Ninguno     </option>
																
																<?php

$query = "SELECT id,titulo FROM videos WHERE idusuario=".$idusuario." ";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if($row[0]==$idvideoprincipal){echo("selected");}?> ><?php echo $row[1]; ?>     </option>
<?php } ?>
																	

																</select>
															</div>
															
															<label for="crowd" class="pull-left" style="margin-right: 10px;">Vídeo para el Crowd:      </label>

															<div>
																<select id="crowd" onchange="actualizarVideoPerfil(2)" name="crowd" class="chosen-select" data-placeholder="Selecciona tu video crowd..." >
																
<option value="1" <?php if(1==$idvideocrowd){echo("selected");}?> > Ninguno     </option>
																
																<?php

$query = "SELECT id,titulo FROM videos WHERE idusuario=".$idusuario." ";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if($row[0]==$idvideocrowd){echo("selected");}?> ><?php echo $row[1]; ?>     </option>
<?php } ?>
																	

																</select>
															</div>
															
															<div id="actualizavideoperfilresultado" style="color:green;"> </div>
															
														</div>
														<?php } ?>
									
												<div class="widget-main">
		<div class="row">	
		
		
		<?php 
		
		
		$resultadov = mysqli_query($conexion,"SELECT titulo,video,id,puntuacion FROM videos WHERE idusuario=".$idusuario." AND id=".$idvideoprincipal." UNION  SELECT titulo,video,id,puntuacion FROM videos WHERE idusuario=".$idusuario." AND id=".$idvideocrowd."  UNION SELECT titulo,video,id,puntuacion FROM videos WHERE idusuario=".$idusuario." AND id!=".$idvideocrowd." AND id!=".$idvideoprincipal." ");
		
		while($filav = mysqli_fetch_row($resultadov))
		{
		?>
		<div class="col-sm-12" style="position: relative; max-height: 280px; overflow: hidden;">
		<h3 style="/*height:72px; overflow:hidden;*/" >   <?php if($filav[2]==$idvideocrowd){echo(' <img src="../img/oggunlogoslimplay.png" height="20px">'.' ');}else if($filav[2]==$idvideoprincipal){echo(' <i class="icon-youtube-play"></i>'.' ');}; echo($filav[0]); ?><?php if($filav[3]>=50){echo('<small style="color:red;"> ¡Video caliente! '.$filav[3].'°C  </small>');}else if($filav[3]>0|| $filav[2]==$idvideocrowd){echo('<small style="color:blue;"> Video frío.. '.$filav[3].'°C </small>');}?></h3>
		<div style="position:relative; height:100%; width:100%;">
		<iframe src="//www.youtube.com/embed/<?php echo($filav[1]); ?>?autoplay=0&showinfo=0&controls=0&wmode=transparent" frameborder="0" allowfullscreen
style="width: 100%;" 
 ></iframe>
		
		<div class="btn btn-inverse" style="position: absolute; height: 100%; width: 100%; margin:0px; top:0px;left:0px; opacity:0.2; z-index:10; " onclick="abrirvideo('<?php echo($filav[1]); ?>',<?php echo($filav[2]); ?>,<?php echo($idusuario); ?>,<?php echo($perfil); ?>)"  > </div>
		</div>	
		<?php if($propio){?>
		<div id="casilla<?php echo($filav[2]); ?>">
		<button class="btn btn-minier" onclick="eliminaVideo(<?php echo($filav[2]); ?>,0)" style="    margin: 5px auto;    display: block;    border-radius: 20px;">Eliminar</button>
		</div>
		
			<?php } ?>
		</div>
		
		
		<?php
		}
		?>
		
		
		
		
		
		
		</div><!--Row-->
		
		
												
												
												
												</div>
									</div>
									</div>	
									</div>
									</div>
									<hr>
								
							
								
								
								<div id="modal-form" class="modal" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="dark-orange bigger"><img src="../img/oggunlogoslim.png" height="30px"> Cambia tu foto de portada</h4>
											</div>
											<div class="modal-body overflow-visible">
												<div class="row">
													<div class="col-xs-12 ">
														<div class="space"></div>
														<div style="width:100%"><?php include('sube.php');?></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div id="modal-forms" class="modal" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="dark-orange bigger"><img src="../img/oggunlogoslim.png" height="30px"> Sube una foto</h4>
											</div>
											<div class="modal-body overflow-visible">
												<div class="row">
													<div class="col-xs-12 ">
														<div class="space"></div>
														<div style="width:100%"><?php include('subefoto.php');?></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div id="modal-form4" class="modal" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content" style=" height: 650px;">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="dark-orange bigger"><img src="../img/oggunlogoslim.png" height="30px"> Recorta tu foto de portada</h4>
											</div>

											<div class="modal-body overflow-visible" style="height:500px!important;">
												<div class="row">
													<div class="col-xs-12 ">
														

														
														<div style="width:100%">


<?php include('crop.php');?>



</div>
														
													</div>

													
												</div>
											</div>

											
										</div>
									</div>
								</div>
								
								<?php if($propio){?>
								<div id="modal-form2" class="modal" tabindex="-1">
									
									<div class="modal-dialog">
										<div class="modal-content">
										<form method="post" action="editar.php">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="dark-orange bigger"><img src="../img/oggunlogoslim.png" height="30px"> Completa tu información</h4>
											</div>

											
											
											
											
											<div class="modal-body overflow-visible">
											
											<div class="row">
											<div class="col-xs-6 ">			
													<label for="nombres">Nombres</label>
													<input id="nombres" class="fullwidth" name="nombres" placeholder="Nombres" type="text" value="<?php echo($nombres);?>" maxlength="50" required></input>
											</div>
											<div class="col-xs-6 ">			
													<label for="apellidos">Apellidos</label>
													<input id="apellidos" class="fullwidth" name="apellidos" placeholder="Apellidos" type="text" value="<?php echo($apellidos);?>" maxlength="50" required></input>
											</div>
											</div>
											<div class="space-10"></div>
												<div class="row">
													<div class="col-xs-12 ">
													<div>
													<label >Sexo &nbsp;</label>
													<input type="radio" class="ace" name="sexo" value="0" id="femeninoe" required="required" <?php if($sexo==0){echo('checked');} ?> >
													<label class="lbl" for="femeninoe">Femenino</label>
													<input type="radio" class="ace" name="sexo" value="1" id="masculinoe" <?php if($sexo==1){echo('checked');} ?> >
													<label class="lbl" for="masculinoe">Masculino</label>
													</div>
													<div class="space-10"></div>
													<div>
															<label for="form-field-mask-1">
																Fecha Nacimiento
																<small class="text-success">Año-Mes-Día </small>
															</label>

															
																
																<span class="block input-icon input-icon-right">
																															<input class="form-control input-mask-date" type="text" name="nacimiento" placeholder="Ej: 1986-12-31" value="<?php echo($nacimiento);?>" id="form-field-mask-1" data-rel="tooltip" data-placement="bottom" data-original-title="Ejemplo 1986-12-31, Año-Mes-Día" >

															<i class="icon-calendar"></i>
														</span>
																
															
														</div>
													<div class="space-6"></div>
										<div>			
													<label for="autocomplete">Origen</label>

<div id="locationField"  >
				
      <input id="autocomplete" name="origen" placeholder="Ej: Quibdó Colombia"
             onFocus="initialize()" onclick="initialize()" type="text" value="<?php echo($origen);?>"></input>
			 
			 
    </div>			
									</div>	
									<div class="space-10"></div>
									<div>
<label for="autocomplete2">Residencia</label>

<div id="locationField"  >
				
      <input id="autocomplete2" name="residencia" placeholder="Ej: Galerias Bogotá Colombia"
             onFocus="initialize2()" onclick="initialize2()" type="text" value="<?php echo($residencia);?>"></input>
			 
			 
    </div>										
									</div>	
									<div class="space-10"></div>
													
													
													<?php if($perfil==1){ ?>	
														<div class="form-group">
															<label for="profesion">Profesión <small style="color:#444">*Si no encuentras tu profesión da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info0" class="chosen-select" data-placeholder="Selecciona tu profesión..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino,femenino FROM listaprofesiones";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														
										
														
														
														<?php } ?>
														
														<?php if($perfil==2){ ?>	
														<div class="form-group">
															<label for="profesion">Técnico en <small style="color:#444">*Si no encuentras tu área da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info0" class="chosen-select" data-placeholder="Selecciona tu área..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino FROM listatecnicos";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if($row[1]==$info0){echo("selected");}?> ><?php echo $row[1]; ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														<?php } ?>
														
														
														<?php if($perfil==3){ ?>	
														<div class="form-group">
															<label for="profesion">Talento <small style="color:#444">*Si no encuentras tu talento da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info0" class="chosen-select" data-placeholder="Selecciona tu talento..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)">
																<?php

$query = "SELECT id,masculino,femenino FROM listatalentos";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														<?php } ?>
														
														<?php if($perfil==4){ ?>	
														<div class="form-group">
															<label for="profesion">Oficio <small style="color:#444">*Si no encuentras tu oficio da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info0" class="chosen-select" data-placeholder="Selecciona tu oficio..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino,femenino FROM listaoficios";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														
														<?php } ?>
														
														<?php if($perfil==5){ ?>	
														<div class="form-group">
															<label for="profesion">Ocupación <small style="color:#444">*Si no encuentras tu ocupación da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info0" class="chosen-select" data-placeholder="Selecciona tu ocupación..." onchange="verOtro(5)" >
																<?php

$query = "SELECT id,masculino,femenino FROM listaocupacion";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														
														<?php } ?>
														
														<div class="form-group" id="formulariovalorotro" style="display:none;">
															<label for="valorotro">¿Otro?, ¿Cuál?</label>
															<input id="valorotro" maxlength="50" name="valorotro" placeholder="Ej: Pintor"
             type="text" value="<?php if(isset($valorotro)){echo($valorotro);}?>"  ></input>
														</div>
													




													<div class="space-6"></div>


													
													<?php if($propio==true){ ?>	
													 <a style="cursor: pointer;" id="mostrarprofe">Registra o Modifica Segunda Profesion</a>
													 <div id="mostrarprofe2" style="display:none;">

													 		<input  type="radio" class="ace"  name="perfil" value="0" id="perfil0" checked/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si tienes un título profesional"  class="lbl">Ninguno</label>
													 		<input  type="radio" class="ace"  name="perfil" value="1" id="perfil1" />
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si tienes un título profesional"  class="lbl" >Profesional</label>
            
            <input type="radio" class="ace" name="perfil" value="2" id="perfil2"/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si tienes un título técnico o tecnológico"  class="lbl" >Técnico</label>
            
            <input type="radio" class="ace" name="perfil" value="3" id="perfil3"/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si te desempeñas en un arte o talento. Ej: Pintor, Bailarín, Actor, etc."  class="lbl" >Talento</label>
            
            <input type="radio" class="ace" name="perfil" value="4"  id="perfil4" />
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si ejerces un oficio. Ej: Jardinero, Carpintero, Plomero, etc." class="lbl">Oficio</label>
				<input type="radio" class="ace" name="perfil" value="5"  id="perfil5"/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Toda aquella profesión independiente que no esté incluida en las anteriores, Ej: Empresario, Estudiante, Comerciante, Emprendedor, etc." class="lbl">Ocupación</label>
				</div>
														<div class="form-group" id="mprofesionales" style="display: none">
															<label for="profesion2">Segunda Profesión <small style="color:#444">*Si no encuentras tu profesión da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion2" name="info4" class="chosen-select" data-placeholder="Selecciona tu profesión 2..." onchange="verOtro2(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino FROM listaprofesiones";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if($row[1]==$info0){echo("selected");}?> ><?php echo $row[1]; ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														
														<div class="form-group" id="mtecnicos" style="display:none;">
															<label for="profesion">Técnico en <small style="color:#444">*Si no encuentras tu área da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info5" class="chosen-select" data-placeholder="Selecciona tu área..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino FROM listatecnicos";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if($row[1]==$info0){echo("selected");}?> ><?php echo $row[1]; ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>

														<div class="form-group" id="mtalentos" style="display:none;" >
															<label for="profesion">Talento <small style="color:#444">*Si no encuentras tu talento da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info6" class="chosen-select" data-placeholder="Selecciona tu talento..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)">
																<?php

$query = "SELECT id,masculino,femenino FROM listatalentos";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>

														<div class="form-group" id="moficio" style="display:none;">
															<label for="profesion">Oficio <small style="color:#444">*Si no encuentras tu oficio da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info7" class="chosen-select" data-placeholder="Selecciona tu oficio..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino,femenino FROM listaoficios";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>

														<div class="form-group" id="mocupacion" style="display:none;">
															<label for="profesion">Ocupación <small style="color:#444">*Si no encuentras tu ocupación da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info8" class="chosen-select" data-placeholder="Selecciona tu ocupación..." onchange="verOtro(5)" >
																<?php

$query = "SELECT id,masculino,femenino FROM listaocupacion";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														<br>

													<!-- PROFESION 3 -->
													<?php if($perfil == 1){

															$sql = "SELECT perfil2 FROM profesionales WHERE idusuario = ".$_SESSION['idusuario']."";
															$consulta = mysqli_query($conexion,$sql);
															$row = mysqli_fetch_row($consulta);
															$per3 = $row[0];

														}if($perfil == 2){
															$sql = "SELECT perfil2 FROM tecnicos WHERE idusuario = ".$_SESSION['idusuario']."";
															$consulta = mysqli_query($conexion,$sql);
															$row = mysqli_fetch_row($consulta);
															$per3 = $row[0];

														} if($perfil == 3){
															$sql = "SELECT perfil2 FROM talentos WHERE idusuario = ".$_SESSION['idusuario']."";
															$consulta = mysqli_query($conexion,$sql);
															$row = mysqli_fetch_row($consulta);
															$per3 = $row[0];

														}if($perfil == 4){
															$sql = "SELECT perfil2 FROM oficios WHERE idusuario = ".$_SESSION['idusuario']."";
															$consulta = mysqli_query($conexion,$sql);
															$row = mysqli_fetch_row($consulta);
															$per3 = $row[0];

														}if($perfil == 5){
															$sql = "SELECT perfil2 FROM ocupacion WHERE idusuario = ".$_SESSION['idusuario']."";
															$consulta = mysqli_query($conexion,$sql);
															$row = mysqli_fetch_row($consulta);
															$per3 = $row[0];

														} if($per3 != 0){?>

													<a style="cursor: pointer;" id="mostrarprofe3">Registra o Modifica Tercera Profesion</a>
													 <div id="mostrarprofe4" style="display:none;">

													 		<input  type="radio" class="ace"  name="perfil3" value="0" id="perfil0" checked/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si tienes un título profesional"  class="lbl">Ninguno</label>
													 		<input  type="radio" class="ace"  name="perfil3" value="1" id="perfil1" />
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si tienes un título profesional"  class="lbl" >Profesional</label>
            
            <input type="radio" class="ace" name="perfil3" value="2" id="perfil2"/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si tienes un título técnico o tecnológico"  class="lbl" >Técnico</label>
            
            <input type="radio" class="ace" name="perfil3" value="3" id="perfil3"/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si te desempeñas en un arte o talento. Ej: Pintor, Bailarín, Actor, etc."  class="lbl" >Talento</label>
            
            <input type="radio" class="ace" name="perfil3" value="4"  id="perfil4" />
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Si ejerces un oficio. Ej: Jardinero, Carpintero, Plomero, etc." class="lbl">Oficio</label>
				<input type="radio" class="ace" name="perfil3" value="5"  id="perfil5"/>
                <label data-rel="tooltip" data-placement="bottom" data-original-title="Toda aquella profesión independiente que no esté incluida en las anteriores, Ej: Empresario, Estudiante, Comerciante, Emprendedor, etc." class="lbl">Ocupación</label>
				</div>
														<div class="form-group" id="mprofesionales3" style="display: none">
															<label for="profesion3">Tercera Profesión <small style="color:#444">*Si no encuentras tu profesión da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion2" name="info9" class="chosen-select" data-placeholder="Selecciona tu profesión 2..." onchange="verOtro2(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino FROM listaprofesiones";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if($row[1]==$info0){echo("selected");}?> ><?php echo $row[1]; ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>
														
														<div class="form-group" id="mtecnicos3" style="display:none;">
															<label for="profesion">Técnico en <small style="color:#444">*Si no encuentras tu área da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info10" class="chosen-select" data-placeholder="Selecciona tu área..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino FROM listatecnicos";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if($row[1]==$info0){echo("selected");}?> ><?php echo $row[1]; ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>

														<div class="form-group" id="mtalentos3" style="display:none;" >
															<label for="profesion">Talento <small style="color:#444">*Si no encuentras tu talento da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info11" class="chosen-select" data-placeholder="Selecciona tu talento..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)">
																<?php

$query = "SELECT id,masculino,femenino FROM listatalentos";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>

														<div class="form-group" id="moficio3" style="display:none;">
															<label for="profesion">Oficio <small style="color:#444">*Si no encuentras tu oficio da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info12" class="chosen-select" data-placeholder="Selecciona tu oficio..." onchange="verOtro(<?php echo($_SESSION['perfil']);?>)" >
																<?php

$query = "SELECT id,masculino,femenino FROM listaoficios";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>

														<div class="form-group" id="mocupacion3" style="display:none;">
															<label for="profesion">Ocupación <small style="color:#444">*Si no encuentras tu ocupación da click en "otros" y escríbela, pronto la agregaremos</small></label>

															<div>
																<select id="profesion" name="info13" class="chosen-select" data-placeholder="Selecciona tu ocupación..." onchange="verOtro(5)" >
																<?php

$query = "SELECT id,masculino,femenino FROM listaocupacion";
$result = mysqli_query($conexion,$query);
while ($row = mysqli_fetch_row($result)){
?>
    <option value="<?php echo $row[0]; ?>" <?php if(($row[1]==$info0)||($row[2]==$info0)){echo("selected");}?> ><?php if($sexo==0){echo $row[2]; }else{echo $row[1]; }         ?>     </option>
<?php } ?>
																	

																</select>
															</div>
														</div>

										
														
														
														<?php }

														} ?>

														
													
													<div class="space-6"></div>
													
														<?php if($perfil==1){ ?>	
													<div>
															<label for="estudios">Estudios Adicionales</label>

															<textarea placeholder="Ej: Especialización en Finanzas" id="estudios" name="info1" class="autosize-transition form-control"   style="overflow: hidden; word-wrap: break-word; resize: none; height: 48px; margin-left: 0px; margin-right: -1.34375px;"><?php echo($info1);?></textarea>
														</div>
														<?php } ?>
														<div class="space-6"></div>
														<div>
															<label for="experiencia">Experiencia</label>

															<textarea  placeholder="Ej: Trabajé dos años en un Call Center" id="experiencia" name="info2" class="autosize-transition form-control"  style="overflow: hidden; word-wrap: break-word; resize: none; height: 48px; margin-left: 0px; margin-right: -1.34375px;"><?php if($perfil==1){echo($info2);}else{echo($info1);}?></textarea>
														</div>
														<div class="space-6"></div>
														<div>
													<label for="extras">Información Adicional</label>
													<input id="extras" name="extras" placeholder="Ej: Arreglo Computadores" class="fullwidth" type="text"  value="<?php echo($extras);?>" maxlength="50" ></input>
													</div>
													
													</div>

													
												</div>
												<div class="space-6"></div>
												<label for="facebook">Redes Sociales</label>
												<div class="row">
											<div class="col-xs-6 ">		

													
													<span class="block input-icon input-icon-left fullwidth"><input id="facebook" name="facebook" placeholder="Facebook" type="text" onchange="verificaFacebook();" value="<?php echo($facebook);?>" maxlength="100" ></input>
													<i class="icon-facebook"></i></span>
													<div id='resultadourlfb'></div>													
											</div>
											<div class="col-xs-6 ">			
													<span class="block input-icon input-icon-left fullwidth"><input id="twitter" name="twitter" placeholder="Twitter" type="text" onchange="verificaTwitter();" value="<?php echo($twitter);?>" maxlength="100" ></input>
													<i class="icon-twitter"></i></span>
													<div id='resultadourltt'></div>
											</div>
											</div>
											<br>
											<div class="row">
											<div class="col-xs-6 ">		
												<?php if($perfil == 1){ ?>
												<div class="form-group">
												<label for="#sel1"> Cambiar Categoria: </label> <br>
												  <select class="form-control chosen-select" id="sel1" name="select"  data-placeholder="Cambiar de profesión...">
												    <option value="0">Ninguno</option>
												    <option value="2">Técnico</option>
												    <option value="3">Talento</option>
												    <option value="4">Oficio</option>
												    <option value="5">Ocupación</option>
												  </select>
												</div>
												<?php } if($perfil == 2){ ?>
												<div class="form-group">
												<label for="#sel1"> Cambiar Categoria: </label> <br>
												  <select class="form-control chosen-select" id="sel1" name="select"  data-placeholder="Cambiar de profesión...">
												    <option value="0">Ninguno</option>
												    <option value="1">Profesional</option>
												    <option value="3">Talento</option>
												    <option value="4">Oficio</option>
												    <option value="5">Ocupación</option>
												  </select>
												</div>
												<?php } if($perfil == 3){ ?>
												<div class="form-group">
												<label for="#sel1"> Cambiar Categoria: </label> <br>
												  <select class="form-control chosen-select" id="sel1" name="select"  data-placeholder="Cambiar de profesión...">
												    <option value="0">Ninguno</option>
												    <option value="1">Profesional</option>
												    <option value="2">Técnico</option>
												    <option value="4">Oficio</option>
												    <option value="5">Ocupación</option>
												  </select>
												</div>
												<?php } if($perfil == 4){ ?>
												<div class="form-group">
												<label for="#sel1"> Cambiar Categoria: </label> <br>
												  <select class="form-control chosen-select" id="sel1" name="select"  data-placeholder="Cambiar de profesión...">
												    <option value="0">Ninguno</option>
												    <option value="1">Profesional</option>
												    <option value="2">Técnico</option>
												    <option value="3">Talento</option>
												    <option value="5">Ocupación</option>
												  </select>
												</div>
												<?php } if($perfil == 5){ ?>
												<div class="form-group">
													<label for="#sel1"> Cambiar Categoria: </label> <br>
												  <select class="form-control chosen-select" id="sel1" name="select"  data-placeholder="Cambiar de profesión...">
												    <option value="0">Ninguno</option>
												    <option value="1">Profesional</option>
												    <option value="2">Técnico</option>
												    <option value="3">Talento</option>
												    <option value="4">Oficio</option>
												  </select>
												</div>
												<?php }  ?>  
											
											</div>
											</div>
											</div>


											<div class="modal-footer" style="margin-top:0px;">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													Cancelar
												</button>

												<button type="submit" onclick="verificaTwitter();verificaFacebook();" class="btn btn-sm btn-warning">
													<i class="icon-ok"></i>
													Guardar
												</button>


											</div>
											</form>
										</div>
									</div>
								</div>
								
								
								<div id="modal-form3" class="modal" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
										
										<?php include('subevid.php'); ?>
										
										</div>
									</div>
								</div>
								<?php } ?>
								
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

		<!-- page specific plugin scripts -->
		
		
  
        <script type="text/javascript" src="../js/jquery.flexslider.js"></script>
		<script src="../js/jquery.Jcrop.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.form.js"></script>
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
		
		<script type="text/javascript">
		$.noConflict();
		function cargarGaleria(){
			jQuery(function($) {
			$('.flexslider').flexslider({
			animation: "slide"
			});
			});
			}
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chosen-select").chosen(); 
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('9999-99-99');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				/*$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Arrastra la foto aquí o click para elegir',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})*/
				
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				
				$('#modal-form2').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
$("#publicar").click(function(){
			 	var comentario = $("#comment").val();
			 	if(comentario != ""){


			 		$("#mensaje").html("").show();
			 		 $.ajax({
                url: 'estado.php',
                method: 'POST',
                data: {publicacion: comentario},
                beforeSend: function () {
                        $("#cargando").show(500);
              },
                success:  function (msg) {
                      $("#cargando").hide(500); 
                      
                      if(msg=='1'){
                    $("#mensaje").html("Se publico correctamente ").show('fash');
      }else{
                    $("#mensaje").html("no se publico correctamente").show();
      }

                }
        });

			 	}else{
			 		 $("#mensaje").html("El Estado esta vacio").show();
			 	}


			 });
var perfil;
var peril3;
var perfilbus;
	$('#mostrarprofe').click(function(){
		$('#mprofesionales').hide();
		$('#mtecnicos').hide();
		$('#mtalentos').hide();
		$('#moficio').hide();
		$('#mocupacion').hide();

		  $('#mostrarprofe2').slideToggle('slow',function(){
$('input[type=radio][name=perfil]').change(function(){

   perfil = this.value;

	if(this.value == "1"){
		$('#mprofesionales').show();
		$('#mtecnicos').hide();
		$('#mtalentos').hide();
		$('#moficio').hide();
		$('#mocupacion').hide();

	}
	if(this.value == "2"){
		$('#mtecnicos').show();
		$('#mprofesionales').hide();
		$('#mtalentos').hide();
		$('#moficio').hide();
		$('#mocupacion').hide();


	}
	if(this.value == "3"){
		$('#mtecnicos').hide();
		$('#mprofesionales').hide();
		$('#mtalentos').show();
		$('#moficio').hide();
		$('#mocupacion').hide();


	}
	if(this.value == "4"){
		$('#mtecnicos').hide();
		$('#mprofesionales').hide();
		$('#mtalentos').hide();
		$('#moficio').show();
		$('#mocupacion').hide();


	}
	if(this.value == "5"){
		$('#mtecnicos').hide();
		$('#mprofesionales').hide();
		$('#mtalentos').hide();
		$('#moficio').hide();
		$('#mocupacion').show();


	}
	if(this.value == "0"){
		$('#mtecnicos').hide();
		$('#mprofesionales').hide();
		$('#mtalentos').hide();
		$('#moficio').hide();
		$('#mocupacion').hide();


	}


});

	  });

});


$('#close').click(function(){
  $('#txtHint').slideUp('slow');
  $('#close').hide('flash');
});



$('#oggun').click(function(){
	$('#usuariosoggun').slideUp('flash');
	
});
$('input[type=radio][name=buradio]').change(function(){

		if(this.value == "1"){
		$('#btnbu').html('Profesiones <span class="caret"></span>');
		perfilbus = this.value;
	} if(this.value == "2"){
		$('#btnbu').html('Nombres <span class="caret"></span>');
		perfilbus = this.value;
	}

	});

$('#cajabusqueda').keypress(function(e){


		if(e.which == 13){
			if(perfilbus == 1){
				$('#close').show('flash');
				$('#txtHint').slideDown('flash');
			searchUser(1);
			}else{
				$('#close').show('flash');
				$('#txtHint').slideDown('flash');
			searchUser(0);
			}
			
		}
	});


function searchUser(profesiones){
		buscador = document.getElementById('cajabusqueda');
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
  } ?> if(profesiones == 1){
  	xmlhttp.open("GET","profesionesroom.php?filtroescrito="+filtroescrito+"&str="+str3,true);
	xmlhttp.send();
  }else{
xmlhttp.open("GET","showroom.php?filtroescrito="+filtroescrito+"&str="+str3,true);
xmlhttp.send();
}
		}

		function cargarPopup(){
			jQuery(function($) {
			$('[data-rel=popover]').popover({container:'body',html:true});
			$('[data-rel=tooltip]').tooltip({container:'body'});
			});
			}
	




function Eliminarestado(sth1){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp8=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp8=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp8.onreadystatechange=function()
  {
  if (xmlhttp8.readyState==4 && xmlhttp8.status==200)
    {
	document.getElementById("cajaestado"+sth1).innerHTML=xmlhttp8.responseText;
    }
  }
xmlhttp8.open("GET","estado.php?id="+sth1+"&eliminar=true",true);
xmlhttp8.send();
}

//perfil 3 
$('#mostrarprofe3').click(function(){
		$('#mprofesionales3').hide();
		$('#mtecnicos3').hide();
		$('#mtalentos3').hide();
		$('#moficio3').hide();
		$('#mocupacion3').hide();

		  $('#mostrarprofe4').slideToggle('slow',function(){
$('input[type=radio][name=perfil3]').change(function(){

   perfil = this.value;

	if(this.value == "1"){
		$('#mprofesionales3').show();
		$('#mtecnicos3').hide();
		$('#mtalentos3').hide();
		$('#moficio3').hide();
		$('#mocupacion3').hide();

	}
	if(this.value == "2"){
		$('#mtecnicos3').show();
		$('#mprofesionales3').hide();
		$('#mtalentos3').hide();
		$('#moficio3').hide();
		$('#mocupacion3').hide();


	}
	if(this.value == "3"){
		$('#mtecnicos3').hide();
		$('#mprofesionales3').hide();
		$('#mtalentos3').show();
		$('#moficio3').hide();
		$('#mocupacion3').hide();


	}
	if(this.value == "4"){
		$('#mtecnicos3').hide();
		$('#mprofesionales3').hide();
		$('#mtalentos3').hide();
		$('#moficio3').show();3
		$('#mocupacion3').hide();


	}
	if(this.value == "5"){
		$('#mtecnicos3').hide();
		$('#mprofesionales3').hide();
		$('#mtalentos3').hide();
		$('#moficio3').hide();
		$('#mocupacion3').show();


	}
	if(this.value == "0"){
		$('#mtecnicos3').hide();
		$('#mprofesionales3').hide();
		$('#mtalentos3').hide();
		$('#moficio3').hide();
		$('#mocupacion3').hide();


	}


});

	  });

});


		</script>

</body>
<!-- InstanceEnd --></html>
