(function($) {
	// Do this when hovering over desktop menu dropdown
	$('header .row ul li.dropdown').mouseover(function(){
		$(this).addClass('show');
		$(this).find('ul.dropdown-menu').addClass('show');
	});
	// Do this when hovering away from desktop menu dropdown
	$('header .row ul li.dropdown').mouseout(function(){
		$(this).removeClass('show');
		$(this).find('ul.dropdown-menu').removeClass('show');
	});
})( jQuery );