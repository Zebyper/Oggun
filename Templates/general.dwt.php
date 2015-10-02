<?PHP
session_start ();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Oggun</title>
<!-- TemplateEndEditable -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/javainicio.js"></script>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="../css/base.css" rel="stylesheet" type="text/css">
<link href="../css/elementos.css" rel="stylesheet" type="text/css">
<link href="../img/favicon.ico" rel="icon" type="image/x-icon" />

</head>

<body>

<div class="container">
  <div class="header">
  <aside>
<?php

if (isset($_SESSION['nombres'])){

include('controlusuario.php');
}else{
	echo('<div class="button-wrapper-large">
					<p class="a-btn" onClick="activarManual()">
						<span class="a-btn-text">Se parte de nuestra comunidad</span> 
						<span class="a-btn-slide-text">Ingresa aqui</span>
						<span class="a-btn-icon-right"><span></span></span>
					</p>
					<div class="clr"></div>
				</div>');
}?>



</aside>
  <a href="../php/index.php"><img src="../img/logoi.png" alt="Oggun" name="Oggun" width="304" height="84" id="oggun_logo" style="border-radius:20px 20px 0px 0px; background: #444; display: compact; font-family:Capsuula;" /></a>
<div class="clearfloat"></div>   
    
  <!-- end .header -->   </div>
    
  <div class="content">
  <?php
if (!isset($_SESSION['nombres'])){include('register.php');}else{
}
?>
  <!-- TemplateBeginEditable name="contenido" -->





<!-- TemplateEndEditable -->

<script type="text/javascript" src="../js/javafin.js"></script>
    <!-- end .content --></div>
  <div class="footer">
    <p>Oggun Temporal &reg; </p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
