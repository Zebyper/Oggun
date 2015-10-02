<?php
session_start ();
require("info.php");
if(isset($_REQUEST['select'])){
	
	echo $_REQUEST['select'];
	$perfil = $_SESSION['perfil'];
	echo $perfil;
	$id = $_SESSION['idusuario'];
	switch ($_POST['select']) {
		case (0):
			break;
		case (1)://cambio a profesional

			$sql="UPDATE personal SET perfil=1 WHERE idusuario=$id";
			mysqli_query($conexion,$sql)or die ('Fallo el registro 6');

			if($perfil==2){
				$delete="DELETE FROM tecnicos WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.1');
				if($delete){
					$profesional = "INSERT INTO profesionales (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 1;
				}

			}
			if($perfil==3){
				$delete="DELETE FROM talentos WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO profesionales (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 1;
				}
			}
			if($perfil==4){
				$delete="DELETE FROM oficios WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.4');
				if($delete){
					$profesional = "INSERT INTO profesionales (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 1;
				}
			}
			if($perfil==5){
				$delete="DELETE FROM ocupacion WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO profesionales (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 1;
				}
			}
			break;

		case (2):

			$sql="UPDATE personal SET perfil=2 WHERE idusuario=$id";
			mysqli_query($conexion,$sql)or die ('Fallo el registro 6');

			if($perfil==1){
				$delete="DELETE FROM profesionales WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.1');
				if($delete){
					$profesional = "INSERT INTO tecnicos (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 2;
				}

			}
			if($perfil==3){
				$delete="DELETE FROM talentos WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO tecnicos (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 2;
				}
			}
			if($perfil==4){
				$delete="DELETE FROM oficios WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.4');
				if($delete){
					$profesional = "INSERT INTO tecnicos (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 2;
				}
			}
			if($perfil==5){
				$delete="DELETE FROM ocupacion WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO tecnicos (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 2;
				}
			}
			
			break;
		case (3):
			$sql="UPDATE personal SET perfil=3 WHERE idusuario=$id";
			mysqli_query($conexion,$sql)or die ('Fallo el registro 6');

			if($perfil==1){
				$delete="DELETE FROM profesionales WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.1');
				if($delete){
					$profesional = "INSERT INTO talentos (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 3;
				}

			}
			if($perfil==2){
				$delete="DELETE FROM tecnicos WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO talentos (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 3;
				}
			}
			if($perfil==4){
				$delete="DELETE FROM oficios WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.4');
				if($delete){
					$profesional = "INSERT INTO talentos (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 3;
				}
			}
			if($perfil==5){
				$delete="DELETE FROM ocupacion WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO talentos (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 3;
				}
			}
			break;
		case (4):
			$sql="UPDATE personal SET perfil=4 WHERE idusuario=$id";
			mysqli_query($conexion,$sql)or die ('Fallo el registro 6');

			if($perfil==1){
				$delete="DELETE FROM profesionales WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.1');
				if($delete){
					$profesional = "INSERT INTO oficios (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 4;
				}

			}
			if($perfil==2){
				$delete="DELETE FROM tecnicos WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO oficios (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 4;
				}
			}
			if($perfil==3){
				$delete="DELETE FROM talentos WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO oficios (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 4;
				}
			}
			
			if($perfil==5){
				$delete="DELETE FROM ocupacion WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO oficios (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 4;
				}
			}
			break;

		case (5):
			$sql="UPDATE personal SET perfil=5 WHERE idusuario=$id";
			mysqli_query($conexion,$sql)or die ('Fallo el registro 6');

			if($perfil==1){
				$delete="DELETE FROM profesionales WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.1');
				if($delete){
					$profesional = "INSERT INTO ocupacion (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.1');
					$_SESSION['perfil'] = 5;

				}

			}
			if($perfil==2){
				$delete="DELETE FROM tecnicos WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO ocupacion (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.2');
					$_SESSION['perfil'] = 5;
				}
			}
			if($perfil==3){
				$delete="DELETE FROM talentos WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.2');
				if($delete){
					$profesional = "INSERT INTO ocupacion (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.3');
					$_SESSION['perfil'] = 5;
				}
			}
			
			if($perfil==4){
				$delete="DELETE FROM oficios WHERE idusuario = $id";
				mysqli_query($conexion,$delete)or die ('Fallo Delete 1.4');
				if($delete){
					$profesional = "INSERT INTO ocupacion (idusuario) VALUES ($id)";
					mysqli_query($conexion,$profesional)or die ('Fallo profesional 1.4');
					$_SESSION['perfil'] = 5;
				}
			}
			
			break;
		
		default:
			# code...
			break;
	}
}



$sql="UPDATE usuarios SET nombres='$_POST[nombres]',apellidos='$_POST[apellidos]' WHERE id='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 0');

$sql="UPDATE personal SET nacimiento='$_POST[nacimiento]',sexo='$_POST[sexo]',origen='$_POST[origen]', residencia='$_POST[residencia]', facebook='$_POST[facebook]', twitter='$_POST[twitter]', extras='$_POST[extras]' WHERE idusuario='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 0');


switch($_SESSION['perfil']){
	
case(1)://Profesional
$sql="UPDATE profesionales SET profesion='$_POST[info0]',estudios='$_POST[info1]', experiencia='$_POST[info2]' WHERE idusuario='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
	switch ($_POST['perfil']) {
		case (1):
			 $sql="UPDATE profesionales SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info4]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE profesionales SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info5]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			$sql="UPDATE profesionales SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info6]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			$sql="UPDATE profesionales SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info7]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			$sql="UPDATE profesionales SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info8]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
		break;	
		default:
			# code...
			break;
	}
	switch ($_POST['perfil3']) {
		case (1):
			 $sql="UPDATE profesionales SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info9]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE profesionales SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info10]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			$sql="UPDATE profesionales SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info11]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			$sql="UPDATE profesionales SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info12]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			$sql="UPDATE profesionales SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info13]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
		break;	
		default:
			# code...
			break;
	}
	
	if(isset($_POST['valorotro'])){
	$sql="INSERT INTO listaotrasprofesiones (idusuario,nombre) VALUES ('$_SESSION[idusuario]','$_POST[valorotro]') ON DUPLICATE KEY UPDATE nombre='$_POST[valorotro]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 11');
	}
	
	if(isset($_POST['valorotro2'])){
	$sql="INSERT INTO listaotrasprofesiones (idusuario,nombre2) VALUES ('$_SESSION[idusuario]','$_POST[valorotro2]') ON DUPLICATE KEY UPDATE nombre2='$_POST[valorotro2]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 112');
	}

break;
case(2)://Tecnico
$sql="UPDATE tecnicos SET area='$_POST[info0]',experiencia='$_POST[info2]' WHERE idusuario='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 2');

	switch ($_POST['perfil']) {
		case (1):
			 $sql="UPDATE tecnicos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info4]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE tecnicos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info5]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			 $sql="UPDATE tecnicos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info6]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			 $sql="UPDATE tecnicos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info7]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			 $sql="UPDATE tecnicos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info8]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
			default:
			# code...
			break;
		}
	switch ($_POST['perfil3']) {
		case (1):
			 $sql="UPDATE tecnicos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info9]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE tecnicos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info10]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			$sql="UPDATE tecnicos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info11]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			$sql="UPDATE tecnicos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info12]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			$sql="UPDATE tecnicos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info13]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
		break;	
		default:
			# code...
			break;
	}

	if(isset($_POST['valorotro'])){
	$sql="INSERT INTO listaotrostecnicos (idusuario,nombre) VALUES ('$_SESSION[idusuario]','$_POST[valorotro]') ON DUPLICATE KEY UPDATE nombre='$_POST[valorotro]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 22');
	}
	
break;
case(3)://Talento
$sql="UPDATE talentos SET talento='$_POST[info0]',experiencia='$_POST[info2]' WHERE idusuario='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 3');

		switch ($_POST['perfil']) {
		case (1):
			 $sql="UPDATE talentos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info4]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE talentos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info5]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			 $sql="UPDATE talentos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info6]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			 $sql="UPDATE talentos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info7]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			 $sql="UPDATE talentos SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info8]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
			default:
			# code...
			break;
		}
		switch ($_POST['perfil3']) {
		case (1):
			 $sql="UPDATE talentos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info9]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE talentos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info10]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			$sql="UPDATE talentos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info11]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			$sql="UPDATE talentos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info12]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			$sql="UPDATE talentos SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info13]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
		break;	
		default:
			# code...
			break;
	}
	if(isset($_POST['valorotro'])){
	$sql="INSERT INTO listaotrostalentos (idusuario,nombre) VALUES ('$_SESSION[idusuario]','$_POST[valorotro]') ON DUPLICATE KEY UPDATE nombre='$_POST[valorotro]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 33');
	}
	
break;
case(4)://Oficio
$sql="UPDATE oficios SET oficio='$_POST[info0]',experiencia='$_POST[info2]' WHERE idusuario='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 4');

		switch ($_POST['perfil']) {
		case (1):
			 $sql="UPDATE oficios SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info4]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE oficios SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info5]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			 $sql="UPDATE oficios SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info6]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			 $sql="UPDATE oficios SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info7]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			 $sql="UPDATE oficios SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info8]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
			default:
			# code...
			break;
		}
		switch ($_POST['perfil3']) {
		case (1):
			 $sql="UPDATE oficios SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info9]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE oficios SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info10]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			$sql="UPDATE oficios SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info11]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			$sql="UPDATE oficios SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info12]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			$sql="UPDATE oficios SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info13]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
		break;	
		default:
			# code...
			break;
	}

	if(isset($_POST['valorotro'])){
	$sql="INSERT INTO listaotrosoficios (idusuario,nombre) VALUES ('$_SESSION[idusuario]','$_POST[valorotro]') ON DUPLICATE KEY UPDATE nombre='$_POST[valorotro]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 44');
	}
	
break;
case(5)://Ocupacion
$sql="UPDATE ocupacion SET ocupacion='$_POST[info0]',experiencia='$_POST[info2]' WHERE idusuario='$_SESSION[idusuario]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 5');

		switch ($_POST['perfil']) {
		case (1):
			 $sql="UPDATE ocupacion SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info4]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE ocupacion SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info5]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			 $sql="UPDATE ocupacion SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info6]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			 $sql="UPDATE ocupacion SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info7]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			 $sql="UPDATE ocupacion SET perfil2 = '$_POST[perfil]', profesion2 = '$_POST[info8]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
			default:
			# code...
			break;
		}
		switch ($_POST['perfil3']) {
		case (1):
			 $sql="UPDATE ocupacion SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info9]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (2):
			 $sql="UPDATE ocupacion SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info10]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (3):
			$sql="UPDATE ocupacion SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info11]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (4):
			$sql="UPDATE ocupacion SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info12]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
			break;
		case (5):
			$sql="UPDATE ocupacion SET perfil3 = '$_POST[perfil3]', profesion3 = '$_POST[info13]' WHERE idusuario='$_SESSION[idusuario]'";
				mysqli_query($conexion,$sql)or die ('Fallo el registro 1');
		break;	
		default:
			# code...
			break;
	}

	if(isset($_POST['valorotro'])){
	$sql="INSERT INTO listaotrosocupacion (idusuario,nombre) VALUES ('$_SESSION[idusuario]','$_POST[valorotro]') ON DUPLICATE KEY UPDATE nombre='$_POST[valorotro]'";
	mysqli_query($conexion,$sql)or die ('Fallo el registro 55');
	}
	
break;
default:
break;
}
	
		//require("salir.php");
	header('location:perfil.php?usuario='.$_SESSION['idusuario']);


?>