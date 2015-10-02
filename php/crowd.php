<!-- InstanceBegin template="/Templates/generalace.dwt.php" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html>
<head>
<?php
session_start ();
require("info.php"); 

?>
<meta  charset="utf-8" />
<meta name="keywords" content="oggun, red social oggun, red laboral oggun, oggun web, oggun red" />

<meta name="description" content="Red social laboral con identidad." />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Oggun - CrowdFunding</title>
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
		<script src="../js/videop.js"></script>
		
		
		<script src="../js/javainicio.js"></script>
		
		
		
		<!-- fonts -->

		<link rel="stylesheet" href="../assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="../assets/css/ace.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" type="text/css" href="popover.css">
        

		<!--[if lte IE 8]>
		<link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="../assets/js/ace-extra.min.js"></script>
		<script src="js/jquery-1.11.3.min.js"></script>
		
		
		

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
								
								CrowdFunding 
								<small class="light-orange">
									<i class="icon-double-angle-right"></i>
									 Proyectos que nos necesitan.
								</small>
								</h1>
								</div><!-- /.page-header -->


								<div class="row">
									
									
									
									<div class="col-xs-12">
									<div class="widget-box"  >
									
									<div class="widget-body" style="background:rgba(255,255,255,0);" >
									
									
												<div class="widget-main">
		<div class="row">	
		
		
		<?php $resultadov = mysqli_query($conexion,"SELECT titulo,video,videos.id,videos.idusuario,personal.perfil FROM videos,personal WHERE puntuacion>'99' AND videos.idusuario=personal.idusuario");
		
		while($filav = mysqli_fetch_row($resultadov))
		{
		?>
		<div class="col-sm-3" style="position: relative; max-height: 250px; overflow: hidden;">
		<h3 style="height:52px; overflow:hidden;" > <img src="../img/oggunlogoslimplay.png" height="20px"> <?php echo($filav[0]); ?></h3>
		<div style="position:relative; height:100%; width:100%;">
		<iframe src="//www.youtube.com/embed/<?php echo($filav[1]); ?>?autoplay=0&showinfo=0&controls=0&wmode=transparent" frameborder="0" allowfullscreen
style="width: 100%;" 
 ></iframe>
		
		<div class="btn btn-inverse" style="position: absolute; height: 100%; width: 100%; margin:0px; top:0px;left:0px; opacity:0.2; z-index:10; " onclick="abrirvideo('<?php echo($filav[1]); ?>',<?php echo($filav[2]); ?>,<?php echo($filav[3]); ?>,<?php echo($filav[4]); ?>)"  > </div>
		
			
		</div>	
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
