/* Author: Luke McDonald - celtic7.com

*/
//jQuery.noConflict();

(function($){

	// Fade
	$('.fade').hover(function() {
	  $(this).fadeTo("fast", 0.7);
	}, function() {
	  $(this).fadeTo("fast", 1);
	});
	
	// FancyBox content overlay
	$(".page_item a, .menu-item a").fancybox({
		'width'						: '60%',
		'height'					: '95%',
		'autoScale'				: false,
		'autoDimensions'	: false,
		'centerOnScroll'	: true,
		'overlayShow'			: false
	});
	
	// If using custom menu's, set first li to have an ID of home
	$(".custom-menu li:first").attr('id', 'home');
	
	
})(window.jQuery);












