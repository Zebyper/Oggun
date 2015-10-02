<!-- InstanceBegin template="/Templates/generalace.dwt.php" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html>
<head>
<?php
session_start ();
require("info.php"); 

if(!isset($_SESSION['idusuario'])){
header('location:index.php');
}

?>
<meta  charset="utf-8" />
<meta name="keywords" content="oggun, red social oggun, red laboral oggun, oggun web, oggun red" />

<meta name="description" content="Red social laboral con identidad." />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Oggun - Mis Mensajes</title>
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
<script src="popover.js"></script>
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
								
								Mis Mensajes 
								<small class="light-orange">
									<i class="icon-double-angle-right"></i>
									 
								</small>
								</h1>
								</div><!-- /.page-header -->
								<div class="row">
<div class="col-xs-12 col-sm-10 col-sm-offset-1">




 
<?php
if(isset($_GET['chat'])){?>
	

<div class="timeline-container">
 
 <div class="timeline-items">
 <?php



$resultadop = mysqli_query($conexion,"SELECT id,nombre,DATE_FORMAT(`fecha`, '%H:%i'),idusuario FROM chat WHERE id= $_GET[chat] ");



$filap = mysqli_fetch_row($resultadop); 

?>
	<div class="timeline-item clearfix">
		<div class="timeline-info">
			<i class="timeline-indicator icon-envelope btn btn-success no-hover green"></i>
		</div>
		
		<div class="widget-box transparent" >
			<div class="widget-header widget-header-small">
				<h5 class="smaller"><a href="chat.php?chat=<?php echo ($filap[0]); ?>" target="_blank" class="blue"><?php echo ($filap[1]); ?></a></h5>
				<span class="widget-toolbar no-border">
					<i class="icon-time bigger-110"></i>
					<?php echo ($filap[2]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body">
				<div class="widget-main">

					<iframe src="chatmensaje.php?idchat=<?php echo ($filap[0]); ?>" name="iframe" width="700" height="400"></iframe>
					<form method="POST" action="chatmensaje.php">
					<input type ="text" size ="90" id="mensaje" name="mensaje" required>
					<input type ="text" size ="90" id="mensaje" name="idchat" value="<?php echo ($filap[0]); ?>" hidden>
					<input type="submit" id ="enviar" class="enviar">
					</form>

				
				</div>
			</div>
			<?php if ($_SESSION['idusuario'] == $filap[3]) { ?>
				
			
			<div class="pull-right action-buttons">
					<a  data-toggle="modal" data-target="#agregar" class="red" style="cursor: pointer;">
																			<i class="icon-plus bigger-130"></i>
																		</a>
																		<a href="javascript: void(0)" onclick="EliminarConversacion(<?php echo($filap[0]); ?>)" class="red">
																			<i class="icon-trash bigger-130"></i>
																		</a>
				</div>
			<?php } ?>
			<div class="pull-right action-buttons">
					
																		<a href="javascript: void(0)" onclick="SalirConversacion(<?php echo($filap[0]); ?>)" class="red">
																			<i class="icon-trash bigger-130"></i>
																		</a>
				</div>
		</div>
	 </div>


<?php 





  ?>

 </div><!--/.timeline-items -->
</div><!--/.timeline-container -->
<?php 
}else{  



$resultadod = mysqli_query($conexion,"SELECT DISTINCT DATE_FORMAT(`fecha`, '%e/%m/%Y') AS bah FROM chat WHERE idusuario='$_SESSION[idusuario]'  ORDER BY str_to_date(bah,'%e/%m/%Y') DESC");

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



$resultadop = mysqli_query($conexion,"SELECT id,nombre,DATE_FORMAT(`fecha`, '%H:%i') FROM chat WHERE DATE_FORMAT(`fecha`, '%e/%m/%Y')='$filad[0]' AND idusuario='$_SESSION[idusuario]'  ORDER BY fecha DESC");



while($filap = mysqli_fetch_row($resultadop)){ 
$resultadopp = mysqli_query($conexion,"SELECT us.nombres, us.apellidos FROM usuarios AS us INNER JOIN chatpersona AS cp ON us.id = cp.idpersona WHERE idchat = $filap[0] ");

?>
	<div class="timeline-item clearfix">
		<div class="timeline-info">
			<i class="timeline-indicator icon-envelope btn btn-success no-hover green"></i>
		</div>
		
		<div class="widget-box transparent" id="listamsj<?php echo($filap[4]); ?>">
			<div class="widget-header widget-header-small">
				<h5 class="smaller"><a href="chat.php?chat=<?php echo ($filap[0]); ?>" target="_blank" class="blue"><?php echo ($filap[1]." -- PROPIO"); ?></a></h5>
				<span class="widget-toolbar no-border">
					<i class="icon-time bigger-110"></i>
					<?php echo ($filap[2]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				<h5> Personas En el chat <h5>
			<?php while($filapp = mysqli_fetch_row($resultadopp)){
				echo ($filapp[0]." ".$filapp[1]."<br>");
				} ?>
				

				
			</div></div>
		</div>
	 </div>


<?php }?>



 </div><!--/.timeline-items -->
</div><!--/.timeline-container -->

<?php }
$resultadod = mysqli_query($conexion,"SELECT DISTINCT DATE_FORMAT(`fechapersona`, '%e/%m/%Y') AS bah FROM chatpersona WHERE idpersona='$_SESSION[idusuario]'  ORDER BY str_to_date(bah,'%e/%m/%Y') DESC");

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



$resultadop = mysqli_query($conexion,"SELECT c.id,c.nombre,DATE_FORMAT(`fecha`, '%H:%i') FROM chat AS c INNER JOIN chatpersona AS cp ON c.id = cp.idchat WHERE cp.idpersona='$_SESSION[idusuario]'  ORDER BY c.fecha DESC");



while($filap = mysqli_fetch_row($resultadop)){ 
$resultadopp = mysqli_query($conexion,"SELECT us.nombres, us.apellidos FROM usuarios AS us INNER JOIN chatpersona AS cp ON us.id = cp.idpersona WHERE idchat = $filap[0] ");

?>
	<div class="timeline-item clearfix">
		<div class="timeline-info">
			<i class="timeline-indicator icon-envelope btn btn-success no-hover green"></i>
		</div>
		
		<div class="widget-box transparent" id="listamsj<?php echo($filap[4]); ?>">
			<div class="widget-header widget-header-small">
				<h5 class="smaller"><a href="chat.php?chat=<?php echo ($filap[0]); ?>" target="_blank" class="blue"><?php echo ($filap[1]." -- INVITADO"); ?></a></h5>
				<span class="widget-toolbar no-border">
					<i class="icon-time bigger-110"></i>
					<?php echo ($filap[2]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				<h5> Personas En el chat <h5>
			<?php while($filapp = mysqli_fetch_row($resultadopp)){
				echo ($filapp[0]." ".$filapp[1]."<br>");
				} ?>
				

				
			</div></div>
		</div>
	 </div>


<?php } 

} ?>


 </div><!--/.timeline-items -->
</div><!--/.timeline-container --> 
<?php
}if(isset($_POST['todos'])){
	$update ="UPDATE mensajes SET leido = 1 WHERE idusuario = ".$_SESSION['idusuario']."";
	$query = mysqli_query($conexion,$update);
}?>


<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Usuarios</h4>
      </div>
      <div class="modal-body">
      Agregar amigos a la Conversacion <hr>
      <?php 
      $sql = "SELECT a.idamigo,us.nombres,us.apellidos FROM amigos AS a INNER JOIN usuarios AS us ON a.idamigo = us.id WHERE a.idusuario ='$_SESSION[idusuario]'";
      $query = mysqli_query($conexion,$sql);
      ?><form action="chatmensaje.php" method="POST"><?php
      while ($row = mysqli_fetch_row($query)){ ?>
      
      
      <input type="checkbox" name="amigo[]" value="<?php echo $row[0] ?>"> <?php echo $row[1]." ".$row[2] ?> <br>
     
      <?php }?>
      <input type ="text" size ="90" id="mensaje" name="idchat" value="<?php echo ($filap[0]); ?>" hidden >
      <input type="submit" value="agregar" class ="btn btn-primary" >
      </form>
      </div>

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
		function EliminarConversacion(sth1){
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
	document.getElementById("chat"+sth1).innerHTML=xmlhttp8.responseText;
    }
  }
xmlhttp8.open("GET","chatmensaje.php?id="+sth1+"&eliminar=true",true);
xmlhttp8.send();
}
function SalirConversacion(sth1){
	
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
	document.getElementById("chat"+sth1).innerHTML=xmlhttp8.responseText;
    }
  }
xmlhttp8.open("GET","chatmensaje.php?id="+sth1+"&salir=true",true);
xmlhttp8.send();
}
		</script>

</body>
<!-- InstanceEnd --></html>