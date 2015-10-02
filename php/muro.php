<!-- InstanceBegin template="/Templates/generalace.dwt.php" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html>
<head>
<?php
session_start ();
require("info.php"); 

?>
<meta  http-equiv="Content-type" content="text/html"; charset="utf-8" />
<meta name="keywords" content="oggun, red social oggun, red laboral oggun, oggun web, oggun red" />

<meta name="description" content="Red social laboral con identidad." />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Oggun - Muro</title>
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
		<link rel="stylesheet" href="../assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="../assets/css/chosen.css" />
		<link rel="stylesheet" href="../assets/css/datepicker.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="../assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="../assets/css/colorpicker.css" />

		<link rel="stylesheet" href="../css/video.css" />
		<link rel="stylesheet" type="text/css" href="popover.css">

		<script src="../js/videop.js"></script>
		
		
		<script src="../js/javainicio.js"></script>
		
		
		
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
<p class="white" style="position:absolute;top:0px;right:10px;cursor:pointer;font-size: 21px;font-weight: bold;" onclick="cerrarvideo()"  > <b>x</b> </p>
<!-- <video id="medio" data-setup="{}" preload="none" class="video-js vjs-default-skin vjs-big-play-centered pull-left" width="60%" height="100%"  controls poster="../vidusers/default.jpg"   >
</video> -->

</section>
<div id="videorelacionados" >
</div>
</div>


<div id="fondogaleria" >
<section id="galeria" >
<p class="white" style="position:absolute;top:5px;left:10px;cursor:pointer;" onclick="cerrargaleria()"  > <b>x</b> </p>
<a id="vinculoimagen" ><img id="imagengrande"  class="" > </a>
</section>
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

			<div class="main-container-inner">
				

				
				<div class="main-content">
					
						

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
							<div id="ingreso" ><?php include('login.html');?></div>
								<!-- PAGE CONTENT BEGINS -->
								<!-- InstanceBeginEditable name="contenido" -->
								
								<div class="page-header">
								<h1 class="dark-orange">
								
								Muro 
								<small class="light-orange">
									<i class="icon-double-angle-right"></i>
									 Noticias de la Red.
								</small>
								</h1>
								</div><!-- /.page-header -->
								<div class="row">
<div class="col-xs-12 col-sm-10 col-sm-offset-1">



 
<?php

$resultadod = mysqli_query($conexion,"(SELECT DISTINCT DATE_FORMAT(`fechausuarios`, '%e/%m/%Y') AS bah FROM usuarios ) UNION (SELECT DISTINCT DATE_FORMAT(`fechafoto`, '%e/%m/%Y') as bah FROM fotos ) UNION (SELECT DISTINCT DATE_FORMAT(`fechavideos`, '%e/%m/%Y') as bah FROM videos) UNION (SELECT DISTINCT DATE_FORMAT(`fechapersonal`, '%e/%m/%Y') as bah FROM personal ) ORDER BY str_to_date(bah,'%e/%m/%Y') DESC");

while($filad = mysqli_fetch_row($resultadod)){?>

<div class="timeline-container">
 <div class="timeline-label">
	<span class="label label-grey arrowed-in-right label-lg">
		<b><?php 
		//$date = date('Y-m-d H:i:s');
		//echo ($date); 
		//echo (date_trunc('day', timestamp '2001-02-16 20:38:40'));
		echo($filad[0]); 
		?></b>
	</span>
 </div>
 <div class="timeline-items">

<?php

$resultadov = mysqli_query($conexion,"SELECT id, video,idusuario  FROM videos WHERE DATE_FORMAT(`fechavideos`, '%e/%m/%Y')='$filad[0]' AND idusuario!='0' ORDER BY fechavideos DESC");

$num_resultsv = mysqli_num_rows($resultadov); 

if ($num_resultsv > 0){ 
?>

<div class="timeline-item clearfix">

		<div class="timeline-info">
			<i class="timeline-indicator icon-youtube-play btn btn-danger no-hover"></i>
		</div>

		<div class="widget-box transparent">
			<div class="widget-header widget-header-small">
				<h5 class="smaller">Vídeos del día</h5>
				<span class="widget-toolbar no-border">
					<i class="icon-calendar bigger-110"></i>
					<?php echo ($filad[0]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				<div class="clearfix">
					<div class="pull-left">
						Vídeos subidos durante el día.
						<br />
						Dales un vistazo:
					</div>
					<div class="pull-right">
						
						&nbsp;
						<?php while($filav = mysqli_fetch_row($resultadov)){?>
						
						
						<div class="pull-left" style="position:relative; height:56px; width:100px;">
		<iframe src="//www.youtube.com/embed/<?php echo($filav[1]); ?>?autoplay=0&showinfo=0&controls=0&wmode=transparent" frameborder="0" allowfullscreen
style="width: 100%;height:100%;" 
 ></iframe>
		
		<a class="btn btn-inverse"  style="position: absolute; height: 100%; width: 100%; margin:0px; top:0px;left:0px; opacity:0.2; z-index:10; " href="perfil.php?usuario=<?php echo($filav[2]); ?>"  > </a>
		</div>	
		<?php
						} ?>
						&nbsp;
						
					</div>
				</div>
			</div></div>
		</div>

	 </div>

<?php
}



$resultadof = mysqli_query($conexion,"SELECT id,nombre, foto,idusuario  FROM fotos WHERE DATE_FORMAT(`fechafoto`, '%e/%m/%Y')='$filad[0]' AND idusuario!='0' ORDER BY fechafoto DESC");

$num_results = mysqli_num_rows($resultadof); 




if ($num_results > 0){ 
?>

<div class="timeline-item clearfix">

		<div class="timeline-info">
			<i class="timeline-indicator icon-picture btn btn-default no-hover"></i>
		</div>

		<div class="widget-box transparent">
			<div class="widget-header widget-header-small">
				<h5 class="smaller">Fotos del día</h5>
				<span class="widget-toolbar no-border">
					<i class="icon-calendar bigger-110"></i>
					<?php echo ($filad[0]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				<div class="clearfix">
					<div class="pull-left">
						Fotos subidas durante el día.
						<br />
						Dales un vistazo:
					</div>
					<div class="pull-right">
						<i class="icon-chevron-left blue bigger-110"></i>
						&nbsp;
						<?php while($filaf = mysqli_fetch_row($resultadof)){
						echo('<a  href="perfil.php?usuario='.$filaf[3].'"><img alt="'.$filaf[1].'" width="80" src="'.$filaf[2].'" /></a>');
						} ?>
						&nbsp;
						<i class="icon-chevron-right blue bigger-110"></i>
					</div>
				</div>
			</div></div>
		</div>
	 </div>

<?php
}


$resultadop = mysqli_query($conexion,"SELECT idusuario,nacimiento, origen, residencia, perfil, facebook, twitter, DATE_FORMAT(`fechapersonal`, '%H:%i') FROM personal WHERE DATE_FORMAT(`fechapersonal`, '%e/%m/%Y')='$filad[0]' ORDER BY fechapersonal DESC");



while($filap = mysqli_fetch_row($resultadop)){ 
$resultadopp = mysqli_query($conexion,"SELECT nombres, apellidos FROM usuarios WHERE id='$filap[0]' ");
$filapp = mysqli_fetch_row($resultadopp);
?>
	<div class="timeline-item clearfix">
		<div class="timeline-info">
			<i class="timeline-indicator icon-beer btn btn-inverse no-hover green"></i>
		</div>
		
		<div class="widget-box transparent">
			<div class="widget-header widget-header-small">
				<h5 class="smaller"><a href="perfil.php?usuario=<?php echo ($filap[0]); ?>"  class="blue"><?php echo ($filapp[0]." ".$filapp[1]); ?></a></h5>
				<span class="widget-toolbar no-border">
					<i class="icon-time bigger-110"></i>
					<?php echo ($filap[7]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				Ha actualizado su perfil <?php if($filap[1]!='0000-00-00'){echo (", fecha de nacimiento ".$filap[1]);} ?><?php if($filap[2]!=''){echo (", nació en ".$filap[2]);} ?>  <?php if($filap[3]!=''){echo (", vive en ".$filap[3]);} ?>  


				<div class="space-6"></div>
				<div class="widget-toolbox clearfix">
					<div class="pull-right action-buttons">
						<div class="space-4"></div>
						<div>
						<?php if($filap[5]!=""){ ?>
						<a  href="<?php echo($filap[5]);?>"><i class="icon-facebook blue bigger-125"></i></a>
						<?php } if($filap[6]!=""){ ?>
						<a href="<?php echo($filap[6]);?>"><i class="icon-twitter blue bigger-125"></i></a>
						<?php } ?>
						</div>
					</div>
				</div>
			</div></div>
		</div>
	 </div>


<?php } 



$resultado = mysqli_query($conexion,"SELECT id,nombres, apellidos, correo, DATE_FORMAT(`fechausuarios`, '%H:%i') FROM usuarios WHERE DATE_FORMAT(`fechausuarios`, '%e/%m/%Y')='$filad[0]' ORDER BY fechausuarios DESC");

while($fila = mysqli_fetch_row($resultado)){ ?>
	<div class="timeline-item clearfix">
		<div class="timeline-info">
			<i class="timeline-indicator icon-star btn btn-warning no-hover green"></i>
		</div>
		
		<div class="widget-box transparent">
			<div class="widget-header widget-header-small">
				<h5 class="smaller"><a href="perfil.php?usuario=<?php echo ($fila[0]); ?>"  class="blue"><?php echo ($fila[1]." ".$fila[2]); ?></a></h5>
				<span class="widget-toolbar no-border">
					<i class="icon-time bigger-110"></i>
					<?php echo ($fila[4]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				Se ha unido a la red, su correo es <span class="blue bolder"><?php echo ($fila[3]); ?></span>   &hellip;
			</div></div>
		</div>
	 </div>


<?php }

$estado = mysqli_query($conexion,"SELECT idusuario,estado,DATE_FORMAT(`fechaestado`, '%H:%i') FROM estado WHERE DATE_FORMAT(`fechaestado`, '%e/%m/%Y')='$filad[0]'  ORDER BY fechaestado DESC");



while($resul = mysqli_fetch_row($estado)){ 
$estadopp = mysqli_query($conexion,"SELECT nombres, apellidos FROM usuarios WHERE id='$resul[0]' ");
$resull = mysqli_fetch_row($estadopp);

 ?>

<div class="timeline-item clearfix">
		<div class="timeline-info">
			<i class="timeline-indicator icon-beer btn btn-inverse no-hover green"></i>
		</div>
		
		<div class="widget-box transparent">
			<div class="widget-header widget-header-small">
				<h5 class="smaller"><a href="perfil.php?usuario=<?php echo ($resull[0]); ?>" target="_blank" class="blue"><?php echo ($resull[0]." ".$resull[1]); ?></a></h5>
				<span class="widget-toolbar no-border">
					<i class="icon-time bigger-110"></i>
					<?php echo ($resul[2]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				Ha actualizado su Estado <?php echo '<strong>'.$resul[1].'</strong>' ?>  


				<div class="space-6"></div>
				<div class="widget-toolbox clearfix">
					<div class="pull-right action-buttons">
						<div class="space-4"></div>
						<div>
						<?php if($filap[5]!=""){ ?>
						<a target="_blank" href="<?php echo($filap[5]);?>"><i class="icon-facebook blue bigger-125"></i></a>
						<?php } if($filap[6]!=""){ ?>
						<a target="_blank"href="<?php echo($filap[6]);?>"><i class="icon-twitter blue bigger-125"></i></a>
						<?php } ?>
						</div>
					</div>
				</div>
			</div></div>
		</div>
	 </div>

 </div><!--/.timeline-items -->
</div><!--/.timeline-container -->

<?php } ?>

<?php } ?>



</div>
</div>
								
								
								
								
								
								
								
								
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
		
var perfilbus;
	
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
		</script>

</body>
<!-- InstanceEnd --></html>
