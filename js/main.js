(function($) {
	
	/* Header Dropdown */
	// Do this when hovering over desktop menu dropdown
	$('header ul li.dropdown').mouseover(function(){
		$(this).addClass('show');
		$(this).find('ul.dropdown-menu').addClass('show');
	});
	// Do this when hovering away from desktop menu dropdown
	$('header ul li.dropdown').mouseout(function(){
		$(this).removeClass('show');
		$(this).find('ul.dropdown-menu').removeClass('show');
	});
	
	/* FAQs */
	$('.ifx-row-faqs .card .card-header a').on('click',function() {
		
		// On click of card
		var card = $(this).parent().parent();
		// Check whether the clicked card has the open class
		if ($(card).hasClass('open')) {
			// If it does, remove the open class from the clicked card 
			$(card).removeClass('open');
		} else {
			// If it doesn't, remove the open class from all cards in the faq
			$('.ifx-row-faqs .card').each(function() {
				$(this).removeClass('open');
			})
			
			// And then add the open class to the clicked element
			$(card).addClass('open');
		}
		
	});
	
	/* Form Element Wrap */
	$( ".ifx-wrap" ).wrapAll( "<div class='ifx-wrapper' />");
	$( ".ifx-sub-wrap" ).wrapAll( "<div class='ifx-sub-wrapper' />");
	
	
	/* Controls Carousel Active Button */
	$('.ifx-row-controls_carousel .slide-controls button').on('click',function() {
		
		$('.ifx-row-controls_carousel .slide-controls button').each(function() {
			$(this).removeClass('active');
		})
		
		$(this).addClass('active');
		
	})
	
	/* Function to disable scrolling */
	function noScroll() {
		window.scrollTo(0, 0);
	}
	
	/* Mobile Menu open/close */
	$('header .mobile-header button.navbar-toggler').on('click', function() {
		$('.mobile-menu-dropdown').slideDown();
		// Disable scroll
		window.addEventListener('scroll', noScroll);
	});
	$('header .mobile-menu-dropdown button.mobile-close').on('click', function() {
		$('.mobile-menu-dropdown').slideUp();
		// Enable scroll
		window.removeEventListener('scroll', noScroll);
	});
	
	
})( jQuery );