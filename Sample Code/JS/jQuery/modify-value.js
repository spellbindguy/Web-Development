$( document ).ready( function() {

	$( "#subtitles" ).click( function() {
		
		if ( $( "#subtitles" ).val() == "Turn on subtitles" ) {
			$( "#subtitles" ).val( "Turn off subtitles" );
		}
		else {
			$( "#subtitles" ).val( "Turn on subtitles" );
		}
		
	} );
	
} );


