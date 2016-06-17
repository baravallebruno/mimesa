$(document).ready(function(){

    /*--- slide down barra de navegación ---*/
    $(function () {
        $(window).scroll(function () { 
            if ($(this).scrollTop() > 450) {
                $('#topnav').addClass("activo");
            } else {
                $('#topnav').removeClass("activo");
            }
        });
    });


    /*--- tooltips ---*/
    $('[data-toggle="tooltip"]').tooltip();


    /*--- boton ir arriba ---*/
    $('#ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 400);
    });

});

$(document).ready(main);
 
var contador = 1;
 
function main(){
    $('.bt-menu').click(function(){
 
        if(contador == 1){
            $('nav').animate({
                left: '0'
            });
            contador = 0;
        } else {
            contador = 1;
            $('nav').animate({
                left: '-100%'
            });
        }
 
    });
};




