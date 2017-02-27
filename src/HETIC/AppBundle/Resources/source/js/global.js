$( document ).ready(function() {
    $(".burger-menu").click(function () {
      $(this).toggleClass("menu-on");
    });

    $('.burger-menu').on('click', function(){
      $('header nav').fadeToggle();
    });
  });


$(document).ready(function () {
            $('.slow').on('click', function () { // Au clic sur un élément
                var page = $(this).attr('href'); // Page cible
                var speed = 750; // Durée de l'animation (en ms)
                $('html, body').animate({
                    scrollTop: $(page).offset().top
                }, speed); // Go
                return false;
            });
        });

