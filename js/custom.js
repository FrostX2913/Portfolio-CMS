(function($) {
    'use strict';

	// Get the modal
	var modal = document.getElementById('logintrigger');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
    	if (event.target === modal) {
        	modal.style.display = "none";
    	}
	};

    // Main Navigation
    $( '.hamburger-menu' ).on( 'click', function() {
        $(this).toggleClass('close');
        $('.site-branding').toggleClass('hide');
        $('.site-navigation').toggleClass('show');
        $('.site-header').toggleClass('no-shadow');
    });

    // Scroll to Next Section
    $( '.scroll-down' ).click(function() {
        $( 'html, body' ).animate({
            scrollTop: $( '.scroll-down' ).offset().top + 100
        }, 800 );
    });

    //Tagline
    $('.tagline').hide();
    $(window).scroll(function() {
      if ($(this).scrollTop() > 150 && $(this).scrollTop() < 2000) {
        $('.tagline').fadeIn();
      } else {
        $('.tagline').fadeOut();
      }
    });  

    //Image drag
    var elements = document.getElementsByClassName('nodrag');
    for(var i=0; i<elements.length; i++) { 
    elements[i].draggable = false;
    }
    //document.getElementsByClassName('nodrag').draggable = false;

    // GENERAL SETTING
    window.sr = ScrollReveal({ reset: true });

    sr.reveal('.section-1', { 
        duration: 800,
        viewFactor: 0.5
    });

        sr.reveal('.section-3', { 
        duration: 1500,
        viewFactor: 0.5
    });

		//Registration Password Checker
		$('#reg-pass, #conf-pass').on('keyup', function () {
  		if ($('#reg-pass').val() === $('#conf-pass').val()) {
    		$('#matching').html('Passwords Match').css('color', 'green');
			$(':input[type="submit"]').prop('disabled', false);
			$(':input[type="submit"]').css('background-color','#4d90fe');
		
  		} else {
    		$('#matching').html('Passwords Do Not Match, Please Try Again').css('color', 'red');
			$(':input[type="submit"]').prop('disabled', true);
			$(':input[type="submit"]').css('background-color','#666');
		}
		});
	})(jQuery);


