$( document ).ready( function() {
	
	currentImage = 1;
	
	setInterval( function() {
		
		var lastImage = currentImage;
		
		currentImage++;
		if ( currentImage > 3 ) {
			currentImage = 1;
		}
		
		// Show the next image
		$( "#image-" + lastImage ).fadeOut( "fast", function() {
			$( "#image-" + currentImage ).fadeIn( "fast", function() { ; } )
		} );
		
	}, 1000 );
	
} );
