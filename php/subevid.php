



<style>

.preview
{
position:relative;
max-height:250px;
max-width:500px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}


</style>







<form id="videoform"  action="subevideo.php" method="post">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="dark-orange bigger"><img src="../img/oggunlogoslim.png" height="30px"> Sube un Vídeo</h4>
											</div>

											<div class="modal-body overflow-visible">
												<div class="row">
													

													<div class="col-xs-12 col-sm-12">
														
														<div class="space-4"></div>
														<div class="row">
									
														<div class="col-sm-6">
														
														<div class="form-group">
															<label for="titulovideo">Título</label>

															<div>
																<input class="input-large" maxlength="50" type="text" name="titulovideo" id="titulovideo" placeholder="Ej: Reciclaje Botellas Plásticas" value="" />
															</div>
														</div>
														
														</div>
														
														<div class="col-sm-6">
														<div class="form-group">
															<label for="titulovideo">Tipo de Vídeo</label>

															<div>
																<input  type="radio" name="tipovideo" value="1" checked>Presentación 
																<input  style="margin-left:20px" type="radio" name="tipovideo" value="2">Crowd
															</div>
														</div>
														
														</div>
														
														</div>

														

														

														<div class="space-4"></div>

														<div class="form-group">
															<label for="urlvideo">URL Vídeo YouTube propio:</label>

															<div>
																<input class="input-large" onchange="verificaYoutube();" maxlength="50" type="text" name="urlvideo" id="urlvideo" placeholder="Ej: https://www.youtube.com/watch?v=QlmE55eR-Rk" value="" required />
															</div>
															<div id='resultadourl'></div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label for="ubicacionvideo">Lugar del Vídeo</label>

															<div>
																
																<input class="input-large" id="ubicacionvideo" name="ubicacionvideo" placeholder="Ej: Quibdó Colombia"
             onFocus="initialize3()" onclick="initialize3()" type="text" maxlength="255" value="" ></input>
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label for="descripcionvideo">Descripción</label>

															<div>
																
																<textarea placeholder="Ej: Proyecto para reutilizar botellas plásticas"  name="descripcionvideo" id="descripcionvideo" class="autosize-transition form-control"   style="overflow: hidden; word-wrap: break-word; resize: none; height: 48px; margin-left: 0px; margin-right: -1.34375px;" maxlength="255" ><?php ?></textarea>
																
															</div>
														</div>
														
														<input type="hidden" name="idvideopresentacion"  value="<?php echo($idvideoprincipal);?>" /> 
														
														
													</div>
												</div>
											</div>

											<div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													Cancelar
												</button>

												<button type="submit" onclick="" class="btn btn-sm btn-warning">
													<i class="icon-ok"></i>
													Subir
												</button>
											</div>
											</form>
											
											
											
<script>

function subirVideo(){
  var file = document.getElementById('filevideo').files[0];
 
  var fd = new FormData();
  fd.append("file", file);
  fd.append("descripcion", document.getElementById('descripcionvideo').value);
fd.append("ubicacion", document.getElementById('ubicacionvideo').value);
fd.append("titulo", document.getElementById('titulovideo').value);
  
 
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'subevideo.php', true);
  
  xhr.upload.onprogress = function(e) {
    if (e.lengthComputable) {
      var percentComplete = (e.loaded / e.total) * 100;
      //console.log(percentComplete + '% subido');
	  document.getElementById("progresovideo").style.width=percentComplete + '%';
    }
  };
 
  /*xhr.onload = function() {
    if (this.status == 200) {
      var resp = JSON.parse(this.response);
 
      console.log('Server got:', resp);
 
      var image = document.createElement('img');
      image.src = resp.dataUrl;
      document.body.appendChild(image);
    };
  };*/
  
xhr.onreadystatechange=function()
  {
  if (xhr.readyState==4 && xhr.status==200)
    {
    document.getElementById("resultado").innerHTML=xhr.responseText;
	window.location.reload();
    }
  }
 
xhr.send(fd); 
document.getElementById("progresocontenedor").style.visibility='visible';
//document.getElementById("resultado").innerHTML='<img src=\"../img/loader.gif \" alt="Cargando...."/>';  

}


function verificaYoutube(){
urlvideo=document.getElementById('urlvideo');
resultado=document.getElementById('resultadourl');
if (urlvideo.value.indexOf('?v=')>= 0){
resultado.style.color='green';
resultado.innerHTML='URL valido';
}else{
resultado.style.color='red';
resultado.innerHTML='Inserta un URL valido de YouTube<br> Copia la dirección del vídeo de YouTube, y pégala arriba';
urlvideo.value='';
}
}

function detenerFormulario(){
//subirVideo();
      return false;
}
</script>
