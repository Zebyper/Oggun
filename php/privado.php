<!-- InstanceBegin template="/Templates/generalace.dwt.php" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html>
<head>
<?php
session_start ();
require("info.php"); 

if(!isset($_SESSION['idusuario'])){
header('location:index.php');
}

?>
<meta  charset="utf-8" />
<meta name="keywords" content="oggun, red social oggun, red laboral oggun, oggun web, oggun red" />

<meta name="description" content="Red social laboral con identidad." />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Oggun - Mis Mensajes</title>
<!-- InstanceEndEditable -->
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="shortcut icon" href="oggunfavicon.ico">
<!-- basic styles -->


    
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		<link rel="stylesheet" href="../assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="../assets/css/chosen.css" />
		<link rel="stylesheet" href="../assets/css/datepicker.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="../assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="../assets/css/colorpicker.css" />

		<link rel="stylesheet" href="../css/video.css" />
		<link rel="stylesheet" type="text/css" href="popover.css">
<script src="popover.js"></script>
		<script src="../js/videop.js"></script>
		
		
		<script src="../js/javainicio.js"></script>
		
		
		
		<!-- fonts -->

		<link rel="stylesheet" href="../assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="../assets/css/ace.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		<link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="../assets/js/ace-extra.min.js"></script>
		
		
		

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>



<body style class="navbar-fixed skin-1"  >
<?php include("error.php");?>


<div id="fondoreproductor" >
<section id="reproductor" >

<div id="resultadoinfovideo" class="pull-right" style="position: absolute; top: 0px; left: 0px; width: 100%;height: 100%;"></div>
<p class="white" style="position:absolute;top:0px;right:10px;cursor:pointer;font-size: 21px;font-weight: bold;" onclick="cerrarvideo()"  > <b>x</b> </p>
<!-- <video id="medio" data-setup="{}" preload="none" class="video-js vjs-default-skin vjs-big-play-centered pull-left" width="60%" height="100%"  controls poster="../vidusers/default.jpg"   >
</video> -->

</section>
<div id="videorelacionados" >
</div>
</div>


<div id="fondogaleria" >
<section id="galeria" >
<p class="white" style="position:absolute;top:5px;left:10px;cursor:pointer;" onclick="cerrargaleria()"  > <b>x</b> </p>
<a id="vinculoimagen" ><img id="imagengrande"  class="" > </a>
</section>
<div id="galeriarelacionados" >
</div>
</div>
						

<div class="navbar navbar-default navbar-fixed-top " id="navbar"><!-- .Navbar -->
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container container" id="navbar-container">
				<div class="navbar-header pull-left">
					<!--<a href="index.php" class="navbar-brand">
						<small  style="font-family: 'AdamFont'; font-size: 48px;">
							
							Oggun
						</small>
					</a> /.brand -->
					<a href="index.php" class="navbar-brand" style="
    padding: 0px;
">
						<img src="../img/oggunlogo.png" style="
    margin: 0px;
">
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
				
				<?php
					include('controlusuario.php');
				?>
				<!-- /.navbar-header -->
			<a href="crowd.php">	
<img src="../img/oggunlogoslimplay.png" height="45px" style="display: block; margin: 0px auto;"/>
  </a>
			</div><!-- /.container -->
		</div><!-- /.navbar -->




		<div class="main-container container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				

				
				<div class="main-content">
					
						

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
							<div id="ingreso" ><?php include('login.html');?></div>
								<!-- PAGE CONTENT BEGINS -->
								<!-- InstanceBeginEditable name="contenido" -->
								
								<div class="page-header">
								<h1 class="dark-orange">
								
								Mis Mensajes 
								<small class="light-orange">
									<i class="icon-double-angle-right"></i>
									 
								</small>
								</h1>
								</div><!-- /.page-header -->
								<div class="row">
<div class="col-xs-12 col-sm-10 col-sm-offset-1">




 
<?php
if(isset($_GET['remitente'])){
	$resultadod = mysqli_query($conexion,"SELECT DISTINCT DATE_FORMAT(`fechamensaje`, '%e/%m/%Y') AS bah FROM mensajes WHERE idusuario='$_SESSION[idusuario]' AND idremitente='$_GET[remitente]'  ORDER BY str_to_date(bah,'%e/%m/%Y') DESC");

while($filad = mysqli_fetch_row($resultadod)){?>

<div class="timeline-container">
 <div class="timeline-label">
	<span class="label label-grey arrowed-in-right label-lg">
		<b><?php 
		//$date = date('Y-m-d H:i:s');
		//echo ($date); 
		//echo (date_trunc('day', timestamp '2001-02-16 20:38:40'));
		echo($filad[0]); 
		?></b>
	</span>
 </div>
 <div class="timeline-items">
 <?php



$resultadop = mysqli_query($conexion,"SELECT idremitente,mensaje, publico, DATE_FORMAT(`fechamensaje`, '%H:%i'),id FROM mensajes WHERE DATE_FORMAT(`fechamensaje`, '%e/%m/%Y')='$filad[0]' AND idusuario='$_SESSION[idusuario]' AND idremitente='$_GET[remitente]' ORDER BY fechamensaje DESC");



while($filap = mysqli_fetch_row($resultadop)){ 
$resultadopp = mysqli_query($conexion,"SELECT nombres, apellidos FROM usuarios WHERE id='$filap[0]' ");
$filapp = mysqli_fetch_row($resultadopp);
?>
	<div class="timeline-item clearfix">
		<div class="timeline-info">
			<i class="timeline-indicator icon-envelope btn btn-success no-hover green"></i>
		</div>
		
		<div class="widget-box transparent" id="listamsj<?php echo($filap[4]); ?>">
			<div class="widget-header widget-header-small">
				<h5 class="smaller"><a href="perfil.php?usuario=<?php echo ($filap[0]); ?>" target="_blank" class="blue"><?php echo ($filapp[0]." ".$filapp[1]); ?></a></h5>
				<span class="widget-toolbar no-border">
					<i class="icon-time bigger-110"></i>
					<?php echo ($filap[3]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				<?php echo ($filap[1]); ?> <br><b> <?php if($filap[2]==1){echo ("Público");}else{echo ("Privado");} ?> </b>

				<div class="pull-right action-buttons">
																		<a href="javascript: void(0)" onclick="eliminarMsj(<?php echo($filap[4]); ?>)" class="red">
																			<i class="icon-trash bigger-130"></i>
																		</a>
																	</div>

				
			</div></div>
		</div>
	 </div>


<?php } 





  ?>

 </div><!--/.timeline-items -->
</div><!--/.timeline-container -->

<?php }

}else{  



$resultadod = mysqli_query($conexion,"SELECT DISTINCT DATE_FORMAT(`fechamensaje`, '%e/%m/%Y') AS bah FROM mensajes WHERE idusuario='$_SESSION[idusuario]'  ORDER BY str_to_date(bah,'%e/%m/%Y') DESC");

while($filad = mysqli_fetch_row($resultadod)){?>

<div class="timeline-container">
 <div class="timeline-label">
	<span class="label label-grey arrowed-in-right label-lg">
		<b><?php 
		//$date = date('Y-m-d H:i:s');
		//echo ($date); 
		//echo (date_trunc('day', timestamp '2001-02-16 20:38:40'));
		echo($filad[0]); 
		?></b>
	</span>
 </div>
 <div class="timeline-items">


<?php



$resultadop = mysqli_query($conexion,"SELECT idremitente,mensaje, publico, DATE_FORMAT(`fechamensaje`, '%H:%i'),id FROM mensajes WHERE DATE_FORMAT(`fechamensaje`, '%e/%m/%Y')='$filad[0]' AND idusuario='$_SESSION[idusuario]' ORDER BY fechamensaje DESC");



while($filap = mysqli_fetch_row($resultadop)){ 
$resultadopp = mysqli_query($conexion,"SELECT nombres, apellidos FROM usuarios WHERE id='$filap[0]' ");
$filapp = mysqli_fetch_row($resultadopp);
?>
	<div class="timeline-item clearfix">
		<div class="timeline-info">
			<i class="timeline-indicator icon-envelope btn btn-success no-hover green"></i>
		</div>
		
		<div class="widget-box transparent" id="listamsj<?php echo($filap[4]); ?>">
			<div class="widget-header widget-header-small">
				<h5 class="smaller"><a href="perfil.php?usuario=<?php echo ($filap[0]); ?>" target="_blank" class="blue"><?php echo ($filapp[0]." ".$filapp[1]); ?></a></h5>
				<span class="widget-toolbar no-border">
					<i class="icon-time bigger-110"></i>
					<?php echo ($filap[3]); ?>
				</span>
				<span class="widget-toolbar">
					<a href="#" data-action="reload"><i class="icon-refresh"></i></a>
					<a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
				</span>
			</div>
			<div class="widget-body"><div class="widget-main">
				<?php echo ($filap[1]); ?> <br><b> <?php if($filap[2]==1){echo ("Público");}else{echo ("Privado");} ?> </b>

				<div class="pull-right action-buttons">
																		<a href="javascript: void(0)" onclick="eliminarMsj(<?php echo($filap[4]); ?>)" class="red">
																			<i class="icon-trash bigger-130"></i>
																		</a>
																	</div>

				
			</div></div>
		</div>
	 </div>


<?php } 





  ?>

 </div><!--/.timeline-items -->
</div><!--/.timeline-container -->

<?php } 

}if(isset($_POST['todos'])){
	$update ="UPDATE mensajes SET leido = 1 WHERE idusuario = ".$_SESSION['idusuario']."";
	$query = mysqli_query($conexion,$update);
}?>



</div>
</div>
								
								
								
								
								
								
								
								
								<!-- InstanceEndEditable -->
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->



<div class="modal fade" id="hacerred" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Red</h4>
      </div>
      <div class="modal-body">
      		<div class="form-group">
			  <label for="usr">Nombre de la Red:</label>
			  <input type="text" class="form-control" id="nombrered">
			  <p id="cargandored"></p>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button"id="crearred"class="btn btn-primary">Crear Red</button>
      </div>
    </div>
  </div>
</div>
					







<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='../assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->
		
		
  
  
		
		<script src="../assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/chosen.jquery.min.js"></script>
		<script src="../assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="../assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="../assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="../assets/js/date-time/moment.min.js"></script>
		<script src="../assets/js/date-time/daterangepicker.min.js"></script>
		<script src="../assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="../assets/js/jquery.knob.min.js"></script>
		<script src="../assets/js/jquery.autosize.min.js"></script>
		<script src="../assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="../assets/js/jquery.maskedinput.min.js"></script>
		<script src="../assets/js/bootstrap-tag.min.js"></script>
		<script src="popover.js"></script>

		<!-- ace scripts -->

		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
		<script type="text/javascript">
		//$.noConflict();
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chosen-select").chosen(); 
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});

				
				

				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('9999-99-99');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				/*$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Arrastra la foto aquí o click para elegir',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})*/
				
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				
				$('#modal-form2').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>

</body>
<!-- InstanceEnd --></html>
