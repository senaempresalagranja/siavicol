//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
// Esto es para que al scrolear cambie de color el menu de navegacion
$(document).ready(function() {
    $("#banner").css({
        "height": $(window).height() + "px"
    });
    var flag = false;
    var scroll;
    $(window).scroll(function() {
        scroll = $(window).scrollTop();
        if (scroll > 10) {
            if (!flag) {
                $(".navbar-default .navbar-nav>li>a").css({
                    "color": "#000"
                });
                $("nav").css({
                    "background-color": "#fff"
                });
                $("nav").css({
                    "box-shadow": "1px 0 7px 1px rgba(0, 0, 0, 0.35)"
                });
                flag = true;
            }
            // antes de bar el escrol este transparente l menu tenga color blanco el texto  
        } else {
            if (flag) {
                $(".navbar-default .navbar-nav>li>a").css({
                    "color": "#fff"
                });
                $("nav").css({
                    "background-color": "transparent"
                });
                $("nav").css({
                    "box-shadow": "1px 0 7px 1px rgba(0, 0, 0, 0)"
                });
                
                flag = false;
            }
        }
    });
});
// animaciones del boton ir arriba
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 5) {
            $('.ir-arriba').slideDown(600); //velocidad en la cual se esconde el boton
        } else {
            $('.ir-arriba').slideUp(300); //velocidad en la cual emerge el boton
        }
    });
});
// para que se habra la ventana modal
function Iniciar_sesion() {
    $("#Iniciar_sesion").modal("show");
}
// Esto es para Poder ver la contraseña 
// $(document).on('ready', function() {
//     $('#show-hide-passwd').on('click', function(e) {
//         e.preventDefault();
//         var current = $(this).attr('action');
//         // mostrar la contaseña
//         if (current == 'hide') {
//             $(this).prev().attr('type', 'text');
//             $(this).removeClass('icon-eye').addClass('icon-eye-blocked').attr('action', 'show');
//             $(this).css({
//                 "color": "#f44336"
//             });
//         }
//         // esconder la contraseña
//         if (current == 'show') {
//             $(this).prev().attr('type', 'password');
//             $(this).removeClass('icon-eye-blocked').addClass('icon-eye').attr('action', 'hide');
//             $(this).css({
//                 "color": "#4caf50"
//             });
//         }
//     })
// })