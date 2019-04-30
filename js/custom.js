

;(function( jQuery, window ) {
  "use strict";
  
  
  //Scroll To top  
  var duration = 800; 
  $('.top').click(function() {
    $('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
  
  
  /* SITENAME colored */
  $(".sitename a").lettering("words");
  $(".sitetag").lettering("words");
  
  
  /* Settings of the ticker */
  $('.newsticker').newsTicker({
    row_height: 40,
    max_rows: 1,
    speed: 1000,
    direction: 'down',
    duration: 4000,
    autostart: 1,
    pauseOnHover: 1
  }); 
  
  
  /* matchHeigh */
  // apply your matchHeight on DOM ready (they will be automatically re-applied on load or resize)

  // Home Bar 1 - apply matchHeight to each item container's items
  $('.news-grid-5').each(function() {
    $(this).children('.item').matchHeight({
       
    });
  }); 
  
  /*-----------------------------------------------------------------------------------*/
	/*  Post Meta Share
	/*-----------------------------------------------------------------------------------*/

	$( ".moreshare-on" ).on( "click", function() {
		$( ".more-share" ).css( "display", "inline-block" );
		$( ".moreshare-on" ).css( "display", "none" );
	});

	$( ".moreshare-off" ).on( "click", function() {
		$( ".more-share" ).css( "display", "none" );
		$( ".moreshare-on" ).css( "display", "inline-block" );
	});


})( jQuery, window );