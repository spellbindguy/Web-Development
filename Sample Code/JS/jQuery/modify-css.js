$( document ).ready( function() {

	$( "#toggle-css" ).click( function() {
		if ( $( "p" ).css( "color" ) == "rgb(255, 0, 0)" ) {
			$( "p" ).css( "color", "rgb(0, 0, 255)" );
		}
		else {
			$( "p" ).css( "color", "rgb(255, 0, 0)" );
		}
		
		$( "#toggle-css" ).val( $( "p" ).css( "color" ) );
	} );
	
} );


