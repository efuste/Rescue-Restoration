/*
 * Lawyers - HTML5 Template
 *
 * Author: www.matchthemes.com
 *
 */
 
(function($) {
    "use strict";
	
	$('.flexslider-home').flexslider({
			animation: "fade",
			slideshow: true,
			slideshowSpeed: 4000,
			animationSpeed: 600, 
			directionNav: true,
			controlNav: false,
			useCSS: false
									
					});

	$('.flexslider-testimonials').flexslider({
			animation: "slide",
			slideshow: true,
			slideshowSpeed: 4000,
			animationSpeed: 600, 
			directionNav: false,
			controlNav: true,
			useCSS: false
									
					});
	
	$(".gal-img a[data-rel^='prettyPhoto']").prettyPhoto({
						animation_speed: 'normal',
						autoplay_slideshow: true,
						slideshow: 3000
					});
	
	
$('.faq-section').hide();
$('h5.faq-title:first').addClass('active').next().show();

$('h5.faq-title').click(function(){

  if( $(this).next().is(':hidden') ) {
  
  $('h5.faq-title').removeClass('active').next().slideUp(); 
  $(this).toggleClass('active').next().slideDown();
  
  } else {
   $('h5.faq-title').removeClass('active').next().slideUp();
 }
  return false; 
 });

$('#myModal').on('hidden.bs.modal', function () {
  $(this).removeData('bs.modal');
});


})(jQuery);


