$( document ).ready( function() {

	$( "#fade" ).click( function() {
		
		// Red items will disappear, and then blue items will appear
		$( ".red-bg" ).fadeOut( "fast", function() {
			// Code in here is executed when the fadeOut has completed.
			$( ".blue-bg" ).fadeIn( "fast", function() { ; } );
		} );
		
	} );
	
	$( "#slide" ).click( function() {
		
		// Blue items will disappear, then red items will appear
		$( ".blue-bg" ).slideUp( "fast", function() {
			// Code in here is executed when the slideUp has completed.
			$( ".red-bg" ).slideDown( "fast", function() { ; } );
		} );
		
	} );
	
} );


