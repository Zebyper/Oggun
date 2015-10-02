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
<title>Oggun - Contáctenos</title>
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
		
		<link rel="stylesheet" media="screen" type="text/css" href="../css/flexslider.css" />

		<!--[if lte IE 8]>
		<link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="../assets/js/ace-extra.min.js"></script>
		<script src="../js/javainicio.js"></script>
		<style>

	 
    </style>
	
	<body>
	<form action="mailing.php" method="post">
	Digite su correo:  <input type="email" name="email"/><br>
	Ingrese su Nombre: <input type="text" name="name"/><br>
	Escribe tu comentario: <br>
	<textarea name="com" class="form-control" rows="3" ></textarea><br>
	<input type="submit" class="btn-warning" name="enviar" value="Enviar Comentario"/>
	</form> 
	</body>