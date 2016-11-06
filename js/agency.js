// Agency Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top + 50)
        }, 1250, 'easeInOutExpo');

        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51,
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a:not(.dropdown-toggle)').click(function() {
        $('.navbar-toggle:visible').click();

    });

    //Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
          top: 100
        }
    })
     $(window).scroll(function() {
                var windowsHeight = $(document).height() - $(window).height();
                var currentScroll = $(window).scrollTop();

                var top = $('#mainNav').height();
                var aboutustop = $('#aboutus').position().top;
                var membershiptop = $('#membership').position().top;
                var membershipbottom = membershiptop + $(membership).height();


                console.log(currentScroll);
                 if( currentScroll > aboutustop - 70 && currentScroll < membershiptop - 20){
                    $(".navbar-custom").css("background-color","#5C5379");
                    console.log('our of range');
                }
                else if (currentScroll > membershiptop - 20  && currentScroll < membershipbottom + 200){
                    $(".navbar-custom").css("background-color","rgba(255 , 255, 255, 0.2)");
                     $(".navbar-collapse ").css("background-color","");
                     console.log('in range');
                }
                else if (currentScroll > membershipbottom + 100){
                    $(".navbar-custom").css("background-color","#5C5379");
                    console.log('after range');
                }
                else {
                     $(".navbar-custom").css("background-color","rgba(255 , 255, 255, 0.2)");
                     $(".navbar-collapse ").css("background-color","");
                     $(".").css("")

            }
     });




})(jQuery); // End of use strict
