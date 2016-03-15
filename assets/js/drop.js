$(document).ready(function() {

	$("a#toggle").on('click', function(e) {
	$('body').toggleClass('js-open');
	$('nav').toggleClass('js-open');
	    e.preventDefault();
	});

	$(".drop-background").on('click', function() {
	  $('body, nav').removeClass('js-open');
	});

});	