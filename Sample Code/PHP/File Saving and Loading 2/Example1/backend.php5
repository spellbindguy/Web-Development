<?

function Out( $message )
{
	echo( "<pre>" );
	print_r( $message );
	echo( "</pre>" );
}

if ( isset( $_POST["submit-form"] ) )
{
	Out( "Add new item to menu" );
	
	// Open menu file and append to the end
	$fileHandler = fopen( "menu.txt", "a" );
	
	if ( $fileHandler == false ) { print_r( error_get_last() ); exit(); }
	
	Out( "Write menu:" );
	Out( $_POST["menu"] );
	foreach( $_POST["menu"] as $key=>$value )
	{
		fwrite( $fileHandler, $key . "=" . $value . "\t" );
	}
	fwrite( $fileHandler, "\n" );
	
	Out( "Done" );
	fclose( $fileHandler );	
}

// Load the existing menu if it exists

if ( file_exists( "menu.txt" ) )
{

	$fileHandler = fopen( "menu.txt", "r" );

	$menuItems = array();

	while ( $item = fgets( $fileHandler ) )
	{
		array_push( $menuItems, $item );
	}
	fclose( $fileHandler );

}

?>
