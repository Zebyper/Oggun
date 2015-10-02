
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg2').live('change', function()			{ 
			           $("#preview2").html('');
			    $("#preview2").html('<img src="../img/loader.gif" alt="Cargando...."/>');
			$("#imageform2").ajaxForm({
						target: '#preview2'
		}).submit();
		
			});
        }); 
</script>

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




<form id="imageform2" method="post" enctype="multipart/form-data" action='ajaximage.php'>
<h4>Selecciona tu foto: </h4>
<br>


<input type="file" name="photoimg" id="photoimg2" accept="image/*" />
<input type="hidden" name="sube" id="sube" value="foto" />
</form>
<div id='preview2'>
</div>



