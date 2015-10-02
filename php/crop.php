
  

  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.Jcrop.js"></script>
  
  
  <link rel="stylesheet" href="../css/jquery.Jcrop.css" type="text/css" />


<script type="text/javascript">

function initCrop (){

function updateCoords(c)
  {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function checkCoords()
  {
    if (parseInt($('#w').val())) return true;
    alert('Arrastra una parte de tu imagen');
    return false;
  };


  jQuery(function($){

    // Create variables (in this scope) to hold the API and image size
    var jcrop_api,
        boundx,
        boundy,

        // Grab some information about the preview pane
        $preview = $('#preview-pane'),
        $pcnt = $('#preview-pane .preview-container'),
        $pimg = $('#preview-pane .preview-container img'),

        xsize = $pcnt.width(),
        ysize = $pcnt.height();
    
    console.log('init',[xsize,ysize]);
    $('#cropbox').Jcrop({
	boxWidth: 500,
	boxHeight: 200,
      onChange: updatePreview,
      onSelect: updateCoords,
      aspectRatio: xsize / ysize
    },function(){
      // Use the API to get the real image size
      var bounds = this.getBounds();
      boundx = bounds[0];
      boundy = bounds[1];
      // Store the API in the jcrop_api variable
      jcrop_api = this;

      // Move the preview into the jcrop container for css positioning
      $preview.appendTo(jcrop_api.ui.holder);
    });

    function updatePreview(c)
    {
	
      if (parseInt(c.w) > 0)
      {
        var rx = xsize / c.w;
        var ry = ysize / c.h;

        $pimg.css({
          width: Math.round(rx * boundx) + 'px',
          height: Math.round(ry * boundy) + 'px',
          marginLeft: '-' + Math.round(rx * c.x) + 'px',
          marginTop: '-' + Math.round(ry * c.y) + 'px'
        });
      }
    };

  });

}
//$(document).ready(initCrop);
</script>
<style type="text/css">
  #target {
    background-color: #ccc;
    width: 500px;
    height: 330px;
    font-size: 24px;
    display: block;
  }
  
 .jcrop-holder #preview-pane {
  display: block;
  position: absolute;
  z-index: 2000;
  
  padding: 6px;
  border: 1px rgba(0,0,0,.4) solid;
  background-color: white;
  top:240px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  visibility:visible;

  -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
}

/* The Javascript code will set the aspect ratio of the crop
   area based on the size of the thumbnail preview,
   specified here */
#preview-pane .preview-container {
  width: 175px;
  height: 210px;
  overflow: hidden;
}
#preview-pane{
visibility:hidden;
}

.jcrop-keymgr{
visibility:hidden;
}





</style>

<?php if($propio){?>

<div style="z-index:800;">
<h4 style='color:black;'> <b>Selecciona una zona de la imagen:</b> </h4>
		<!-- This is the image we're attaching Jcrop to -->
		
		
<img src="<?php if(isset($_SESSION['fototemporal'])){echo($_SESSION['fototemporal']);}else{echo($_SESSION['fotoprincipal']);} ?>" style=""  id="cropbox" />

		<!-- This is the form that our event handler fills -->
		
<div class="page-header"></div>

		<div id="preview-pane">
		
		<form action="cropsave.php" method="post" onsubmit="return checkCoords();">
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input type="submit"   value="Recortar Imagen" class="btn btn-warning btn-recorta" />
			<input type="submit" name="cancela"  value="Cancelar" class="btn btn-inverse btn-recorta" style="right: -300px;"/>
		</form>
		
    <div class="preview-container">
	
      <img src="<?php if(isset($_SESSION['fototemporal'])){echo($_SESSION['fototemporal']);}else{echo($_SESSION['fotoprincipal']);} ?>"   width="150px" height="150px" class="jcrop-preview" alt="Preview" id="cropboxpreview" />

    </div>
  </div>


</div>
	<?php }?>