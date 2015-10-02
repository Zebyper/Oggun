
<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="grey">
                        
                        
<?php

if (isset($_SESSION['idusuario'])){

$fotoperfil=$_SESSION['fotoprincipal'];
	echo('<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<img class="nav-user-photo" src="'.$fotoperfil.'" alt="Foto Perfil" />
								<span class="user-info">
									<small>');if($_SESSION['sexo']==0){print('Bienvenida,</small>');}else{print('Bienvenido,</small>');};
									print($_SESSION['nombres']);
								echo('</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								');
								
								/*<li>
									<a href="perfil.php?usuario='.$_SESSION['idusuario'].'">
										<i class="icon-cog"></i>
										Configuración
									</a>
								</li>*/

								echo('<li>
									<a href="perfil.php?usuario='.$_SESSION['idusuario'].'">
										<i class="icon-user"></i>
										Perfil
									</a>
								</li>
								
								<li>
									<a href="privado.php">
										<i class="icon-envelope"></i>
										Mensajes
									</a>
								</li>

								<li>
									<a href="muro.php">
										<i class="icon-tasks"></i>
										Noticias
									</a>
								</li>
								<li style="cursor:pointer;">
									<a data-toggle="modal" data-target="#hacerred">
										<i class="icon-inbox"></i>
										Hacer Red
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="desconexion.php">
										<i class="icon-off"></i>
										Salir
									</a>
								</li>
							</ul>');
}else{
	echo('<a data-toggle="dropdown"  href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="../assets/avatars/avatar2.png" alt="Foto Perfil" />
								
									Ingresa a Oggun

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#" onclick="$(\'html, body\').animate({ scrollTop: 0 }, \'slow\');'."show_box('login-box');".' return false;">
										<i class="icon-user"></i>
										Ingresa
									</a>
								</li>

								<li>
									<a href="#" onclick="$(\'html, body\').animate({ scrollTop: 0 }, \'slow\');'."show_box('signup-box');".' return false;">
										<i class="icon-group"></i>
										Regístrate
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#" onclick="abrirvideo(\'rTXFWL76bKY\',21,34,1)">
										<i class="icon-info-sign"></i>
										¿Qué es Oggun?
									</a>
								</li>
							</ul>');
}?>

							
						</li>
					</ul><!-- /.ace-nav -->
				</div>
				<div class="pull-right ">
				<a  style="font-size:25px;text-decoration:none;margin-top: 2px;" href="muro.php"><i class="icon-bullhorn white" style="!important;border-radius: 100%;padding: 3px;"></i></a>
				
				<?php if(isset($_SESSION['idusuario'])){
						$sqlcount = "SELECT count(leido) FROM mensajes WHERE idusuario= ".$_SESSION['idusuario']." AND leido = 0 AND publico = 0";
						$querycount = mysqli_query($conexion,$sqlcount);
						$count = mysqli_fetch_row($querycount);

						$sqlcounts = "SELECT count(leido) FROM notificaciones WHERE idusuario= ".$_SESSION['idusuario']." AND leido = 0 ";
						$querycounts = mysqli_query($conexion,$sqlcounts);
						$counts = mysqli_fetch_row($querycounts);

						 ?>
				
				<a class="popovers" data-toggle="mensaje"style="font-size:25px;text-decoration:none;margin-top: 2px; color: white; cursor: pointer;" id="mensajes" ><i class="glyphicon glyphicon-envelope" style="!important;border-radius: 100%;padding: 3px;"></i><span id="burbujamensaje" class="burbuja" ><?php echo $count[0]; ?></span></a>
				<a class="popovers" data-toggle="notificaciones"style="font-size:25px;text-decoration:none;margin-top: 2px; color: white; cursor: pointer;" id="notificaciones" ><i class="icon-bell" style="!important;border-radius: 100%;padding: 3px;"></i><span id="burbujanoti" class="burbuja" ><?php echo $counts[0]; ?></span></a>
				
				<?php }?>
				</div>

				<div id="mensajeria" style="display:none;"  >
				  <?php

				  	$sql = "SELECT mensaje,idremitente,DATE_FORMAT(`fechamensaje`, '%e/%m/%Y - %H:%i') FROM mensajes WHERE idusuario = ".$_SESSION['idusuario']." GROUP BY idremitente ORDER BY fechamensaje DESC ";
				  	$query= mysqli_query($conexion, $sql);
				  	while($row = mysqli_fetch_row($query)){
				  	$sql2 = "SELECT per.fotoprincipal,us.nombres,us.apellidos FROM personal as per INNER JOIN usuarios AS us ON per.idusuario = us.id WHERE us.id = ".$row[1]."  ";
				  	$query2 = mysqli_query($conexion, $sql2);

				  	while($row2 = mysqli_fetch_row($query2)){
				  		echo '<li style="list-style-type: none; padding-bottom:1px; " id="apopover" >
									<a href="privado.php?remitente='.$row[1].'" style="text-decoration: none;" >
										<img src="'.$row2[0].'" class="msg-photo" style="max-width:50px; " />
										<span class="msg-body" style="margin-right: 6px; padding-top: 1px;">
											<span class="msg-title" style="display: inline-block;">
												<span class="blue">'.$row2[1].' '.$row2[2].'</span><br>
												'.$row[0].'
											</span><br>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>'.$row[2].'</span>
											</span>
										</span>
									</a>
								</li> <hr style="margin-top:1px; margin-bottom:1px;">';
				  	}
				  }


				  		 ?>		
				</div>
				<div id="notificacion" style="display:none;"  >
				  <?php


				  	$sql = "SELECT asunto,idremitente,DATE_FORMAT(`fecha`, '%e/%m/%Y - %H:%i') FROM notificaciones WHERE idusuario = ".$_SESSION['idusuario']."  ORDER BY fecha DESC ";
				  	$query= mysqli_query($conexion, $sql);
				  	while($row = mysqli_fetch_row($query)){
				  	$sql2 = "SELECT per.fotoprincipal,us.nombres,us.apellidos FROM personal as per INNER JOIN usuarios AS us ON per.idusuario = us.id WHERE us.id = ".$row[1]."  ";
				  	$query2 = mysqli_query($conexion, $sql2);

				  	while($row2 = mysqli_fetch_row($query2)){
				  		echo '<li style="list-style-type: none; padding-bottom:1px; " id="apopover" >
									<a href="notificaciones.php?remitente='.$row[1].'" style="text-decoration: none;" >
										<img src="'.$row2[0].'" class="msg-photo" style="max-width:50px; " />
										<span class="msg-body" style="margin-right: 6px; padding-top: 1px;">
											<span class="msg-title" style="display: inline-block;">
												<span class="blue">'.$row2[1].' '.$row2[2].'</span><br>
												'.$row[0]. '
											</span><br>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>'.$row[2].'</span>
											</span>
										</span>
									</a>
								</li> <hr style="margin-top:1px; margin-bottom:1px;">';
				  	}
				  }


				  		 ?>		
				</div>
				
				

				