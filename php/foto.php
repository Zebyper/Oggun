

<script src="../js/previewfoto.js"></script>



<div id="editorFoto" class="form_wrapper" style=" width: 550px;">


<form class="register active" name="register_form"  id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
<p  class="cerrarformulario" onclick="cerrarEditorFoto();" > x </p>
    <h3>Edita tu foto</h3>

  
        
        <div >
                        <div><label for="image_file">Foto de Perfil</label>		              </div>
                        <div style="display: block;
padding: 10px 30px 0px 30px;
margin: 10px 0px 0px 0px;
"><input type="file"  name="image_file" id="image_file" onchange="fileSelected();"  /></div>
                    </div>
                    
<img id="preview"  />
                    <div style="display: block;
padding: 10px 30px 0px 30px;
margin: 10px 0px 0px 0px;
">
                        <input type="submit"  value="Cargar" onclick="startUploading()" />
                    </div>
					<div id="fileinfo" style="margin-left:30px;">
                        <div id="filename"></div>
                        <div id="filesize"></div>
                        <div id="filetype"></div>
                        <div id="filedim"></div>
                    </div>
                    <div id="error"  style="margin-left:30px;">Formato de imagen no valido</div>
                    <div id="error2"  style="margin-left:30px;">Error, vuelve a cargar el archivo</div>
                    <div id="abort"  style="margin-left:30px;">Carga cancelada</div>
                    <div id="warnsize"  style="margin-left:30px;">Foto muy pesada</div>
                    <div id="progress_info"  style="margin-left:30px;">
                        <div id="progress"></div>
                        <div id="progress_percent">&nbsp;</div>
                        <div class="clear_both"></div>
                        <div  style="margin-left:30px;">
                            <div id="speed">&nbsp;</div>
                            <div id="remaining">&nbsp;</div>
                            <div id="b_transfered">&nbsp;</div>
                            <div class="clear_both"></div>
                        </div>
                        <div id="upload_response" ></div>
                    </div>



        
        <div>
        <div class="clearfloat"></div>
    </div>
</form>


</div>










