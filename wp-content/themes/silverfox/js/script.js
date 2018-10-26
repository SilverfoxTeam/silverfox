$ = jQuery.noConflict(); 

//Se ejecuta el codigo hasta que la pagina carge por completo
$(document).ready(function(){
    
    //Ocultar y mostrar menu
    $('.mobile-menu a').on('click', function(){
        $('div.navigation-container').toggle();
    });

    //Reacción a dimensiones de la pantalla
    var breakpoint = 768;

    $(window).resize(function(){
        if($(document).width() >= breakpoint){
            $('div.navigation-container').show();
        } else {
            $('div.navigation-container').hide();
        }
    })
});
