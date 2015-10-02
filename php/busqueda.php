<?php
include('info.php');
if($_POST){

$q=$_POST['palabra']; //se recibe la cadena que queremos buscar
$sql_res=mysqli_query($conexion,"select p.fotoprincipal,p.residencia,u.nombres,u.apellidos,u.id from personal AS p inner join usuarios AS u
ON p.idusuario = u.id
WHERE u.nombres LIKE '%$q%' OR u.apellidos LIKE '%$q%' order by u.id LIMIT 5");
while($row=mysqli_fetch_array($sql_res)){
$id=$row['id'];
$nombre=$row['nombres'];
$apellido=$row['apellidos'];
$direc = $row['residencia'];
$foto=$row['fotoprincipal'];

?>
<a href="perfil.php?usuario=<?php echo $id; ?>" style="text-decoration:none;" > <!--Recuperamos el id para pasarlo a otra pagina -->
<div class="display_box" align="left">
<div style="float:left; margin-right:6px;"><img src="<?php echo $foto?>" width="60" height="60" /></div> <!--Colocamos la foto Recuperada de la bd -->
<div style="margin-center:6px;"><b><?php echo $nombre."".$apellido; ?></b></div> <!--Recuperamos el nombre recuperado de la bd -->
<div style="margin-right:6px; font-size:14px;" class="desc"><?php echo $direc; ?></div></div> <!--Recuperamos la direccion recuperada de la bd -->
</a>

<?php
}

}
else
{

}

?>


