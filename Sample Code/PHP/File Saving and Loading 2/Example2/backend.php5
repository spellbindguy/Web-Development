<?

function Out( $message )
{
	echo( "<pre>" );
	print_r( $message );
	echo( "</pre>" );
}

// Load the existing menu if it exists

if ( file_exists( "menu.json" ) )
{
	$fileHandler = fopen( "menu.json", "r" );

	$menuItems = array();
	
	/*
	while ( $item = fgets( $fileHandler ) )
	{
		array_push( $menuItems, $item );
	}
	* */
	$menuItems = json_decode( fgets( $fileHandler ), true );
	fclose( $fileHandler );
	
	Out( "Menu:" );
	Out( $menuItems );
}


if ( isset( $_POST["submit-form"] ) )
{
	Out( "Add new item to menu" );
	
	// Open menu file and append to the end
	//$fileHandler = fopen( "menu.txt", "a" );
	$fileHandler = fopen( "menu.json", "w" );
	
	if ( $fileHandler == false ) { print_r( error_get_last() ); exit(); }
	
	Out( "Write menu:" );
	Out( $_POST["menu"] );
	/*
	foreach( $_POST["menu"] as $key=>$value )
	{
		fwrite( $fileHandler, $key . "=" . $value . "\t" );
	}
	fwrite( $fileHandler, "\n" );
	* */
	
	if ( !isset( $menuItems ) )
	{
		$menuItems = array();
	}
	
	array_push( $menuItems, $_POST["menu"] );
	fwrite( $fileHandler, json_encode( $menuItems ) );
	
	
	Out( "Done" );
	fclose( $fileHandler );	
}



?>
