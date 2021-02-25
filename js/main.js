(function($) {
	// Header Dropdown
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
	
	// FAQs
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
	
})( jQuery );