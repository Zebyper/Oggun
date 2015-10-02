
   $('[data-toggle=mensaje]').popover({
        placement: 'bottom',        
        template: '<div class="popover-all"><div class="popover-arrow"></div><div class="popover-inner"><h3 class="popover-title">Example</h3><div class="popover-content"></div></div></div>',
   		html: true,
   		title: 'Mensajería -- <a href="chat.php">Hacer Red</a>',
   		content: function() {
      return $('#mensajeria').html();
    }
    });


   $('#mensajes').click(function(){
   		$.ajax({
                url: 'privado.php',
                method: 'POST',
                data: {todos: true},
                
                success:  function (msg) {
                      $('.burbuja').html("0");
                     
                }
        });
   });

   

  

   $('[data-toggle=notificaciones]').popover({
        placement: 'bottom',        
        template: '<div class="popover-all"><div class="popover-arrow"></div><div class="popover-inner"><h3 class="popover-title">Example</h3><div class="popover-content"></div></div></div>',
   		html: true,
   		title: 'Notificaciones',
   		content: function() {

      return $('#notificacion').html();
    }
    });



   $('#notificaciones').click(function(){
   		$.ajax({
                url: 'notificaciones.php',
                method: 'POST',
                data: {todos: true},
                
                success:  function (msg) {
                      $('.burbuja').html("0");
                      
                }
        });
   });

   