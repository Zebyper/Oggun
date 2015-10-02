
<div id="editorPerfil" class="form_wrapper" style=" width: 550px;">


<form class="register active" name="register_form"  id="upload_form" enctype="multipart/form-data" method="post" action="editar.php">
<p  class="cerrarformulario" onclick="ocultaEdicion();" > x </p>
    <h3>Edita tu perfil</h3>

    <div class="column2">
        
        <div>
            <label for="foto">Foto de perfil:</label>
            <img id="preview2" src="buscarfoto.php?idfoto=<?php echo($_SESSION['Consulta4']);?>"/>
            <p name="foto" style="cursor:pointer;" onclick="abrirEditorFoto();" class="botong" id="foto"  >Cambiar</p>
        </div>
       <div>
            <label for="info1"><?php $perfil=$_SESSION['perfil']; switch($perfil){
	  case 1:
	  echo("Profesión");
	  break;
	  case 2:
	  echo("Técnico en");
	  break;
	  case 3:
	  echo("Talento");
	  break;
	  case 4:
	  echo("Oficio");
	  break;
	  case 5:
	  echo("Ocupación");
	  break;
	  default:
	  echo("Sin perfil");
	  break;
  }?></label>
            <input type="text" name="info1"  <?php echo("value='$_SESSION[Consulta1]'");?> />
        </div>
        <div>
            <label for="info2"><?php switch($perfil){
	  case 1:
	  echo("Estudios");
	  break;
	  case 2:
	  echo("Experiencia");
	  break;
	  case 3:
	  echo("Experiencia");
	  break;
	  case 4:
	  echo("Experiencia");
	  break;
	  case 5:
	  echo("Experiencia");
	  break;
	  default:
	  echo("Sin perfil");
	  break;
  }?></label>
            <input type="text"  name="info2" <?php echo("value='$_SESSION[Consulta2]'");?> />
        </div>
        <?php if($perfil==1){
	  echo('<div>
            <label for="info3">Experiencia:</label>
            <input type="text"  name="info3" value="'.$_SESSION[Consulta3].'"/>
        </div>');
  }?>
         
        
       
    </div>
   
    <div class="bottom">
   
        <input type="submit" name="guardar" id="guardar" value="Guardar"/>
        
        <div class="clearfloat"></div>
    </div>
</form>


</div>



<div class="editarfoto">

<?php
include('foto.php');
?>
</div> 




