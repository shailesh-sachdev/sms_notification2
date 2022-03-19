/* Custom JS File */
	jQuery(document).ready(function($) {
		if ( $('#goTop').length > 0 ) {
		    // Hide the toTop button when the page loads.
		    $("#goTop").css("display", "none");

		      // This function runs every time the user scrolls the page.
		      $(window).scroll(function(){
		        // Check weather the user has scrolled down (if "scrollTop()"" is more than 0)
		        if($(window).scrollTop() > 0){
		          // If it's more than or equal to 0, show the toTop button.
		          $("#goTop").fadeIn("slow");
		      }
		      else {
		          // If it's less than 0 (at the top), hide the goTop button.
		          $("#goTop").fadeOut("slow");
		      }
		  	});

			// When the user clicks the toTop button, we want the page to scroll to the top.
			jQuery("#goTop").click(function(event){

				// Disable the default behaviour when a user clicks an empty anchor link.
				// (The page jumps to the top instead of // animating)
				event.preventDefault();
				// Animate the scrolling motion.
				jQuery("html, body").animate({
					scrollTop:0
				},"slow");
			});
	  	}


		//Post Slider Widget JS
		if ($('.event-slider-wrapper').length > 0) {
			$(".event-slider-wrapper").slick({
				items: 1,
				dots: false,
				infinite: true,
				centerMode: false,
				autoplay: true,
				lazyLoad: 'ondemand',
				adaptiveHeight: true,
				arrows : true
			});
		}

		/*search*/
		if ( $('.search-box a').length > 0 ) {
			$('.search-box a').click(function (e) {
				e.preventDefault();
				$('.header-search-block').fadeToggle();
			});
		}

		if ( $('.menu-toggle').length > 0 ) {
			$('.menu-toggle').click(function () {
				$(this).toggleClass('change');

			});
		}

});