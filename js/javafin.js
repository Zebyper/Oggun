/*---------MENU DESPLEGABLE INTERACTIVO----*/
function DropDown(el) {
				this.dd = el;
				this.initEvents();
}

DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
}

$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-5').removeClass('active');
				});

			});
			
			
/*---------FORMULARIO INTERACTIVO----*/			
			//the form wrapper (includes all forms)
var $form_wrapper   = $('#form_wrapper'),
 
//the current form is the one with class "active"
$currentForm    = $form_wrapper.children('form.active'),
     
//the switch form links
$linkform       = $form_wrapper.find('.linkform');


$form_wrapper.children('form').each(function(i){
    var $theForm    = $(this);
    //solve the inline display none problem when using fadeIn/fadeOut
    if(!$theForm.hasClass('active'))
        $theForm.hide();
    $theForm.data({
        width   : $theForm.width(),
        height  : $theForm.height()
    });
});

setWrapperWidth();

$linkform.bind('click',function(e){
    var $link   = $(this);
    var target  = $link.attr('rel');
    $currentForm.fadeOut(400,function(){
        //remove class "active" from current form
        $currentForm.removeClass('active');
        //new current form
        $currentForm= $form_wrapper.children('form.'+target);
        //animate the wrapper
        $form_wrapper.stop()
                     .animate({
                        width   : $currentForm.data('width') + 'px',
                        height  : $currentForm.data('height') + 'px'
                     },500,function(){
                        //new form gets class "active"
                        $currentForm.addClass('active');
                        //show the new form
                        $currentForm.fadeIn(400);
                     });
    });
    e.preventDefault();
});


function setWrapperWidth(){
    $form_wrapper.css({
        width   : $currentForm.data('width') + 'px',
        height  : $currentForm.data('height') + 'px'
    });
}

$form_wrapper.find('input[type="submit"]')
             .click(function(e){
                //document.getElementById("register_form").submit();
             });  
			 
			 
			 /**--- Boton que aparece registro---*/
			 
function muestraRegistro(){
	 document.getElementById("form_wrapper").style.visibility = "visible";
}
	 		 
			 function ocultaRegistro(){
	 document.getElementById("form_wrapper").style.visibility = "hidden";
	 }
			 
			  function muestraEdicion(){
	 document.getElementById("fondoeditarperfil").style.visibility = "visible";
	 document.getElementById("editorPerfil").style.visibility = "visible";
	 }
	 		 
			  function ocultaEdicion(){
	 document.getElementById("fondoeditarperfil").style.visibility = "hidden";
	 document.getElementById("editorPerfil").style.visibility = "hidden";
	  document.getElementById("editorFoto").style.visibility = "hidden";
	 }
			 
			 
			  function abrirEditorFoto(){
	 document.getElementById("fondoeditarperfil").style.visibility = "visible";
	 document.getElementById("editorFoto").style.visibility = "visible";
	 document.getElementById("editorPerfil").style.visibility = "hidden";
	 }
	 		 
			 function cerrarEditorFoto(){
	 document.getElementById("fondoeditarperfil").style.visibility = "hidden";
	 document.getElementById("editorFoto").style.visibility = "hidden";
	 }