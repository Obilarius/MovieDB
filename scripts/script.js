jQuery(document).ready(function($) {

	// $('a').on('click', function(e) {
	// 	e.preventDefault();
	// });

	$('.trigger-sidebar-toggle').on('click', function() {
		$('body').toggleClass('sidebar-is-open');
	});

	$('.tilt-poster').tilt({
		scale: 1.03,
		perspective: 500
	});

});
