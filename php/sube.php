
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="../img/loader.gif" alt="Cargando...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
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




<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
<h4>Selecciona tu foto: </h4>
<br>


<input type="file" name="photoimg" id="photoimg" accept="image/*" />
</form>
<div id='preview'>
</div>



