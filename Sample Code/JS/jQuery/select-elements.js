$( document ).ready( function() {
	
	// Select a class with .
	$( ".text-item" ).css( "color", "#FF0000" );
	
	// Select the first item of this class
	$( ".text-item" ).first().css( "color", "#0000FF" );
	
	
	// Select an element by ID with #
	$( "#username" ).val( "rjmfff" );
	
	
	// Select all paragraphs - no prefix symbol
	$( "span" ).html( "?!" );
	
} );


