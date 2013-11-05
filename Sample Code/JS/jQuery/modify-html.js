$( document ).ready( function() {

	$( "#change-html" ).click( function() {
		
		alert( $( "span" ).html() );
		
		// This will change the value of all spans
		$( "span" ).html( "HELLO!" );
		
	} );
	
} );


