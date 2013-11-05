$( document ).ready( function() {

	$( "#change-colors" ).click( function() {
		
		var redItems = $( ".red-bg" );
		var blueItems = $( ".blue-bg" );
		
		redItems.addClass( "blue-bg" );
		redItems.removeClass( "red-bg" );
		
		blueItems.addClass( "red-bg" );
		blueItems.removeClass( "blue-bg" );
		
	} );
	
} );


