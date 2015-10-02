<?php
//session_start();
require("info.php");

echo('<ul class="ace-thumbnails">');

						if(isset($_GET['filtro'])){
						if($_GET['filtro']>0&&$_GET['filtro']<6){
						$filtro="AND personal.perfil='".$_GET['filtro']."'";}else{$filtro="";}
						}else{$filtro="";}
						

						if(isset ($_GET['esp'])){ //Si se desea aplicar filtro especifico
						if($_GET['esp']>1){//1 es mostrar todos, no se aplica filtro especifico
						$esp=$_GET['esp'];}else{$esp=0;}
						}else{$esp=0;} //Si no se pone un valor que se omite mas adelante, muestra todos
						
						$filtroescrito="";//por defecto
						$filtroescritoprofesiones="";//por defecto
						$filtroescrito2="";//por defecto
						if(isset($_GET['filtroescrito'])){
						if(!empty($_GET['filtroescrito'])){
						$filtroescrito=$_GET['filtroescrito'];
						$parts = explode(" ",trim($filtroescrito));
						$clauses=array();
						foreach ($parts as $part){
						$clauses[]="CONCAT(nombres, ' ' , apellidos) LIKE  '%". mysql_real_escape_string($part)."%'  ";
						}
						$clause=implode(' OR ' ,$clauses);
						$filtroescrito="AND ($clause) ";	
						
						}
						}					
$resultado = mysqli_query($conexion,"SELECT usuarios.id,nombres,apellidos,perfil,sexo,fotoprincipal,idvideoprincipal,idvideocrowd,facebook,twitter FROM usuarios,personal WHERE usuarios.id=personal.idusuario ".$filtro." ".$filtroescrito."   ORDER BY RAND()");

while($fila = mysqli_fetch_row($resultado))
{
	//if($fila[5]!="../imgusers/default.jpg"){//Debe tener foto
	if(true){
	$foto=$fila[5];
	/*--*/
	$nombre=$fila[1]." ".$fila[2];
	if($fila[4]==0){$sexo="femenino";}else{$sexo="masculino";}
	switch($fila[3]){
	case(1):
	$resultado2 = mysqli_query($conexion,"SELECT profesion,perfil2,idusuario,perfil3 FROM profesionales WHERE idusuario='".$fila[0]." '");
	$fila2=mysqli_fetch_row($resultado2);
	$resultado3 = mysqli_query($conexion,"SELECT ".$sexo." FROM listaprofesiones WHERE id='".$fila2[0]."'  ");
	$fila3=mysqli_fetch_row($resultado3);
	$idusuario = $fila2[2];
	switch ($fila2[1]) {
		 case(0):
		 	$perfil4="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM profesionales AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
		switch ($fila2[3]) {
		 case(0):
		 	$perfil5="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaprofesiones AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM profesionales AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM profesionales AS p JOIN listaocupacion AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
	$perfil=$fila3[0];
	$perfil2="Pr";
	//$perfil3="label-info";
	$perfil3="label-black";
	break;
	case(2):
	$resultado2 = mysqli_query($conexion,"SELECT area,perfil2,idusuario,perfil3 FROM tecnicos WHERE idusuario='".$fila[0]."'");
	$fila2=mysqli_fetch_row($resultado2);
	$resultado3 = mysqli_query($conexion,"SELECT masculino FROM listatecnicos WHERE id='".$fila2[0]."'  ");
	$fila3=mysqli_fetch_row($resultado3);
	$perfil=$fila3[0];
	$idusuario = $fila2[2];
	switch ($fila2[1]) {
		 case(0):
		 	$perfil4="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM tecnicos AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
														switch ($fila2[3]) {
		 case(0):
		 	$perfil5="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaprofesiones AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM tecnicos AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM tecnicos AS p JOIN listaocupacion AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
	if($perfil=="Otros"){
	$query = "SELECT nombre FROM listaotrostecnicos WHERE idusuario='".$fila[0]."' ";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$perfil="Otros - ".$row[0];
	}
	$perfil2="Te";
	//$perfil3="label-success";
	$perfil3="label-black";
	break;
	case(3):
	$resultado2 = mysqli_query($conexion,"SELECT talento,perfil2,idusuario,perfil3 FROM talentos WHERE idusuario='".$fila[0]."'");
	$fila2=mysqli_fetch_row($resultado2);
	$resultado3 = mysqli_query($conexion,"SELECT ".$sexo." FROM listatalentos WHERE id='".$fila2[0]."'  ");
	$fila3=mysqli_fetch_row($resultado3);
	$idusuario = $fila2[2];
	switch ($fila2[1]) {
		 case(0):
		 	$perfil4="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM talentos AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
														switch ($fila2[3]) {
		 case(0):
		 	$perfil5="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaprofesiones AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM talentos AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM talentos AS p JOIN listaocupacion AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
	$perfil=$fila3[0];
	if($perfil=="Otros"){
	$query = "SELECT nombre FROM listaotrostalentos WHERE idusuario='".$fila[0]."' ";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$perfil="Otros - ".$row[0];
	}
	$perfil2="Ta";
	//$perfil3="label-warning";
	$perfil3="label-black";
	break;
	case(4):
	$resultado2 = mysqli_query($conexion,"SELECT oficio,perfil2,idusuario,perfil3 FROM oficios WHERE idusuario='".$fila[0]."'");
	$fila2=mysqli_fetch_row($resultado2);
	$resultado3 = mysqli_query($conexion,"SELECT ".$sexo." FROM listaoficios WHERE id='".$fila2[0]."'  ");
	$fila3=mysqli_fetch_row($resultado3);
	$idusuario = $fila2[2];
	switch ($fila2[1]) {
		 case(0):
		 	$perfil4="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM oficios AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
														switch ($fila2[3]) {
		 case(0):
		 	$perfil5="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaprofesiones AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM oficios AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM oficios AS p JOIN listaocupacion AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
	$perfil=$fila3[0];
	if($perfil=="Otros"){
	$query = "SELECT nombre FROM listaotrosoficios WHERE idusuario='".$fila[0]."' ";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$perfil="Otros - ".$row[0];
	}
	$perfil2="Of";
	//$perfil3="label-danger";
	$perfil3="label-black";
	break;
	case(5):
	$resultado2 = mysqli_query($conexion,"SELECT ocupacion,perfil2,idusuario,perfil3 FROM ocupacion WHERE idusuario='".$fila[0]."'");
	$fila2=mysqli_fetch_row($resultado2);
	$resultado3 = mysqli_query($conexion,"SELECT ".$sexo." FROM listaocupacion WHERE id='".$fila2[0]."'  ");
	$fila3=mysqli_fetch_row($resultado3);
	$idusuario = $fila2[2];
	switch ($fila2[1]) {
		 case(0):
		 	$perfil4="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaprofesiones AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM ocupacion AS p JOIN listatecnicos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listatalentos AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaoficios AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaocupacion AS lp ON p.profesion2 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil4 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
														switch ($fila2[3]) {
		 case(0):
		 	$perfil5="&nbsp;";
		 break;
															case (1):
																$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaprofesiones AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Pr - ".$profe[0];
																	
																break;

																case (2):
																	$query = "SELECT lp.masculino FROM ocupacion AS p JOIN listatecnicos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Te - ".$profe[0];
																	
																	break;
																case(3):

																$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listatalentos AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Ta - ".$profe[0];
																	

																break;

																case (4):
																	$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaoficios AS lp ON p.profesion3 = lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5= "Of - ".$profe[0];
																	break;
																case (5):
																	$query = "SELECT lp.masculino,lp.femenino FROM ocupacion AS p JOIN listaocupacion AS lp ON p.profesion3= lp.id  WHERE p.idusuario=$idusuario";
																	$result = mysqli_query($conexion,$query);
																	$profe = mysqli_fetch_row($result);
																	$perfil5 = "Oc - ".$profe[0];
																	
																break;
															
															default:
																# code...
																break;
														}
	$perfil=$fila3[0];
	if($perfil=="Otros"){
	$query = "SELECT nombre FROM listaotrosocupacion WHERE idusuario='".$fila[0]."' ";
$result = mysqli_query($conexion,$query);
$row = mysqli_fetch_row($result);
$perfil="Otros - ".$row[0];
	}
	$perfil2="Oc";
	//$perfil3="label-danger";
	$perfil3="label-black";
	break;
	default:
	$perfil="Ninguno";
	$perfil2="Na";
	$perfil3="label-black";
	break;
	}
	
	if($esp!=0){//Si se ofrece un filtro especifico por perfil, se eliminan los que no pertenecen a el
	if($fila2[0]!=$esp){
	$fila2[0]=0;
	}
	}
	if($fila2[0]!=0){//Debe tener un perfil laboral

	
	
echo ('



									
									
										<li>
											<div  data-rel="colorbox" class="cboxElement">
												<a href="perfil.php?usuario='.$fila[0].'" title="'.$nombre.'">
												<img alt="150x150" height="300px" width="255px" src="'.$foto.'">
												</a>
												<div class="tags">
													<span class="label-holder">
														<span class="label '.$perfil3.' label-perfil" onclick="showUser('.$fila[3].',0)">'.$perfil2.'</span>
													</span>
													<span class="label-holder">
														<span style="max-width: 225px;cursor:default;" class="label '.$perfil3.' arrowed-in"  onclick="showUser('.$fila[3].','.$fila2[0].')">'.$perfil.'</span>
													</span>');

													
													if($perfil4 != "&nbsp;"){

													echo('<span class="label-holder">
															<span style="max-width: 225px;cursor:default;" class="label '.$perfil3.' arrowed-in"  onclick="showUser('.$fila[3].','.$fila2[1].')">'.$perfil4.'</span>
														</span>');
												}
												if($perfil5 != "&nbsp;"){

													echo('<span class="label-holder">
															<span style="max-width: 225px;cursor:default;" class="label '.$perfil3.' arrowed-in"  onclick="showUser('.$fila[3].','.$fila2[1].')">'.$perfil5.'</span>
														</span>');
												}

													
											

												echo('</div></div>');
														
													

													

											if($fila[7]>1){
											
											$resultadovc = mysqli_query($conexion,"SELECT video FROM videos WHERE id=".$fila[7]." ");
											$filavc = mysqli_fetch_row($resultadovc);
											
											echo('<div class="tools tools-bottom tools-crowd">
											<img src="../img/oggunlogoslimplay.png" height="40px" onclick="abrirvideo(\''.$filavc[0].'\','.$fila[7].','.$fila[0].','.$fila[3].')">
											</div>');
											}
											echo('
											<div class="tools tools-bottom">
											
												
														
												<div class="white" style=" height:20px; overflow:hidden; text-align: center;">'.$nombre.'</div>');
												
												if($_GET['str']!=0 && $_GET['str']!=$fila[0]){ ?>
												
												
												<a style="position: absolute;right: 3px;" href="javascript: void(0)">
													<i class="icon-envelope tooltip-warning popover-notitle" data-rel="popover" data-toggle="modal" data-target="#mensaje" > </i>
												</a>
												
												<div class="modal fade" id="mensaje" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
													  <div class="modal-dialog" role="document">
													    <div class="modal-content">
													      <div class="modal-header" >
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        <h4 class="modal-title" id="myModalLabel">Escribe un Mensaje </h4>
													      </div>
													      <div class="modal-body">
													        <form id="cajamsj<?php echo($fila[0]); ?>" onsubmit=" enviarMensaje(<?php echo($fila[0]); ?>); return false;">
																									<textarea placeholder="Escríbele algo" id="escribemsj<?php echo($fila[0]); ?>" name="escribemsj" class="autosize-transition form-control" maxlength="255" style="overflow: hidden; word-wrap: break-word; resize: vertical;  height:150px; margin-left: 0px; margin-right: -1.34375px;" required ></textarea>
												
												<div class="space-4"></div>
												<div class="row">
												<div class="col-sm-8">
												<div class="checkbox" style="margin-top: 2px;margin-bottom: 0px;">
													<label>
														<input name="privado" id="checkprivado<?php echo($fila[0]); ?>" type="checkbox" value="publico" class="ace">
														<span class="lbl" style="position:absolute;font-size: small;" data-rel="tooltip" data-placement="bottom" data-original-title="El mensaje será visto por cualquier persona." >&nbsp; ¿Público?</span>
													</label>
												</div>
												</div>
												<div class="col-sm-4">
												<button type="submit"  class="btn btn-warning">
													<i class="icon-ok"></i>
													Enviar
												</button>
												</div>
														
												</div>
												</form>										
      </div>
    </div>
  </div>
</div>
												
												
												
												
												<?php }
												
												echo('<a href="perfil.php?usuario='.$fila[0].'">
													<i class="icon-user"></i>
												</a>
');
		
if($fila[6]>1){
$resultadov = mysqli_query($conexion,"SELECT video FROM videos WHERE id=".$fila[6]." ");
		
		$filav = mysqli_fetch_row($resultadov);
		
				echo('<a href="javascript: void(0)" onclick="abrirvideo(\''.$filav[0].'\','.$fila[6].','.$fila[0].','.$fila[3].')">
													<i class="icon-youtube-play"></i>
												</a>');


												}
		
echo('
												<a href="javascript: void(0)" onclick="abrirgaleria(\''.$foto.'\','.$fila[0].','.$fila[3].')">
													<i class="icon-zoom-in"></i>
												</a>
												
	');		

	if(strpos($fila[8],'facebook') !== false){
	echo('
												<a href="'.$fila[8].'"  target="_blank">
													<i class="icon-facebook"></i>
												</a>
												
	');											
	}
	if(strpos($fila[9],'twitter') !== false){
	echo('
												<a href="'.$fila[9].'"  target="_blank">
													<i class="icon-twitter"></i>
												</a>
												
	');											
	}
	echo('
												
											</div>
											
											
											
										</li>

										');} } }
										
										
										echo('</ul>');
									if(isset($_GET['profesiones'])){
									 	$filtro = $_GET['profesiones'];
									 	echo $filtro;

									}

										?>
												
												